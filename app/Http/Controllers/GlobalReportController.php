<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Modification;
use App\Models\User;
use App\Models\Report;
use App\Models\Entity;

class GlobalReportController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $reports = Report::where('entity_id', auth()->user()->entity_id)->get();
            $users = User::where('entity_id', auth()->user()->entity_id)->get();
            $entities = Entity::where('id', auth()->user()->entity_id)->get();
        } else {
            $reports = Report::all();
            $users = User::all();
            $entities = Entity::all();
        }
        $categories = Category::select('name', 'controller', 'number')->get();
        $currentCategory = Category::where('controller', 'report')->first();
        return view('forms/reporte')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('reports', $reports)
            ->with('users', $users)
            ->with('entities', $entities);
    }

    public function store(Request $request)
    {


        $currentEntity = Entity::find(auth()->user()->entity_id);
        $route = $currentEntity->name . '/' . 'Reporte global';

        $file = $request->file('report');
        $path = $file->storeAs('public/' . $route, $currentEntity->name . '_' . 'Reporte global' . $file->extension());
        $entity = $currentEntity->id;

        $path = str_replace('public/', '', $path);

        $report = new Report();
        $report->path = $path;
        $report->entity_id = $entity;
        $report->save();

        $modification = new Modification();
        $modification->user_id = auth()->user()->id;
        $modification->entity_id = auth()->user()->entity_id;
        $modification->message = "Ha subido un reporte global";
        $modification->save();


    }
}
