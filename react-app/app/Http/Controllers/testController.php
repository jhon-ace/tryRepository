<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function Test(Request $request)
    {
        $name = "JOY";
        return view('test.testing', array("name"=>$name));
    }
}
