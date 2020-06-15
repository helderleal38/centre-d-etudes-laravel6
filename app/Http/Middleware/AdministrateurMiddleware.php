<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdministrateurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->state == "administrateur")
        // if(Auth::user()->pluck('state')->contains('administrateur'))
        {
            return $next($request);
        } else {
            return redirect()->Route('login');
        }
        
    }
}
