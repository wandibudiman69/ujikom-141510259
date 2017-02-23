<?php

namespace App\Http\Middleware;

use Closure;

class AdminHRDMiddleware
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
        if (Auth::check() && Auth::user()->type_user == "Admin"||Auth::check() && Auth::user()->type_user == "HRD")
        { 
            return $next($request);
        }
        return redirect('error/503');
    }
}
