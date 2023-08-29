<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{

    public function showName(Request $request){
        $name = $request->input('username');
        return view('login', array("name"=>$name));
    }
}
