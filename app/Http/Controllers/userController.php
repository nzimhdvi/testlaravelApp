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
       $request->validate([

           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required|min:6|confirmed',
       ]);

      $user= User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => $request->password
       ]);

        return redirect('/');
    }
}
