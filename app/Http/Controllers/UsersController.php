<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
    public function create(){

        return view('users.create');
    }

    public function show(User $user){

        return View('users.show', compact('user'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        return;
    }
}
