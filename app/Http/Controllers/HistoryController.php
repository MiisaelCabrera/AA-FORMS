<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Modification;
use App\Models\User;
use App\Models\Entity;

class HistoryController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $modifications = Modification::where('entity_id', auth()->user()->entity_id)->get();
            $users = User::where('entity_id', auth()->user()->entity_id)->get();
            $entities = Entity::where('id', auth()->user()->entity_id)->get();
        } else {
            $modifications = Modification::all();
            $users = User::all();
            $entities = Entity::all();
        }
        $categories = Category::select('name', 'controller')->get();
        $currentCategory = Category::where('controller', 'history')->first();
        return view('forms/historial')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('modifications', $modifications)
            ->with('users', $users)
            ->with('entities', $entities);
    }
}
