<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;

class HistoryController extends Controller
{
    public function index()
    {
        if (!auth()->hasUser())
            return redirect()->route('login');
        $categories = Category::select('name', 'controller')->get();
        $currentCategory = Category::where('controller', 'history')->first();
        $questions = Question::where('category_id', $currentCategory->id)->get();
        return view('forms/infraestructura')->with('categories', $categories)->with('currentCategory', $currentCategory)->with('questions', $questions);
    }
}
