<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function register(request $request)
    {

        return view('user.signUp');
    }

    public function Login(request $request)
    {

        return view('user.signIn');
    }
    public  function store(request $request)
    {
        $formFields= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

          User::create($formFields);

        return redirect('/');
    }
}
