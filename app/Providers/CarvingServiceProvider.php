<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use App\Models\Carving;

class CarvingServiceProvider extends ServiceProvider
{
   /**
   * Register services.
   *
   * @return void
   */
   public function register()
   {
     //
   }

   /**
   * Bootstrap services.
   *
   * @return void
   */
   public function boot()
   {
     //
     view()->composer('UI.carvings.blocks.popular', function ($view) {
         $popular = Carving::
            where('views', '>=', Config::get('settings.viewsToBePopularCount'))
            ->orderBy('views', 'desc')
            ->take(config('settings.popularCount'))
            ->get();
         $view->with('popular', $popular);
     });
   }
}