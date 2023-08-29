<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginVerification extends Controller
{
    public function loginmiddleware(Request $request)
    {
     //   $username= $request -> input('username');
       // $password= $request -> input('password');
      //  return view('login2', compact('username','password'));
      return view('login2');
    }

    public function login2(){
        return view('dashboard');
    }
}
