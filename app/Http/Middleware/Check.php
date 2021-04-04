<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Check
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

        $id = $request->route()->parameters()['user'];

        if(Auth::user()->id == $id || Auth::user()->role_id == 3 || Auth::user()->role_id == 4) {
            return $next($request);
        } else {
            return redirect('home')->with('stop', "Vous n'avez pas les droits");
        }
    }
}
