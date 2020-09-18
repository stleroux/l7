<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use App\Models\Project;

class ProjectServiceProvider extends ServiceProvider
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
     view()->composer('UI.projects.blocks.popular', function ($view) {
         $popular = Project::where('views', '>=', 10)
            ->orderBy('views', 'desc')
            ->take(Config::get('settings.homepage_popular_count'))
            ->get();
         $view->with('popular', $popular);
     });
   }
}