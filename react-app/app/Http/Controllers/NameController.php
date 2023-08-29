<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function show(){
        return view('name');
    }
    public function name(Request $request){
        $name = $request->input('nameInput');
        return view('name', array("name"=>$name));
    }
}
