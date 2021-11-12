<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bug;
use App\Models\Carving;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Finish;
use App\Models\Like;
use App\Models\Material;
use App\Models\Movie;
use App\Models\Post;
use App\Models\Project;
use App\Models\Recipe;
use App\Models\Tag;
use App\Models\User;
use Auth;
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
      $this->middleware('auth');
   }


##################################################################################################################
#  ███████╗███████╗ █████╗ ██████╗  ██████╗██╗  ██╗
#  ██╔════╝██╔════╝██╔══██╗██╔══██╗██╔════╝██║  ██║
#  ███████╗█████╗  ███████║██████╔╝██║     ███████║
#  ╚════██║██╔══╝  ██╔══██║██╔══██╗██║     ██╔══██║
#  ███████║███████╗██║  ██║██║  ██║╚██████╗██║  ██║
#  ╚══════╝╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝
##################################################################################################################
   public function quickSearch(Request $request)
   {
      // If nothing is entered in the search box and user clicks on the search button
      if(!$request->input('query'))
      {
         return redirect()->route('admin.dashboard');
      }

      $bugsSearchResults = (new Search())
         ->registerModel(Bug::class, ['title'])
         ->perform($request->input('query'));

      $carvingsSearchResults = (new Search())
         ->registerModel(Carving::class, ['name'])
         ->perform($request->input('query'));

      $faqsSearchResults = (new Search())
         ->registerModel(Faq::class, ['question'])
         ->perform($request->input('query'));

      $featuresSearchResults = (new Search())
         ->registerModel(Feature::class, ['title'])
         ->perform($request->input('query'));

      $finishesSearchResults = (new Search())
         ->registerModel(Finish::class, ['name'])
         ->perform($request->input('query'));

      $materialsSearchResults = (new Search())
         ->registerModel(Material::class, ['name'])
         ->perform($request->input('query'));

      $moviesSearchResults = (new Search())
         ->registerModel(Movie::class, ['title'])
         ->perform($request->input('query'));

      $postsSearchResults = (new Search())
         ->registerModel(Post::class, ['title'])
         ->perform($request->input('query'));

      $projectsSearchResults = (new Search())
         ->registerModel(Project::class, ['name'])
         ->perform($request->input('query'));

      $recipesSearchResults = (new Search())
         ->registerModel(Recipe::class, ['title'])
         ->perform($request->input('query'));

      $usersSearchResults = (new Search())
         ->registerModel(User::class, ['username','first_name','last_name'])
         ->perform($request->input('query'));

      $searchResults = $carvingsSearchResults
               ->merge($bugsSearchResults)
               ->merge($faqsSearchResults)
               ->merge($featuresSearchResults)
               ->merge($finishesSearchResults)
               ->merge($materialsSearchResults)
               ->merge($moviesSearchResults)
               ->merge($postsSearchResults)
               ->merge($projectsSearchResults)
               ->merge($recipesSearchResults)
               // ->merge($tagsSearchResults)
               ->merge($usersSearchResults);

      return view('admin.search.results', compact('searchResults'));
   }


##################################################################################################################
#  ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
#  ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
#  ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
#  ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
#  ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
#  ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
# Display a list of resources
##################################################################################################################
   public function advancedSearch(Request $request)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('admin-frontend'), 403);

      // $blocks = Block::all();
      $searchResults = '';

      return view('admin.search.advancedSearch', compact('searchResults'));
   }


##################################################################################################################
#  ███████╗███████╗ █████╗ ██████╗  ██████╗██╗  ██╗
#  ██╔════╝██╔════╝██╔══██╗██╔══██╗██╔════╝██║  ██║
#  ███████╗█████╗  ███████║██████╔╝██║     ███████║
#  ╚════██║██╔══╝  ██╔══██║██╔══██╗██║     ██╔══██║
#  ███████║███████╗██║  ██║██║  ██║╚██████╗██║  ██║
#  ╚══════╝╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝
##################################################################################################################
   public function advSearch(Request $request)
   {
      // dd($request->bugs);
      // If nothing is entered in the search box and user clicks on the search button
      // if(!$request->input('query'))
      // {
      //    $notification = [
      //      'message' => 'The searchy term is required', 
      //      'alert-type' => 'danger'
      //    ];
      //    return redirect()->route('admin.advancedSearch');
      // }
            // validate the data
      $this->validate($request, [
         'query' => 'required',
         // 'bugs' => 'required_without_all:carvings',
      ]);

      // Needed as default search so others can be selected or deselected in the search form
      $likesSearchResults = (new Search())
         ->registerModel(Like::class, ['user_id'])
         ->perform($request->input('query'));

      if(Auth::user()->search_bugs)
      {
         $bugsSearchResults = (new Search())
            ->registerModel(Bug::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('title')
               ->addSearchableAttribute('page_url');
            })->search($request->input('query'));
      } else {
         $bugsSearchResults = [];
      }

      if(Auth::user()->search_carvings)
      {
         $carvingsSearchResults = (new Search())
            ->registerModel(Carving::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('name')
               ->addSearchableAttribute('category')
               ->addSearchableAttribute('description');
            })->search($request->input('query'));
      } else {
         $carvingsSearchResults = [];
      }

      if(Auth::user()->search_faqs)
      {
         $faqsSearchResults = (new Search())
            ->registerModel(Faq::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('category')
               ->addSearchableAttribute('question')
               ->addSearchableAttribute('answer');
            })->search($request->input('query'));
      } else {
         $faqsSearchResults = [];
      }

      if(Auth::user()->search_features)
      {
         $featuresSearchResults = (new Search())
            ->registerModel(Feature::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('title')
               ->addSearchableAttribute('description')
               ->addSearchableAttribute('resolution');
            })->search($request->input('query'));
      } else {
         $featuresSearchResults = [];
      }

      if(Auth::user()->search_finishes)
      {
         $finishesSearchResults = (new Search())
            ->registerModel(Finish::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('name')
               ->addSearchableAttribute('type')
               ->addSearchableAttribute('color_name')
               ->addSearchableAttribute('color_code')
               ->addSearchableAttribute('manufacturer')
               ->addSearchableAttribute('upc')
               ->addSearchableAttribute('notes');
            })->search($request->input('query'));
      } else {
         $finishesSearchResults = [];
      }

      if(Auth::user()->search_materials)
      {
         $materialsSearchResults = (new Search())
            ->registerModel(Material::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('name')
               ->addSearchableAttribute('type')
               ->addSearchableAttribute('manufacturer')
               ->addSearchableAttribute('upc')
               ->addSearchableAttribute('notes');
            })->search($request->input('query'));
      } else {
         $materialsSearchResults = [];
      }

      if(Auth::user()->search_movies)
      {
         $moviesSearchResults = (new Search())
            ->registerModel(Movie::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('title')
               ->addSearchableAttribute('overview');
            })->search($request->input('query'));
      } else {
         $moviesSearchResults = [];
      }

      if(Auth::user()->search_posts)
      {
         $postsSearchResults = (new Search())
            ->registerModel(Post::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('title')
               ->addSearchableAttribute('slug')
               ->addSearchableAttribute('body')
               ->addSearchableAttribute('public_notes')
               ->addSearchableAttribute('source');
            })->search($request->input('query'));
      } else {
         $postsSearchResults = [];
      }

      if(Auth::user()->search_projects)
      {
         $projectsSearchResults = (new Search())
            ->registerModel(Project::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('category')
               ->addSearchableAttribute('name')
               ->addSearchableAttribute('description');
            })->search($request->input('query'));
      } else {
         $projectsSearchResults = [];
      }

      if(Auth::user()->search_recipes)
      {
         $recipesSearchResults = (new Search())
            ->registerModel(Recipe::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('title')
               ->addSearchableAttribute('ingredients')
               ->addSearchableAttribute('methodology')
               ->addSearchableAttribute('source')
               ->addSearchableAttribute('public_notes');
            })->search($request->input('query'));
      } else {
         $recipesSearchResults = [];
      }

      if(Auth::user()->search_tags)
      {
         $tagsSearchResults = (new Search())
            ->registerModel(Tag::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('name')
               ->addSearchableAttribute('category');
            })->search($request->input('query'));
      } else {
         $tagsSearchResults = [];
      }

      if(Auth::user()->search_users)
      {
         $usersSearchResults = (new Search())
            ->registerModel(User::class, function(ModelSearchAspect $modelSearchAspect) {
            $modelSearchAspect
               ->addSearchableAttribute('username')
               ->addSearchableAttribute('first_name')
               ->addSearchableAttribute('last_name')
               ->addSearchableAttribute('email')
               ->addSearchableAttribute('telephone')
               ->addSearchableAttribute('cell')
               ->addSearchableAttribute('fax')
               ->addSearchableAttribute('website')
               ->addSearchableAttribute('company_name')
               ->addSearchableAttribute('address_1')
               ->addSearchableAttribute('address_2')
               ->addSearchableAttribute('city')
               ->addSearchableAttribute('province')
               ->addSearchableAttribute('postal_code')
               ->addSearchableAttribute('notes')
               ->addSearchableAttribute('reasonToRegister')
               ->addSearchableAttribute('redirectAfterLogin');
            })->search($request->input('query'));
      } else {
         $usersSearchResults = [];
      }

      $searchResults = $likesSearchResults
               ->merge($bugsSearchResults)
               ->merge($carvingsSearchResults)
               ->merge($faqsSearchResults)
               ->merge($featuresSearchResults)
               ->merge($finishesSearchResults)
               ->merge($materialsSearchResults)
               ->merge($moviesSearchResults)
               ->merge($postsSearchResults)
               ->merge($projectsSearchResults)
               ->merge($recipesSearchResults)
               ->merge($tagsSearchResults)
               ->merge($usersSearchResults);

      return view('admin.search.advancedSearch', compact('searchResults'));
   }


   public function advSearchSave(Request $request, User $user)
   {
      $user = User::findOrFail(Auth::user()->id);

         $user->search_bugs      = $request->input('search_bugs') ? true : false;
         $user->search_carvings  = $request->input('search_carvings') ? true : false;
         $user->search_faqs      = $request->input('search_faqs') ? true : false;
         $user->search_features  = $request->input('search_features') ? true : false;
         $user->search_finishes  = $request->input('search_finishes') ? true : false;
         $user->search_materials = $request->input('search_materials') ? true : false;
         $user->search_movies    = $request->input('search_movies') ? true : false;
         $user->search_posts     = $request->input('search_posts') ? true : false;
         $user->search_projects  = $request->input('search_projects') ? true : false;
         $user->search_recipes   = $request->input('search_recipes') ? true : false;
         $user->search_tags      = $request->input('search_tags') ? true : false;
         $user->search_users     = $request->input('search_users') ? true : false;

      $user->save();

      $notification = array(
         'message' => 'Your profile has been updated.',
         'alert-type' => 'success'
      );

      return redirect()->back()->with($notification);
   }


}
