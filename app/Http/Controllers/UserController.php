<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->entity_id = $request->entity;
        $user->save();
    }
}
