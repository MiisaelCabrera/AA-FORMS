<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\Multiinput;
use App\Models\Answer;
use App\Models\File;
use App\Models\Entity;
use App\Models\Modification;

class Energy_climate_changeController extends Controller
{
    public function index()
    {
        $categories = Category::select('name', 'controller', 'number')->get();
        $currentCategory = Category::where('controller', 'energy_climate_change')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get();
        $entities = Entity::all();

        $files = File::where('entity_id', auth()->user()->entity_id)->get();

        $a15 = 0;

        $answer15 = Answer::where('entity_id', auth()->user()->entity_id)->where('question_id', '5')->get();
        if ($answer15->count() != 0) {
            $a15 = $answer15[0]->answer;
        }
        $answers = Answer::where('entity_id', auth()->user()->entity_id)->get();

        $multiinputs = [];

        foreach ($questions as $question) {
            $questionInputs = Multiinput::where('question_id', $question->id)->get();
            if ($questionInputs->count() != 0) {
                $multiinputs[$question->id] = $questionInputs;
            }
        }
        return view('forms/energia')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('questions', $questions)
            ->with('multiinputs', $multiinputs)
            ->with('a15', $a15)
            ->with('answers', $answers)
            ->with('entities', $entities)
            ->with('files', $files);

    }
    function store(Request $request)
    {

        $inputs = $request->except('_token');


        $currentCategory = Category::where('controller', 'energy_climate_change')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get()->toArray();
        $entity = Entity::find(auth()->user()->entity_id);

        $array = [];

        foreach ($inputs as $key => $value) {


            if ($value != null) {

                if (!$request->hasFile($key)) {

                    $newkey = $key;

                    for ($i = 'a'; $i <= 'z'; $i++) {
                        if (stripos($newkey, '__' . $i)) {
                            $newkey = str_replace('__' . $i, "", $newkey);
                            $newkey = str_replace('__' . strtoupper($i), "", $newkey);
                        }
                    }
                    for ($i = 0; $i <= 9; $i++) {
                        if (stripos($newkey, '__' . $i)) {
                            $newkey = str_replace('__' . $i, "", $newkey);
                        }
                    }
                    $found_key = array_search($newkey, array_column($questions, 'name'));


                    $questionId = $questions[$found_key]['id'];

                    $name = $currentCategory->number . '.' . $questions[$found_key]['number'];


                    for ($i = 'a'; $i <= 'z'; $i++) {
                        if (stripos($key, '__' . $i)) {
                            $name = $name . "." . $i;
                        }
                    }
                    for ($i = 0; $i <= 9; $i++) {
                        for ($j = 0; $j < substr_count($key, '__' . $i); $j++) {
                            $name = $name . "." . $i;
                        }
                    }

                    $answer = new Answer();
                    $answer->answer = $value;
                    $answer->entity_id = auth()->user()->entity_id;
                    $answer->name = $name;
                    $answer->question_id = $questionId;

                    array_push($array, $name);

                    $answer->save();
                } else {
                    $name = str_replace('_evidence', "", $key);
                    $found_key = array_search($name, array_column($questions, 'name'));
                    $questionNumber = $questions[$found_key]['number'];
                    $route = $entity->name . '/' . $currentCategory->name . '/' . $currentCategory->number . '.' . $questions[$found_key]['number'];
                    $file = $request->file($key);
                    $fileRoute = $file->storeAs('public/' . $route, $currentCategory->number . '.' . $questionNumber . '.docx');
                    $questionId = $questions[$found_key]['id'];

                    $fileRoute = str_replace('public/', '', $fileRoute);

                    $file = new File();
                    $file->path = $fileRoute;
                    $file->entity_id = auth()->user()->entity_id;
                    $file->question_id = $questionId;
                    $file->save();
                }
            }
        }
        $modification = new Modification();
        $modification->user_id = auth()->user()->id;
        $modification->entity_id = auth()->user()->entity_id;
        $modification->message = 'Ha modificado la sección de Energía y Cambio Climático';
        $modification->save();

    }
}
