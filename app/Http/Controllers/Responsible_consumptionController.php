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

class Responsible_consumptionController extends Controller
{
    public function index()
    {
        $categories = Category::select('name', 'controller', 'number')->get();
        $currentCategory = Category::where('controller', 'responsible_consumption')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get();
        $entities = Entity::all();

        $files = File::where('entity_id', auth()->user()->entity_id)->get();

        $multiinputs = [];

        $answers = Answer::where('entity_id', auth()->user()->entity_id)->get();

        foreach ($questions as $question) {
            $questionInputs = Multiinput::where('question_id', $question->id)->get();
            if ($questionInputs->count() != 0) {
                $multiinputs[$question->id] = $questionInputs;
            }
        }

        return view('forms/consumo')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('questions', $questions)
            ->with('multiinputs', $multiinputs)
            ->with('answers', $answers)
            ->with('entities', $entities)
            ->with('files', $files);
    }

    function store(Request $request)
    {

        $inputs = $request->except('_token');


        $currentCategory = Category::where('controller', 'responsible_consumption')->first();
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
                    $fileRoute = $file->storeAs('public/' . $route, $currentCategory->number . '.' . $questionNumber . $file->extension());
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
        $modification->message = 'Ha modificado la sección de Consumo Responsable';
        $modification->save();

    }

    function update(Request $request, $id)
    {

        $inputs = $request->except(['_token', '_method']);

        $currentCategory = Category::where('controller', 'responsible_consumption')->first();
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
                        if (strpos($key, '__' . $i)) {
                            $name = $name . "." . $i;
                        }
                    }

                    for ($i = 'A'; $i <= 'Z'; $i++) {
                        if (strpos($key, '__' . $i)) {
                            $name = $name . "." . $i;
                        }
                    }
                    for ($i = 0; $i <= 9; $i++) {
                        for ($j = 0; $j < substr_count($key, '__' . $i); $j++) {
                            $name = $name . "." . $i;
                        }
                    }
                    array_push($array, $name);

                    $answer = Answer::whereRaw('BINARY name = ?', [$name])->first();
                    if (is_null($answer)) {
                        $answer = new Answer();
                        $answer->answer = $value;
                        $answer->entity_id = auth()->user()->entity_id;
                        $answer->name = $name;
                        $answer->question_id = $questionId;

                        $answer->save();
                    } else {
                        $answer->answer = $value;
                        $answer->update();
                    }
                } else {

                    $name = str_replace('_evidence', "", $key);
                    $found_key = array_search($name, array_column($questions, 'name'));
                    $questionNumber = $questions[$found_key]['number'];
                    $route = $entity->name . '/' . $currentCategory->name . '/' . $currentCategory->number . '.' . $questions[$found_key]['number'];
                    $file = $request->file($key);
                    $fileRoute = $file->storeAs('public/' . $route, $currentCategory->number . '.' . $questionNumber . $file->extension());
                    $questionId = $questions[$found_key]['id'];

                    $fileRoute = str_replace('public/', '', $fileRoute);

                    $file = File::where('question_id', $questionId)->first();
                    if (is_null($file)) {
                        $file = new File();
                        $file->path = $fileRoute;
                        $file->entity_id = auth()->user()->entity_id;
                        $file->question_id = $questionId;
                        $file->save();
                    } else {
                        $file->path = $fileRoute;
                        $file->update();
                    }
                }
            }


        }


        $modification = new Modification();
        $modification->user_id = auth()->user()->id;
        $modification->entity_id = auth()->user()->entity_id;
        $modification->message = 'Ha modificado la sección de Consumo Responsable';
        $modification->save();

    }
}
