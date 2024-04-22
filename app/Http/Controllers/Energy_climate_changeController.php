<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\Multiinput;
use App\Models\Answer;
use App\Models\File;
use App\Models\Entity;

class Energy_climate_changeController extends Controller
{
    public function index()
    {
        if (!auth()->hasUser())
            return redirect()->route('login');
        $categories = Category::select('name', 'controller')->get();
        $currentCategory = Category::where('controller', 'energy_climate_change')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get();

        $a15 = 0;

        $answer15 = Answer::where('entity_id', auth()->user()->entity_id)->where('question_id', '5')->get();
        if ($answer15->count() != 0) {
            $a15 = $answer15[0]->answer;
        }

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
            ->with('a15', $a15);

    }
    function store(Request $request)
    {

        $inputs = $request->except('_token');


        $currentCategory = Category::where('controller', 'energy_climate_change')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get()->toArray();
        $entity = Entity::find(auth()->user()->entity_id);


        $array = [];

        foreach ($inputs as $key => $value) {


            if (!$request->hasFile($key)) {
                for ($i = 'a'; $i <= 'z'; $i++) {
                    if (stripos($key, '__' . $i) !== false) {
                        $key = str_replace('__' . $i, "", $key);
                    }
                }
                $found_key = array_search($key, array_column($questions, 'name'));
                $questionId = $questions[$found_key]['id'];


                $answer = new Answer();
                $answer->answer = $value;
                $answer->entity_id = auth()->user()->entity_id;
                $answer->question_id = $questionId;

                $answer->save();
            } else {
                $name = str_replace('_evidence', "", $key);
                $found_key = array_search($name, array_column($questions, 'name'));
                $questionNumber = $questions[$found_key]['number'];
                $route = $entity->name . '/' . $currentCategory->name . '/' . $currentCategory->number . '.' . $questions[$found_key]['number'];
                $file = $request->file($key);
                $fileRoute = $file->storeAs($route, $currentCategory->number . '.' . $questionNumber . '.docx');

                $file = new File();
                $file->path = $fileRoute;
                $file->entity_id = auth()->user()->entity_id;
                $file->question_id = $questionId;
                $file->save();
            }

        }

    }
}
