<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestFormUser;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', [
            'roles' =>$roles
        ]);
    }

    public function save(RequestFormUser $request)
    {

        dd($request->all());
    }
}
