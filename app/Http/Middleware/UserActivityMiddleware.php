<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class UserActivityMiddleware
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
         if (auth()->check()) {

            // Check if user has required permission
            abort_unless(Gate::allows('admin-audits'), 403);

         }

        return $next($request);
    }
}
