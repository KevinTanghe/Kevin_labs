<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::user()->role_id == 3 || Auth::user()->role_id == 4) {
            return $next($request);
        } else {
            return redirect('home')->with("stop","Vous n'avez pas le droit");
        }
    }
}
