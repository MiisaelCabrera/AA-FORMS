<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\HistoryFile;
use App\Models\User;
use App\Models\Entity;
use Illuminate\Support\Facades\Storage;

class HistoryController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $files = HistoryFile::where('entity_id', auth()->user()->entity_id)->orderByDesc('created_at')->get();
            $users = User::where('entity_id', auth()->user()->entity_id)->get();
            $entities = Entity::where('id', auth()->user()->entity_id)->get();
        } else {
            $files = HistoryFile::orderByDesc('created_at')->get();
            $users = User::all();
            $entities = Entity::all();
        }

        $categories = Category::select('name', 'controller', 'number')->get();
        $currentCategory = Category::where('controller', 'history')->first();
        return view('forms/historial')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('files', $files)
            ->with('users', $users)
            ->with('entities', $entities);
    }

    public function show($history)
    {
        $rutaArchivo = $history;

        if (!Storage::exists($rutaArchivo)) {
            abort(404);
        }

        return response()->file(storage_path($rutaArchivo));
    }


}
