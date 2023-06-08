<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Auth as Middleware;
use Closure;
use Illuminate\Http\Request;

class Auth extends Middleware
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
        if (session()->has('name')) {
           return $next($request);
        }
        return view('/logout');
    }
}
