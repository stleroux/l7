<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AdminerMiddleware
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
        if(auth::user()->hasRole('admin'))
        {
            return $next($request);
        }
        
        abort(403);
    }
}
