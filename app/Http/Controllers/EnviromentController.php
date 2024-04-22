<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\Multiinput;
use App\Models\Answer;
use App\Models\File;
use App\Models\Entity;

class EnviromentController extends Controller
{
    public function index()
    {
        if (!auth()->hasUser())
            return redirect()->route('login');
        $categories = Category::select('name', 'controller')->get();
        $currentCategory = Category::where('controller', 'enviroment')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get();
        $area = Answer::where('entity_id', auth()->user()->entity_id)
            ->where('question_id', 2)
            ->get();

        $ground = Answer::where('entity_id', auth()->user()->entity_id)
            ->where('question_id', 4)
            ->get();

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
            ->with('totalGround', $totalGround);
    }

    function store(Request $request)
    {

        $inputs = $request->except('_token');


        $currentCategory = Category::where('controller', 'enviroment')->first();
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
            array_push($array, $found_key);

        }

    }
}
