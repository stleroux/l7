<?php

namespace App\Http\Controllers\UI\Recipes;

use App\Http\Controllers\Controller; // Required for validation
// use App\Http\Requests\CreateCommentRequest;
use App\Models\Admin\Category;
// use App\Models\Comment;
// use App\Models\User;
use App\Models\UI\Recipe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use DB;
use Route;
use Session;

class RecipesController extends Controller
{
##################################################################################################################
#  ██████  ██████  ███    ██ ███████ ████████ ██████  ██    ██  ██████ ████████ 
# ██      ██    ██ ████   ██ ██         ██    ██   ██ ██    ██ ██         ██    
# ██      ██    ██ ██ ██  ██ ███████    ██    ██████  ██    ██ ██         ██    
# ██      ██    ██ ██  ██ ██      ██    ██    ██   ██ ██    ██ ██         ██    
#  ██████  ██████  ██   ████ ███████    ██    ██   ██  ██████   ██████    ██    
##################################################################################################################
   public function __construct()
   {
      // Only allow authenticated users access to these functions
      $this->middleware('auth')->except('indexGrid','indexList','show');
   }


##################################################################################################################
#  █████  ██████   ██████ ██   ██ ██ ██    ██ ███████ 
# ██   ██ ██   ██ ██      ██   ██ ██ ██    ██ ██      
# ███████ ██████  ██      ███████ ██ ██    ██ █████   
# ██   ██ ██   ██ ██      ██   ██ ██  ██  ██  ██      
# ██   ██ ██   ██  ██████ ██   ██ ██   ████   ███████ 
##################################################################################################################
   public function archives($year, $month)
   {
      // Check if user has required permission
      if($this->enablePermissions) {
         if(!checkPerm('recipe_future')) { abort(401, 'Unauthorized Access'); }
      }

      // Set the session to the current page route
      Session::put('fromLocation', 'recipes.archives'); // Required for Alphabet listing
      Session::put('fromPage', url()->full());

      // Get all categories related to Recipe Category (id=>1)
      $categories = Category::where('parent_id',1)->get();

      $archives = Recipe::with('user', 'category')
         ->whereYear('published_at','=', $year)
         ->whereMonth('published_at','=', $month)
         ->where('published_at', '<=', Carbon::now())
         ->orderBy('title')
         ->get();

      return view('UI.recipes.archives', compact('archives','year','month','categories'));
   }


##################################################################################################################
# ██ ███    ██ ██████  ███████ ██   ██      ██████  ██████  ██ ██████  
# ██ ████   ██ ██   ██ ██       ██ ██      ██       ██   ██ ██ ██   ██ 
# ██ ██ ██  ██ ██   ██ █████     ███       ██   ███ ██████  ██ ██   ██ 
# ██ ██  ██ ██ ██   ██ ██       ██ ██      ██    ██ ██   ██ ██ ██   ██ 
# ██ ██   ████ ██████  ███████ ██   ██      ██████  ██   ██ ██ ██████  
##################################################################################################################
   public function indexGrid(Request $request)
   {
      // Set the session to the current page route
      Session::put('fromLocation', 'recipes.index.grid'); // Required for Alphabet listing
      Session::put('fromPage', url()->full());
      
      if(!Route::current()->parameters['cat'] == '') {
         Session::put('cat', Route::current()->parameters['cat']);
      }

      // Get all categories related to Recipe Category (id=>1)
      $categories = Category::where('parent_id',1)->get();
      $byCatName = Category::where('name', $request->cat)->first();

      if($request->cat == 'all') {

         $alphas = DB::table('recipes')
            ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
            ->where('published_at', '<=', Carbon::now())
            ->where('deleted_at', '=', null)
            ->where('personal', '=', 0)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               ->published()
               ->public()
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(15);
         } else {
            $recipes = Recipe::with('user','category')
               ->published()
               ->public()
               ->orderBy('title', 'asc')
               ->paginate(15);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', 0)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', 0)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      // dd($byCatName);
      // dd($recipes);
      return view('UI.recipes.index.grid', compact('recipes','categories','letters','byCatName'));
   }


##################################################################################################################
# ██ ███    ██ ██████  ███████ ██   ██     ██      ██ ███████ ████████ 
# ██ ████   ██ ██   ██ ██       ██ ██      ██      ██ ██         ██    
# ██ ██ ██  ██ ██   ██ █████     ███       ██      ██ ███████    ██    
# ██ ██  ██ ██ ██   ██ ██       ██ ██      ██      ██      ██    ██    
# ██ ██   ████ ██████  ███████ ██   ██     ███████ ██ ███████    ██    
##################################################################################################################
   public function indexList(Request $request)
   {
      // Set the session to the current page route
      Session::put('fromLocation', 'recipes.index.list'); // Required for Alphabet listing
      Session::put('fromPage', url()->full());
      
      if(!Route::current()->parameters['cat'] == '') {
         Session::put('cat', Route::current()->parameters['cat']);
      }

      // Get all categories related to Recipe Category (id=>1)
      $categories = Category::where('parent_id',1)->get();
      $byCatName = Category::where('name', $request->cat)->first();

      if($request->cat == 'all') {

         $alphas = DB::table('recipes')
            ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
            ->where('published_at', '<=', Carbon::now())
            ->where('deleted_at', '=', null)
            ->where('personal', '=', 0)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               ->published()
               ->public()
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(15);
         } else {
            $recipes = Recipe::with('user','category')
               ->published()
               ->public()
               ->orderBy('title', 'asc')
               ->paginate(15);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', 0)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', 0)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      // dd($byCatName);
      // dd($recipes);
      return view('UI.recipes.index.list', compact('recipes','categories','letters','byCatName'));
   }


##################################################################################################################
# ███████  █████  ██    ██  ██████  ██████  ██ ████████ ███████ ███████      ██████  ██████  ██ ██████  
# ██      ██   ██ ██    ██ ██    ██ ██   ██ ██    ██    ██      ██          ██       ██   ██ ██ ██   ██ 
# █████   ███████ ██    ██ ██    ██ ██████  ██    ██    █████   ███████     ██   ███ ██████  ██ ██   ██ 
# ██      ██   ██  ██  ██  ██    ██ ██   ██ ██    ██    ██           ██     ██    ██ ██   ██ ██ ██   ██ 
# ██      ██   ██   ████    ██████  ██   ██ ██    ██    ███████ ███████      ██████  ██   ██ ██ ██████  
##################################################################################################################
   public function favoriteRecipesGrid(Request $request, $key=null)
   {
      // Check if user has required permission

      // Fake get categories needed for back button to work properly
      $categories = [];

      if(Auth::check()) {
         $user = Auth::user();
         $recipes = $user->favorite(Recipe::class)->sortBy('title');
      }

      return view('UI.recipes.favoriteRecipes.grid', compact('recipes','categories'));
   }


##################################################################################################################
# ███████  █████  ██    ██  ██████  ██████  ██ ████████ ███████ ███████     ██      ██ ███████ ████████ 
# ██      ██   ██ ██    ██ ██    ██ ██   ██ ██    ██    ██      ██          ██      ██ ██         ██    
# █████   ███████ ██    ██ ██    ██ ██████  ██    ██    █████   ███████     ██      ██ ███████    ██    
# ██      ██   ██  ██  ██  ██    ██ ██   ██ ██    ██    ██           ██     ██      ██      ██    ██    
# ██      ██   ██   ████    ██████  ██   ██ ██    ██    ███████ ███████     ███████ ██ ███████    ██    
##################################################################################################################
   public function favoriteRecipesList(Request $request, $key=null)
   {
      // Check if user has required permission

      // Fake get categories needed for back button to work properly
      $categories = [];

      if(Auth::check()) {
         $user = Auth::user();
         $recipes = $user->favorite(Recipe::class)->sortBy('title');
      }

      return view('UI.recipes.favoriteRecipes.list', compact('recipes','categories'));
   }


##################################################################################################################
# ██████  ██████  ██ ██    ██  █████  ████████ ███████      ██████  ██████  ██ ██████  
# ██   ██ ██   ██ ██ ██    ██ ██   ██    ██    ██          ██       ██   ██ ██ ██   ██ 
# ██████  ██████  ██ ██    ██ ███████    ██    █████       ██   ███ ██████  ██ ██   ██ 
# ██      ██   ██ ██  ██  ██  ██   ██    ██    ██          ██    ██ ██   ██ ██ ██   ██ 
# ██      ██   ██ ██   ████   ██   ██    ██    ███████      ██████  ██   ██ ██ ██████  
##################################################################################################################
   public function privateRecipesGrid(Request $request)
   {
      // Set the session to the current page route
      Session::put('fromLocation', 'recipes.privateRecipes.grid'); // Required for Alphabet listing
      Session::put('fromPage', url()->full());
      
      if(!Route::current()->parameters['cat'] == '') {
         Session::put('cat', Route::current()->parameters['cat']);
      }

      // Get all categories related to Recipe Category (id=>1)
      $categories = Category::where('parent_id',1)->get();
      $byCatName = Category::where('name', $request->cat)->first();
      // dd($byCatName);

      if($request->cat == 'all') {

         $alphas = DB::table('recipes')
            ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
            ->where('user_id','=', Auth::user()->id)
            ->where('personal', '=', 1)
            ->where('deleted_at','=',Null)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', 1)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(15);
         } else {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', 1)
               ->orderBy('title', 'asc')
               ->paginate(15);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', 1)
               ->where('deleted_at', '=', null)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();
            // dd($alphas);

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
               dd($recipes);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
               // dd($byCatName->id);
               // dd($recipes);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               // ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', 1)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      return view('UI.recipes.privateRecipes.grid', compact('recipes','categories','letters','byCatName'));
   }


##################################################################################################################
# ██████  ██████  ██ ██    ██  █████  ████████ ███████     ██      ██ ███████ ████████ 
# ██   ██ ██   ██ ██ ██    ██ ██   ██    ██    ██          ██      ██ ██         ██    
# ██████  ██████  ██ ██    ██ ███████    ██    █████       ██      ██ ███████    ██    
# ██      ██   ██ ██  ██  ██  ██   ██    ██    ██          ██      ██      ██    ██    
# ██      ██   ██ ██   ████   ██   ██    ██    ███████     ███████ ██ ███████    ██    
##################################################################################################################
   public function privateRecipesList(Request $request)
   {
      // Set the session to the current page route
      Session::put('fromLocation', 'recipes.privateRecipes.list'); // Required for Alphabet listing
      Session::put('fromPage', url()->full());
      
      if(!Route::current()->parameters['cat'] == '') {
         Session::put('cat', Route::current()->parameters['cat']);
      }

      // Get all categories related to Recipe Category (id=>1)
      $categories = Category::where('parent_id',1)->get();
      $byCatName = Category::where('name', $request->cat)->first();
      // dd($byCatName);

      if($request->cat == 'all') {

         $alphas = DB::table('recipes')
            ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
            ->where('user_id','=', Auth::user()->id)
            ->where('personal', '=', 1)
            ->where('deleted_at','=',Null)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', 1)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(15);
         } else {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', 1)
               ->orderBy('title', 'asc')
               ->paginate(15);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', 1)
               ->where('deleted_at', '=', null)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();
            // dd($alphas);

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
               dd($recipes);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
               // dd($byCatName->id);
               // dd($recipes);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               // ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', 1)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', 1)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      return view('UI.recipes.privateRecipes.list', compact('recipes','categories','letters','byCatName'));
   }


##################################################################################################################
# ███    ███ ██ ███    ██ ███████      ██████  ██████  ██ ██████  
# ████  ████ ██ ████   ██ ██          ██       ██   ██ ██ ██   ██ 
# ██ ████ ██ ██ ██ ██  ██ █████       ██   ███ ██████  ██ ██   ██ 
# ██  ██  ██ ██ ██  ██ ██ ██          ██    ██ ██   ██ ██ ██   ██ 
# ██      ██ ██ ██   ████ ███████      ██████  ██   ██ ██ ██████  
##################################################################################################################
   public function myRecipesGrid(Request $request)
   {
      // Set the session to the current page route
      Session::put('fromLocation', 'recipes.myRecipes.grid'); // Required for Alphabet listing
      Session::put('fromPage', url()->full());
      
      if(!Route::current()->parameters['cat'] == '') {
         Session::put('cat', Route::current()->parameters['cat']);
      }

      // Get all categories related to Recipe Category (id=>1)
      $categories = Category::where('parent_id',1)->get();
      $byCatName = Category::where('name', $request->cat)->first();

      if($request->cat == 'all') {

         $alphas = DB::table('recipes')
            ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
            ->where('user_id','=', Auth::user()->id)
            ->where('deleted_at','=',Null)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               // ->published()
               // ->public()
               ->where('user_id','=', Auth::user()->id)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(15);
         } else {
            $recipes = Recipe::with('user','category')
               // ->published()
               // ->public()
               ->where('user_id','=', Auth::user()->id)
               ->orderBy('title', 'asc')
               ->paginate(15);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               // ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               // ->where('personal', '=', 0)
               ->where('user_id','=', Auth::user()->id)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               // ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               // ->where('personal', '=', 0)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      return view('UI.recipes.myRecipes.grid', compact('recipes','categories','letters','byCatName'));
   }


##################################################################################################################
# ███    ███ ██ ███    ██ ███████     ██      ██ ███████ ████████ 
# ████  ████ ██ ████   ██ ██          ██      ██ ██         ██    
# ██ ████ ██ ██ ██ ██  ██ █████       ██      ██ ███████    ██    
# ██  ██  ██ ██ ██  ██ ██ ██          ██      ██      ██    ██    
# ██      ██ ██ ██   ████ ███████     ███████ ██ ███████    ██    
##################################################################################################################
public function myRecipesList(Request $request)
   {
      // Set the session to the current page route
      Session::put('fromLocation', 'recipes.myRecipes.list'); // Required for Alphabet listing
      Session::put('fromPage', url()->full());
      
      if(!Route::current()->parameters['cat'] == '') {
         Session::put('cat', Route::current()->parameters['cat']);
      }

      // Get all categories related to Recipe Category (id=>1)
      $categories = Category::where('parent_id',1)->get();
      $byCatName = Category::where('name', $request->cat)->first();

      if($request->cat == 'all') {

         $alphas = DB::table('recipes')
            ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
            ->where('user_id','=', Auth::user()->id)
            ->where('deleted_at','=',Null)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               // ->published()
               // ->public()
               ->where('user_id','=', Auth::user()->id)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(15);
         } else {
            $recipes = Recipe::with('user','category')
               // ->published()
               // ->public()
               ->where('user_id','=', Auth::user()->id)
               ->orderBy('title', 'asc')
               ->paginate(15);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               // ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               // ->where('personal', '=', 0)
               ->where('user_id','=', Auth::user()->id)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               // ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               // ->where('personal', '=', 0)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            } else {
               $recipes = Recipe::with('user','category')
                  // ->published()
                  // ->public()
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(15);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      return view('UI.recipes.myRecipes.list', compact('recipes','categories','letters','byCatName'));
   }


##################################################################################################################
# ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
# ██╔════╝██║  ██║██╔═══██╗██║    ██║
# ███████╗███████║██║   ██║██║ █╗ ██║
# ╚════██║██╔══██║██║   ██║██║███╗██║
# ███████║██║  ██║╚██████╔╝╚███╔███╔╝
# ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
// Display the specified resource
##################################################################################################################
   public function show(Request $request, $id, $previous=null, $next=null)
   {
      $byCatName = $request->byCatName;
      $recipe = Recipe::with('user', 'category', 'comments')->findOrFail($id);
      $categories = Category::where('parent_id',1)->get();

      // Increase the view count since this is viewed from the frontend
      DB::table('recipes')->where('id','=',$recipe->id)->increment('views',1);

      // GET PREVIOUS RECIPE //
      // If a sub category has been selected
      if($byCatName) {
         $previous = Recipe::where('title', '<', $recipe->title)
            ->where('category_id', $byCatName)
            ->orderBy('title','asc')
            ->max('title');
      // If no sub category has been selected
      } else {
         $previous = Recipe::where('title', '<', $recipe->title)
            ->orderBy('title','asc')
            ->max('title');
      }

      // if a previous record exists
      if($previous){
         // If a sub category has been selected
         if($byCatName) {
            $p = Recipe::where('title',$previous)
               ->where('category_id', $byCatName)
               ->get();
            // return only the ID of the previous record
            $previous = $p[0]->id;
         // If no sub category has been selected
         } else {
            $p = Recipe::where('title',$previous)->get();
            // return only the ID of the previous record
            $previous = $p[0]->id;
         }
      }

      // GET NEXT RECIPE //
      // If a sub category has been selected
      if($byCatName) {
         $next = Recipe::where('title', '>', $recipe->title)
            ->where('category_id', $byCatName)
            ->orderBy('title','desc')
            ->min('title');
      // If no sub category has been selected
      } else {
         $next = Recipe::where('title', '>', $recipe->title)
            ->orderBy('title','desc')
            ->min('title');
      }

      // if a next record exists
      if($next){
         // If a sub category has been selected
         if($byCatName) {
            $n = Recipe::where('title',$next)
               ->where('category_id', $byCatName)
               ->get();
            // return only the ID of the next record
            $next = $n[0]->id;
         // If no sub category has been selected
         } else {
            $n = Recipe::where('title',$next)->get();
            // return only the ID of the next record
            $next = $n[0]->id;
         }
      }

      return view('UI.recipes.show', compact('recipe','categories','previous','next','byCatName'));
   }


}