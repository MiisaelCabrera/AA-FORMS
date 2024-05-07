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
use App\Models\Form;
use App\Models\Completed;

class EnviromentController extends Controller
{
    public function index()
    {
        $categories = Category::select('name', 'controller', 'number')->get();
        $entities = Entity::all();
        $currentCategory = Category::where('controller', 'enviroment')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get();
        $area = Answer::where('entity_id', auth()->user()->entity_id)
            ->where('question_id', 2)
            ->get();

        $ground = Answer::where('entity_id', auth()->user()->entity_id)
            ->where('question_id', 4)
            ->get();

        $answers = Answer::where('entity_id', auth()->user()->entity_id)->get();
        $files = File::where('entity_id', auth()->user()->entity_id)->get();

        $isCompleted = false;

        $form = Completed::where('entity_id', auth()->user()->entity_id)->first();
        if (!is_null($form)) {
            $isCompleted = true;
        }



        $totalArea = 0;
        $totalGround = 0;
        if ($area->count() != 0) {
            $totalArea = $area[0]->answer;
        }
        if ($ground->count() != 0) {
            $totalGround = $ground[0]->answer;
        }

        $multiinputs = [];

        foreach ($questions as $question) {
            $questionInputs = Multiinput::where('question_id', $question->id)->get();
            if ($questionInputs->count() != 0) {
                $multiinputs[$question->id] = $questionInputs;
            }
        }

        return view('forms/entorno')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('questions', $questions)
            ->with('multiinputs', $multiinputs)
            ->with('totalArea', $totalArea)
            ->with('totalGround', $totalGround)
            ->with('answers', $answers)
            ->with('entities', $entities)
            ->with('files', $files)
            ->with('isCompleted', $isCompleted);
    }

    function store(Request $request)
    {

        $inputs = $request->except(['_token', '_method', 'isCompleted']);


        $currentCategory = Category::where('controller', 'enviroment')->first();
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
        $modification->message = 'Ha modificado la sección de Entorno';
        $modification->save();

    }

    function update(Request $request, $id)
    {

        $inputs = $request->except(['_token', '_method', 'isCompleted']);


        $currentCategory = Category::where('controller', 'enviroment')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get()->toArray();
        $entity = Entity::find(auth()->user()->entity_id);


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

                    $answer = Answer::where('name', $name)->first();
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
        $modification->message = 'Ha modificado la sección de Entorno';
        $modification->save();

        $form = Form::where('entity_id', auth()->user()->entity_id)->where('category_id', $currentCategory->id)->first();
        if (is_null($form)) {
            $form = new Form();
            $form->category_id = $currentCategory->id;
            $form->entity_id = auth()->user()->entity_id;
            $form->isCompleted = $request->isCompleted;
            $form->save();
        } else {
            $form->isCompleted = $request->isCompleted;
            $form->update();
        }

    }
}
