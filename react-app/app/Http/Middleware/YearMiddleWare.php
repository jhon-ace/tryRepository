<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YearMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //dd($request->all());
        if ($request->has('username') && $request->has('password') &&
        $request->username == 'admin' && $request->password == 'admin')
        {
             return $next($request);
}
        return redirect()->route('welcome');
    }
}
