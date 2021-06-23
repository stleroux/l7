<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Carving;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Project;
use App\Models\Recipe;
use Carbon\Carbon;
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


##################################################################################################################
#  ███████╗███████╗ █████╗ ██████╗  ██████╗██╗  ██╗
#  ██╔════╝██╔════╝██╔══██╗██╔══██╗██╔════╝██║  ██║
#  ███████╗█████╗  ███████║██████╔╝██║     ███████║
#  ╚════██║██╔══╝  ██╔══██║██╔══██╗██║     ██╔══██║
#  ███████║███████╗██║  ██║██║  ██║╚██████╗██║  ██║
#  ╚══════╝╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝
##################################################################################################################
   public function search(Request $request)
   {
      // If nothing is entered in the search box and user clicks on the search button
      if(!$request->input('query'))
      {
         return redirect()->route('homepage');
      }


      if(\Config::get('settings.blog') == 'visible')
      {
         $postsSearchResults = (new Search())->registerModel(Post::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('slug')
               ->addSearchableAttribute('body')
               ->addSearchableAttribute('public_notes')
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null);
         })->search($request->input('query'));
      } else {
         $postsSearchResults = (new Search())
            ->registerModel(Post::class, 'slug')
            ->perform('null');
      }

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

      $faqsSearchResults = (new Search())->registerModel(Faq::class, function(ModelSearchAspect $modelSearchAspect) {
         $modelSearchAspect
            ->addSearchableAttribute('category')
            ->addSearchableAttribute('question')
            ->addSearchableAttribute('answer');
            // ->where('published_at', '<=', Carbon::now())
            // ->where('deleted_at', '=', null);
         })->search($request->input('query'));
// dd($faqsSearchResults);

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
         $recipesSearchResults = (new Search())->registerModel(Recipe::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('title')
               ->addSearchableAttribute('ingredients')
               ->addSearchableAttribute('methodology')
               ->addSearchableAttribute('public_notes')
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null);
         })->search($request->input('query'));
      } else {
         $recipesSearchResults = (new Search())
            ->registerModel(Recipe::class, 'title')
            ->perform('null');
      }


      $searchResults = $carvingsSearchResults
                        ->merge($faqsSearchResults)
                        ->merge($postsSearchResults)
                        ->merge($projectsSearchResults)
                        ->merge($recipesSearchResults);


      return view('UI.searchResults', compact('searchResults'));
   }


}
