<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Completed;
use App\Models\Modification;


class FormCompletedController extends Controller
{
    public function store(Request $request)
    {
        $forms = Form::where('entity_id', auth()->user()->entity_id)->where('isCompleted', 1)->get();
        ///if ($forms->count() != 8) {
           // return response()->json(['message' => 'No se han completado todos los formularios'], 400);
        //}
        $completed = new Completed();
        $completed->entity_id = auth()->user()->entity_id;
        $completed->save();

        $modification = new Modification();
        $modification->entity_id = auth()->user()->entity_id;
        $modification->message = 'Ha completado y enviado los formularios';
        $modification->user_id = auth()->user()->id;
        $modification->save();

        return response()->json(['message' => 'Formularios completados'], 200);

    }
}
