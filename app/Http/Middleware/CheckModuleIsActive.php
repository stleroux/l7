<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route;

class CheckModuleIsActive
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

        if(class_basename(\Route::current()->controller) == "BlogController")
        {

            if(\Config::get('settings.blog') == 'hidden'){
                return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "CarvingsController")
        {

            if(\Config::get('settings.carvings') == 'hidden'){
                return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "DartsController")
        {

            if(\Config::get('settings.darts') == 'hidden'){
                return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "ProjectsController")
        {

            if(\Config::get('settings.projects') == 'hidden'){
                return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "RecipesController")
        {

            if(\Config::get('settings.recipes') == 'hidden'){
                return redirect()->route('errors.inactive');
            }

        }

        return $next($request);
    }
}
