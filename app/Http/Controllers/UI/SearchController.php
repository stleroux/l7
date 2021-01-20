<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Carving;
use App\Models\Post;
use App\Models\Project;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Spatie\Searchable\ModelSearchAspect;
use Spatie\Searchable\Search;

class SearchController extends Controller
{

##################################################################################################################
#  ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
# ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
# ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
# ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
# ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#  ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
	public function __construct()
	{
		// $this->middleware('auth');
	}


	public function search(Request $request)
	{
		if(!$request->input('query'))
		{
			return redirect()->route('homepage');
		}


// $searchResults = (new Search())
// 	->registerModel(Carving::class, function(ModelSearchAspect $modelSearchAspect) {
// 		$modelSearchAspect
// 			->addSearchableAttribute('name') // return results for partial matches on usernames
// 			// ->addExactSearchableAttribute('email') // only return results that exactly match the e-mail address
// 			// ->active()
// 			->has('tags')
// 			// ->with('roles')
// 			;
// });

// dd($searchResults);


//  $searchResults = (new Search())
//      ->registerModel(Carving::class, function(ModelSearchAspect $modelSearchAspect) {
//          $modelSearchAspect
//             ->addSearchableAttribute('name')
//             ->addSearchableAttribute('description')
//             ->where('views', '>', 200); // This won't work
//      })->search($request->input('query'));

// return view('search', compact('searchResults'));
// // return view('user.search', compact('searchResults'));







		if(\Config::get('settings.carvings') == 'visible')
		{
			$carvingsSearchResults = (new Search())
				->registerModel(Carving::class, ['name','category','description'])
				->perform($request->input('query'));
		} else {
			$carvingsSearchResults = (new Search())
				->registerModel(Carving::class, 'name')
				->perform('null');
		}

		if(\Config::get('settings.blog') == 'visible')
		{
			$postsSearchResults = (new Search())
				->registerModel(Post::class, ['slug','body','public_notes'])
				->perform($request->input('query'));
		} else {
			$postsSearchResults = (new Search())
				->registerModel(Post::class, 'slug')
				->perform('null');
		}

		if(\Config::get('settings.projects') == 'visible')
		{
			$projectsSearchResults = (new Search())
				->registerModel(Project::class, ['name','description'])
				->perform($request->input('query'));
		} else {
			$projectsSearchResults = (new Search())
				->registerModel(Project::class, 'name')
				->perform('null');
		}

		if(\Config::get('settings.recipes') == 'visible')
		{
			$recipesSearchResults = (new Search())
				->registerModel(Recipe::class, ['title','ingredients','methodology','public_notes'])
				// ->published()
				->perform($request->input('query'));
		} else {
			$recipesSearchResults = (new Search())
				->registerModel(Recipe::class, 'title')
				->perform('null');
		}

		$searchResults = $carvingsSearchResults
			->merge($postsSearchResults)
			->merge($projectsSearchResults)
			->merge($recipesSearchResults);

		return view('search', compact('searchResults'));
	}


}
