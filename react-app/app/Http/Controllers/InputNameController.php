<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNameController extends Controller
{


    public function show(Request $request){
        $name = $request->input('username');
        $password = $request->input('password');
        if ($name =="admin" && $password =="admin")
        {
        return redirect()->rout('dashboard');
        }
        else{
            $message ="Invalid Credentials";
        }
        return view ('username',['name'=>$name,'message'=>$message]);
    }
}
