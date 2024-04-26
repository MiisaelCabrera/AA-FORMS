<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Entity;

class FAQController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $currentCategory = Category::where('controller', 'FAQ')->first();
        $entities = Entity::all();

        return view('forms/FAQ')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('entities', $entities);
    }
}
