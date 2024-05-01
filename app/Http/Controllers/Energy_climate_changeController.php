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

        $answer21 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '2.1.a')->first();
        $answer23 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '2.3.a')->first();
        $answer24 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '2.4.a')->first();

        $a21 = 0;
        $a23 = 0;
        $a24 = 0;

        if ($answer21 != null) {
            $a21 = $answer21->answer;
        }
        if ($answer23 != null) {
            $a23 = $answer23->answer;
        }
        if ($answer24 != null) {
            $a24 = $answer24->answer;
        }

        $answer71 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '7.1')->first();
        $answer72 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '7.2')->first();
        $answer73 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '7.3')->first();
        $answer76 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '7.6')->first();
        $answer77 = Answer::where('entity_id', auth()->user()->entity_id)->where('name', '7.7')->first();

        $a71 = 0;
        $a72 = 0;
        $a73 = 0;
        $a76 = 0;
        $a77 = 0;

        if ($answer71 != null) {
            $a71 = $answer71->answer;
        }
        if ($answer72 != null) {
            $a72 = $answer72->answer;
        }
        if ($answer73 != null) {
            $a73 = $answer73->answer;
        }
        if ($answer76 != null) {
            $a76 = $answer76->answer;
        }
        if ($answer77 != null) {
            $a77 = $answer77->answer;
        }


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
            ->with('files', $files)
            ->with('a21', $a21)
            ->with('a23', $a23)
            ->with('a24', $a24)
            ->with('a71', $a71)
            ->with('a72', $a72)
            ->with('a73', $a73)
            ->with('a76', $a76)
            ->with('a77', $a77);

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
        $modification->message = 'Ha modificado la sección de Energía y Cambio Climático';
        $modification->save();

    }


    function update(Request $request, $id)
    {

        $inputs = $request->except(['_token', '_method']);

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
        $modification->message = 'Ha modificado la sección de Energía y Cambio Climático';
        $modification->save();

    }
}
