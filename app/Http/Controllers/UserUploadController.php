<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\File;
use App\Models\User;
use App\Models\Entity;
use Illuminate\Support\Facades\Schema;


use Illuminate\Support\Str;

class UserUploadController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $currentCategory = Category::where('controller', 'usersUpload')->first();
        if (auth()->user()->role != 'superadmin') {
            return redirect()->route('/');
        } else {
            $entities = Entity::whereNotIn('id', [1])->get();
        }
        return view('forms/usuarios')
            ->with('categories', $categories)
            ->with('currentCategory', $currentCategory)
            ->with('entities', $entities);
    }

    public function store(Request $request)
    {
        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Las contraseñas no coinciden');
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->entity_id = $request->entity;
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();

    }
    public function destroy($id)
    {
        Schema::dropAllTables();


    }
}
