<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class keuangan
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
         if (Auth::check() && Auth::user()->type_user == "Keuangan")
        { 
            return $next($request);
        }
        else if (Auth::check() && Auth::user()->type_user == "Admin")
        { 
            return $next($request);
        }
        return redirect('error/503');
    }
}
