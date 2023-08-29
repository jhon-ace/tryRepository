<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginmiddleware


{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //dd($request->all());
        if ($request->has('username') && ($request->username == 'admin') &&
        $request->has('password') && ($request->password == 'admin'))
        {
        $username= $request -> input('admin');
        $password= $request -> input('admin');
        return view('dashboard',compact('admin','admin'));
        //return redirect()->route('dashboard');
        }

        return $next($request);
    }

    }

