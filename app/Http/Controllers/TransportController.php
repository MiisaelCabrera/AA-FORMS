<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\Multiinput;


class TransportController extends Controller
{
    public function index()
    {
        $categories = Category::select('name', 'controller')->get();
        $currentCategory = Category::where('controller', 'transport')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get();

        $multiinputs = [];

        foreach ($questions as $question) {
            $questionInputs = Multiinput::where('question_id', $question->id)->get();
            if ($questionInputs->count() != 0) {
                $multiinputs[$question->id] = $questionInputs;
            }
        }

        return view('forms/transporte')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('questions', $questions)
            ->with('multiinputs', $multiinputs);
    }
}
