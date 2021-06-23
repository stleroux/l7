<?php

namespace App\Providers;

use App\Http\View\Composers\AdminComposer;
use App\Http\View\Composers\DashboardComposer;
use App\Models\Bug;
use App\Models\Feature;
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
        // Option #1
        // Share with ALL views (will query database on every view)
        // View::share('channels', Channel::OrderBy('name')->get());
        

        // Option #2
        // Share with SPECIFIC views
        // View::composer('admin.*', function($view){
        //     $view->with('newBugsCount', Bug::where('status', 1)->count());
        // });

        // Option #3
        // Share using a COMPOSER View
        // View::composer('admin.*', AdminComposer::class);
        // View::composer(['admin.dashboard','admin.dashboard.infoBoxes.permissions','admin.dashboard.infoBoxes.projects','admin.dashboard.infoBoxes.roles'], DashboardComposer::class);





        // View::composer('layouts.admin.navbar.notifications', AdminComposer::class);

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
