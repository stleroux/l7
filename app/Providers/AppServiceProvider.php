<?php

namespace App\Providers;

use App\Http\View\Composers\AdminComposer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // SHare with ALL views
        // View::share('newBugsCount', Bug::where('status', 1)->count());
        
        // Share with SPECIFIC views
        // View::composer('admin.*', function($view){
        //     $view->with('newBugsCount', Bug::where('status', 1)->count());
        // });

        // Share using a COMPOSER View
        // View::composer('admin.*', AdminComposer::class);
        View::composer('layouts.admin.navbar.notifications', AdminComposer::class);

        // View::composer('*', function($view)
        //     {
        //         if(Auth::check())
        //         {
        //             $view->with('mylinks',
        //                 DB::table('mylinks')
        //                 ->select('*')
        //                 ->where('user_id', '=', auth()->user()->id)
        //                 ->orderBy('name','asc')
        //                 ->get()
        //             );
        //         }
        //     }
        // );

    }

}
