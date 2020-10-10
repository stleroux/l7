<?php

namespace App\Providers;

use App\Http\View\Composers\AdminComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('admin.*', AdminComposer::class);


    }
}
