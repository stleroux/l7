<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

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

            if(\Config::get('settings.blog') == 'hidden') {

                // if(\Request::route()->getName() === "admin.blog.index"){
                if(Str::is('admin.posts*', Route::currentRouteName())){
                    return $next($request);
                }
                
                abort(404); // Page not found
                // return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "CarvingsController")
        {
            if(\Config::get('settings.carvings') == 'hidden') {

                // if(\Request::route()->getName() === "admin.carvings.*"){
                if(Str::is('admin.carvings*', Route::currentRouteName())){
                    return $next($request);
                    die();
                }
            // dd("HERE");

                abort(404); // Page not found
                // return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "DartsController")
        {

            if(\Config::get('settings.darts') == 'hidden') {

                // if(\Request::route()->getName() === "admin.darts.index"){
                if(Str::is('admin.darts*', Route::currentRouteName())){
                    return $next($request);
                }

                abort(404); // Page not found
                // return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "ProjectsController")
        {

            if(\Config::get('settings.projects') == 'hidden') {

                // if(\Request::route()->getName() === "admin.projects.index"){
                if(Str::is('admin.projects*', Route::currentRouteName())){
                    return $next($request);
                }

                abort(404); // Page not found
                // return redirect()->route('errors.inactive');
            }

        }

        if(class_basename(\Route::current()->controller) == "RecipesController")
        {

            if(\Config::get('settings.recipes') == 'hidden') {

                // if(\Request::route()->getName() === "admin.recipes.index"){
                if(Str::is('admin.recipes*', Route::currentRouteName())){
                    return $next($request);
                }

                abort(404); // Page not found
                // return redirect()->route('errors.inactive');
            }

        }

        return $next($request);
    }
}
