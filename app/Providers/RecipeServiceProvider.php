<?php

namespace App\Providers;

use App\Models\Recipe;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class RecipeServiceProvider extends ServiceProvider
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
		view()->composer('UI.recipes.blocks.popular', function ($view) {
			 $popular = Recipe::published()
					->public()
					->orderBy('views', 'desc')
					->orderBy('title')            
					->take(Config::get('settings.homepage_popular_count'))
					->get();
			 $view->with('popular', $popular);
		});

		view()->composer('UI.recipes.blocks.archives', function ($view) {
			 $recipelinks = DB::table('recipes')
					->select(DB::raw('YEAR(published_at) year, MONTH(published_at) month, MONTHNAME(published_at) month_name, COUNT(*) recipe_count'))
					->where('published_at', '<=', Carbon::now())
					// ->where('personal', '=', 0)
					->where('deleted_at', null)
					->groupBy('year')
					->groupBy('month')
					->orderBy('year', 'desc')
					->orderBy('month', 'desc')
					->get();
			 $view->with('recipelinks', $recipelinks);
		});
	}

}
