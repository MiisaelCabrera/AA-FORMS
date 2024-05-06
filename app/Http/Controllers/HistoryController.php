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
            $files = HistoryFile::where('entity_id', auth()->user()->entity_id)->orWhere('entity_id', '1')->orderByDesc('created_at')->get();

            $entities = Entity::where('id', auth()->user()->entity_id)->orWhere('id', '1')->get();
        } else {
            $files = HistoryFile::orderByDesc('created_at')->get();

            $entities = Entity::all();
        }

        $categories = Category::select('name', 'controller', 'number')->get();
        $currentCategory = Category::where('controller', 'history')->first();
        return view('forms/historial')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('files', $files)
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

    public function destroy($id)
    {
        $file = HistoryFile::find($id);
        $files = HistoryFile::where('path', $file->path)->get();
        if (is_null($files)) {
            return response()->json(['message' => 'Archivo no encontrado'], 404);
        }
        foreach ($files as $file) {
            Storage::delete($file->path);
            $file->delete();
        }
        return response()->json(['message' => 'Archivo eliminado'], 200);
    }


}
