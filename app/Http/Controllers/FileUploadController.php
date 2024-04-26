<?php

namespace App\Http\Controllers;

use App\Models\HistoryFile;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Entity;
use App\Models\Modification;

class FileUploadController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $currentCategory = Category::where('controller', 'filesUpload')->first();
        if (auth()->user()->role != 'superadmin') {
            return redirect()->route('/');
        } else {
            $entities = Entity::all();
        }
        return view('forms/archivos')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('entities', $entities);
    }

    public function store(Request $request)
    {


        $currentEntity = Entity::find($request->entity);

        $route = $currentEntity->name . '/' . 'Historial';

        $newFile = $request->file('historyFile');
        $path = $newFile->storeAs('public/' . $route, $newFile->getClientOriginalName());

        $path = str_replace('public/', '', $path);

        $file = new HistoryFile();
        $file->entity_id = $request->entity;
        $file->path = $path;
        $file->save();

        $modification = new Modification();
        $modification->user_id = auth()->user()->id;
        $modification->entity_id = auth()->user()->entity_id;
        $modification->message = "Ha subido un archivo al historial";
        $modification->save();


    }
}
