<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use Carbon\Carbon;
use Config;
use DB;

class PostServiceProvider extends ServiceProvider
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
      view()->composer('UI.blog.blocks.popular', function ($view) {
         $popular = Post::published()
             ->where('views', '>=', Config::get('settings.viewsToBePopularCount'))
             ->orderBy('views', 'desc')
             ->take(config('settings.popularCount'))
             ->get();
         $view->with('popular', $popular);
      });

      view()->composer('UI.blog.blocks.archives', function ($view) {
         $postlinks = DB::table('posts')
            ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month, MONTHNAME(created_at) month_name, COUNT(*) post_count'))
            ->where('published_at', '<=', Carbon::now())
            //->where('created_at', '<=', Carbon::now()->subMonth(3))
            ->where('deleted_at', null)
            ->groupBy('year')
            ->groupBy('month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
         $view->with('postlinks', $postlinks);
      });
   }

}
