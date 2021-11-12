<?php

namespace App\Http\Controllers\UI\Recipes;

use Auth;
use DB;
use Route;
use Session;
use Carbon\Carbon;
use App\Http\Controllers\Controller; // Required for validation
use App\Models\Category;
use App\Models\Faq;
use App\Models\Recipe;
use Illuminate\Http\Request;
// use App\Models\Comment;
// use App\Models\User;
// use App\Http\Requests\CreateCommentRequest;

class RecipesController extends Controller
{

##################################################################################################################
#   ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
#  ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
#  ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
#  ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
#  ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#   ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct()
   {
      // Only allow authenticated users access to these functions
      $this->middleware('auth')->except('indexGrid','indexList','show','faq');
   }


##################################################################################################################
#   █████╗ ██████╗  ██████╗██╗  ██╗██╗██╗   ██╗███████╗███████╗
#  ██╔══██╗██╔══██╗██╔════╝██║  ██║██║██║   ██║██╔════╝██╔════╝
#  ███████║██████╔╝██║     ███████║██║██║   ██║█████╗  ███████╗
#  ██╔══██║██╔══██╗██║     ██╔══██║██║╚██╗ ██╔╝██╔══╝  ╚════██║
#  ██║  ██║██║  ██║╚██████╗██║  ██║██║ ╚████╔╝ ███████╗███████║
#  ╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝╚═╝  ╚═══╝  ╚══════╝╚══════╝
# Display the archived resources
##################################################################################################################
   public function archives($year, $month)
   {
      // Check if user has required permission
      

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

      $privateRecipesCount = Recipe::myRecipes()->private()->count();

      return view('UI.recipes.archives', compact('archives','year','month','categories', 'privateRecipesCount'));
   }


##################################################################################################################
#  ███████╗ █████╗  ██████╗ 
#  ██╔════╝██╔══██╗██╔═══██╗
#  █████╗  ███████║██║   ██║
#  ██╔══╝  ██╔══██║██║▄▄ ██║
#  ██║     ██║  ██║╚██████╔╝
#  ╚═╝     ╚═╝  ╚═╝ ╚══▀▀═╝ 
// Display a list of resources
##################################################################################################################
    // public function index($filter = null, $tag = null)
    public function faq()
    {
        // Check if user has required permission
        

        // Set the session to the current page route
        Session::put('fromPage', url()->full());

        $faqs = FAQ::where('category', 'recipes')->where('is_published', 1)->orderBy('question')->get();
        // dd($faqs);

        return view('UI.recipes.faqs', compact('faqs'));

    }


##################################################################################################################
#  ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗     ██████╗ ██████╗ ██╗██████╗ 
#  ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝    ██╔════╝ ██╔══██╗██║██╔══██╗
#  ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝     ██║  ███╗██████╔╝██║██║  ██║
#  ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗     ██║   ██║██╔══██╗██║██║  ██║
#  ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗    ╚██████╔╝██║  ██║██║██████╔╝
#  ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═════╝ 
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
            ->where('personal', '=', Recipe::IS_PERSONAL_NO)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category','likes','views')
               ->published()
               ->public()
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(10);
         } else {
            $recipes = Recipe::with('user','category','likes','views')
               ->published()
               ->public()
               ->orderBy('title', 'asc')
               ->paginate(10);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','likes','views')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category','likes','views')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments','likes','views')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category','likes','views')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }

      $privateRecipesCount = Recipe::myRecipes()->private()->count();
      // dd($recipes);
      return view('UI.recipes.index.grid.index', compact('recipes','categories','letters','byCatName','privateRecipesCount'));
   }


##################################################################################################################
#  ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗    ██╗     ██╗███████╗████████╗
#  ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝    ██║     ██║██╔════╝╚══██╔══╝
#  ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝     ██║     ██║███████╗   ██║   
#  ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗     ██║     ██║╚════██║   ██║   
#  ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗    ███████╗██║███████║   ██║   
#  ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝    ╚══════╝╚═╝╚══════╝   ╚═╝   
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
            ->where('personal', '=', Recipe::IS_PERSONAL_NO)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category','likes','views')
               ->published()
               ->public()
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->get();
         } else {
            $recipes = Recipe::with('user','category','likes','views')
               ->published()
               ->public()
               ->orderBy('title', 'asc')
               ->get();
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','likes','views')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->get();
            } else {
               $recipes = Recipe::with('user','category','likes','views')
                  ->published()
                  ->public()
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->get();
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            // dd($allc);
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('published_at', '<=', Carbon::now())
               ->where('deleted_at', '=', null)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments','likes','views')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->get();
            } else {
               $recipes = Recipe::with('user','category','likes','views')
                  ->published()
                  ->public()
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  // ->paginate(10)
                  ->get();
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      $privateRecipesCount = Recipe::myRecipes()->private()->count();

      return view('UI.recipes.index.list.index', compact('recipes','categories','letters','byCatName','privateRecipesCount'));
   }


##################################################################################################################
#  ███████╗ █████╗ ██╗   ██╗    ██████╗ ███████╗ ██████╗██╗██████╗ ███████╗███████╗     ██████╗ ██████╗ ██╗██████╗ 
#  ██╔════╝██╔══██╗██║   ██║    ██╔══██╗██╔════╝██╔════╝██║██╔══██╗██╔════╝██╔════╝    ██╔════╝ ██╔══██╗██║██╔══██╗
#  █████╗  ███████║██║   ██║    ██████╔╝█████╗  ██║     ██║██████╔╝█████╗  ███████╗    ██║  ███╗██████╔╝██║██║  ██║
#  ██╔══╝  ██╔══██║╚██╗ ██╔╝    ██╔══██╗██╔══╝  ██║     ██║██╔═══╝ ██╔══╝  ╚════██║    ██║   ██║██╔══██╗██║██║  ██║
#  ██║     ██║  ██║ ╚████╔╝     ██║  ██║███████╗╚██████╗██║██║     ███████╗███████║    ╚██████╔╝██║  ██║██║██████╔╝
#  ╚═╝     ╚═╝  ╚═╝  ╚═══╝      ╚═╝  ╚═╝╚══════╝ ╚═════╝╚═╝╚═╝     ╚══════╝╚══════╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═════╝ 
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

      $privateRecipesCount = Recipe::myRecipes()->private()->count();

      return view('UI.recipes.favoriteRecipes.grid.index', compact('recipes','categories','privateRecipesCount'));
   }


##################################################################################################################
#  ███████╗ █████╗ ██╗   ██╗    ██████╗ ███████╗ ██████╗██╗██████╗ ███████╗███████╗    ██╗     ██╗███████╗████████╗
#  ██╔════╝██╔══██╗██║   ██║    ██╔══██╗██╔════╝██╔════╝██║██╔══██╗██╔════╝██╔════╝    ██║     ██║██╔════╝╚══██╔══╝
#  █████╗  ███████║██║   ██║    ██████╔╝█████╗  ██║     ██║██████╔╝█████╗  ███████╗    ██║     ██║███████╗   ██║   
#  ██╔══╝  ██╔══██║╚██╗ ██╔╝    ██╔══██╗██╔══╝  ██║     ██║██╔═══╝ ██╔══╝  ╚════██║    ██║     ██║╚════██║   ██║   
#  ██║     ██║  ██║ ╚████╔╝     ██║  ██║███████╗╚██████╗██║██║     ███████╗███████║    ███████╗██║███████║   ██║   
#  ╚═╝     ╚═╝  ╚═╝  ╚═══╝      ╚═╝  ╚═╝╚══════╝ ╚═════╝╚═╝╚═╝     ╚══════╝╚══════╝    ╚══════╝╚═╝╚══════╝   ╚═╝   
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

      $privateRecipesCount = Recipe::myRecipes()->private()->count();

      return view('UI.recipes.favoriteRecipes.list.index', compact('recipes','categories','privateRecipesCount'));
   }


##################################################################################################################
#  ██████╗ ██████╗ ██╗██╗   ██╗ █████╗ ████████╗███████╗    ██████╗ ███████╗ ██████╗██╗██████╗ ███████╗███████╗     ██████╗ ██████╗ ██╗██████╗ 
#  ██╔══██╗██╔══██╗██║██║   ██║██╔══██╗╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝██╔════╝██║██╔══██╗██╔════╝██╔════╝    ██╔════╝ ██╔══██╗██║██╔══██╗
#  ██████╔╝██████╔╝██║██║   ██║███████║   ██║   █████╗      ██████╔╝█████╗  ██║     ██║██████╔╝█████╗  ███████╗    ██║  ███╗██████╔╝██║██║  ██║
#  ██╔═══╝ ██╔══██╗██║╚██╗ ██╔╝██╔══██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║     ██║██╔═══╝ ██╔══╝  ╚════██║    ██║   ██║██╔══██╗██║██║  ██║
#  ██║     ██║  ██║██║ ╚████╔╝ ██║  ██║   ██║   ███████╗    ██║  ██║███████╗╚██████╗██║██║     ███████╗███████║    ╚██████╔╝██║  ██║██║██████╔╝
#  ╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝ ╚═════╝╚═╝╚═╝     ╚══════╝╚══════╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═════╝ 
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

      if($request->cat == 'all') {

         $alphas = DB::table('recipes')
            ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
            ->where('user_id','=', Auth::user()->id)
            ->where('personal', '=', Recipe::IS_PERSONAL_YES)
            ->where('deleted_at','=',Null)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(10);
         } else {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->orderBy('title', 'asc')
               ->paginate(10);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->where('deleted_at', '=', null)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
               dd($recipes);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('deleted_at', '=', null)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      $privateRecipesCount = Recipe::myRecipes()->private()->count();

      return view('UI.recipes.privateRecipes.grid.index', compact('recipes','categories','letters','byCatName','privateRecipesCount'));
   }


##################################################################################################################
#  ██████╗ ██████╗ ██╗██╗   ██╗ █████╗ ████████╗███████╗    ██████╗ ███████╗ ██████╗██╗██████╗ ███████╗███████╗    ██╗     ██╗███████╗████████╗
#  ██╔══██╗██╔══██╗██║██║   ██║██╔══██╗╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝██╔════╝██║██╔══██╗██╔════╝██╔════╝    ██║     ██║██╔════╝╚══██╔══╝
#  ██████╔╝██████╔╝██║██║   ██║███████║   ██║   █████╗      ██████╔╝█████╗  ██║     ██║██████╔╝█████╗  ███████╗    ██║     ██║███████╗   ██║   
#  ██╔═══╝ ██╔══██╗██║╚██╗ ██╔╝██╔══██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║     ██║██╔═══╝ ██╔══╝  ╚════██║    ██║     ██║╚════██║   ██║   
#  ██║     ██║  ██║██║ ╚████╔╝ ██║  ██║   ██║   ███████╗    ██║  ██║███████╗╚██████╗██║██║     ███████╗███████║    ███████╗██║███████║   ██║   
#  ╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝ ╚═════╝╚═╝╚═╝     ╚══════╝╚══════╝    ╚══════╝╚═╝╚══════╝   ╚═╝   
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
            ->where('personal', '=', Recipe::IS_PERSONAL_YES)
            ->where('deleted_at','=',Null)
            ->orderBy('letter')
            ->get();

         if($request->key) {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(10);
         } else {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->orderBy('title', 'asc')
               ->paginate(10);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('user_id','=', Auth::user()->id)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->where('deleted_at', '=', null)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
               dd($recipes);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('deleted_at', '=', null)
               ->where('personal', '=', Recipe::IS_PERSONAL_YES)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('personal', '=', Recipe::IS_PERSONAL_YES)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }

      $privateRecipesCount = Recipe::myRecipes()->private()->count();
      
      return view('UI.recipes.privateRecipes.list.index', compact('recipes','categories','letters','byCatName','privateRecipesCount'));
   }


##################################################################################################################
#  ███╗   ███╗██╗   ██╗    ██████╗ ███████╗ ██████╗██╗██████╗ ███████╗███████╗     ██████╗ ██████╗ ██╗██████╗ 
#  ████╗ ████║╚██╗ ██╔╝    ██╔══██╗██╔════╝██╔════╝██║██╔══██╗██╔════╝██╔════╝    ██╔════╝ ██╔══██╗██║██╔══██╗
#  ██╔████╔██║ ╚████╔╝     ██████╔╝█████╗  ██║     ██║██████╔╝█████╗  ███████╗    ██║  ███╗██████╔╝██║██║  ██║
#  ██║╚██╔╝██║  ╚██╔╝      ██╔══██╗██╔══╝  ██║     ██║██╔═══╝ ██╔══╝  ╚════██║    ██║   ██║██╔══██╗██║██║  ██║
#  ██║ ╚═╝ ██║   ██║       ██║  ██║███████╗╚██████╗██║██║     ███████╗███████║    ╚██████╔╝██║  ██║██║██████╔╝
#  ╚═╝     ╚═╝   ╚═╝       ╚═╝  ╚═╝╚══════╝ ╚═════╝╚═╝╚═╝     ╚══════╝╚══════╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═════╝ 
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
               ->where('user_id','=', Auth::user()->id)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(10);
         } else {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->orderBy('title', 'asc')
               ->paginate(10);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('deleted_at', '=', null)
               ->where('user_id','=', Auth::user()->id)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('deleted_at', '=', null)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }
      
      $privateRecipesCount = Recipe::myRecipes()->private()->count();

      return view('UI.recipes.myRecipes.grid.index', compact('recipes','categories','letters','byCatName','privateRecipesCount'));
   }


##################################################################################################################
#  ███╗   ███╗██╗   ██╗    ██████╗ ███████╗ ██████╗██╗██████╗ ███████╗███████╗    ██╗     ██╗███████╗████████╗
#  ████╗ ████║╚██╗ ██╔╝    ██╔══██╗██╔════╝██╔════╝██║██╔══██╗██╔════╝██╔════╝    ██║     ██║██╔════╝╚══██╔══╝
#  ██╔████╔██║ ╚████╔╝     ██████╔╝█████╗  ██║     ██║██████╔╝█████╗  ███████╗    ██║     ██║███████╗   ██║   
#  ██║╚██╔╝██║  ╚██╔╝      ██╔══██╗██╔══╝  ██║     ██║██╔═══╝ ██╔══╝  ╚════██║    ██║     ██║╚════██║   ██║   
#  ██║ ╚═╝ ██║   ██║       ██║  ██║███████╗╚██████╗██║██║     ███████╗███████║    ███████╗██║███████║   ██║   
#  ╚═╝     ╚═╝   ╚═╝       ╚═╝  ╚═╝╚══════╝ ╚═════╝╚═╝╚═╝     ╚══════╝╚══════╝    ╚══════╝╚═╝╚══════╝   ╚═╝   
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
               ->where('user_id','=', Auth::user()->id)
               ->where('title', 'like', $request->key . '%')
               ->orderBy('title', 'asc')
               ->paginate(10);
         } else {
            $recipes = Recipe::with('user','category')
               ->where('user_id','=', Auth::user()->id)
               ->orderBy('title', 'asc')
               ->paginate(10);
         }
      
      } else {

         if($byCatName->parent_id != 1) {
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('deleted_at', '=', null)
               ->where('user_id','=', Auth::user()->id)
               ->where('category_id', '=', $byCatName->id)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->where('category_id', '=', $byCatName->id)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         
         } else {

            $allc = Category::where('parent_id', $byCatName->id)->pluck('id');
            
            $alphas = DB::table('recipes')
               ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
               ->where('deleted_at', '=', null)
               ->where('user_id','=', Auth::user()->id)
               ->whereIn('category_id', $allc)
               ->orderBy('letter')
               ->get();

            if($request->key) {
               $recipes = Recipe::with('user','category','comments')
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->where('title', 'like', $request->key . '%')
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            } else {
               $recipes = Recipe::with('user','category')
                  ->where('user_id','=', Auth::user()->id)
                  ->whereIn('category_id', $allc)
                  ->orderBy('title', 'asc')
                  ->paginate(10);
            }
         }
      }

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }

      $privateRecipesCount = Recipe::myRecipes()->private()->count();
      
      return view('UI.recipes.myRecipes.list.index', compact('recipes','categories','letters','byCatName','privateRecipesCount'));
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
      
      // dd($request);
      $byCatName = $request->byCatName;
      $recipe = Recipe::with('user', 'category', 'comments')->findOrFail($id);
      $categories = Category::where('parent_id',1)->get();

      // Increase the view count since this is viewed from the frontend
      // DB::table('recipes')->where('id','=',$recipe->id)->increment('views',1);
      $expiresAt = now()->addHours(3);
      views($recipe)->cooldown($expiresAt)->record();

      // GET PREVIOUS RECIPE //
      // If a sub category has been selected
      if($byCatName) {
         $previous = Recipe::where('title', '<', $recipe->title)
            ->where('category_id', $byCatName)
            ->where('personal', '=', Recipe::IS_PERSONAL_NO)
            ->orderBy('title','asc')
            ->max('title');
      // If no sub category has been selected
      } else {
         $previous = Recipe::where('title', '<', $recipe->title)
            ->where('personal', '=', Recipe::IS_PERSONAL_NO)
            ->orderBy('title','asc')
            ->max('title');
      }

      // if a previous record exists
      if($previous){
         // If a sub category has been selected
         if($byCatName) {
            $p = Recipe::where('title',$previous)
               ->where('category_id', $byCatName)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->get();
            // return only the ID of the previous record
            $previous = $p[0]->id;
         // If no sub category has been selected
         } else {
            $p = Recipe::where('title',$previous)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->get();
            // return only the ID of the previous record
            $previous = $p[0]->id;
         }
      }

      // GET NEXT RECIPE //
      // If a sub category has been selected
      if($byCatName) {
         $next = Recipe::where('title', '>', $recipe->title)
            ->where('category_id', $byCatName)
            ->where('personal', '=', Recipe::IS_PERSONAL_NO)
            ->orderBy('title','desc')
            ->min('title');
      // If no sub category has been selected
      } else {
         $next = Recipe::where('title', '>', $recipe->title)
            ->where('personal', '=', Recipe::IS_PERSONAL_NO)
            ->orderBy('title','desc')
            ->min('title');
      }

      // if a next record exists
      if($next){
         // If a sub category has been selected
         if($byCatName) {
            $n = Recipe::where('title',$next)
               ->where('category_id', $byCatName)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->get();
            // return only the ID of the next record
            $next = $n[0]->id;
         // If no sub category has been selected
         } else {
            $n = Recipe::where('title',$next)
               ->where('personal', '=', Recipe::IS_PERSONAL_NO)
               ->get();
            // return only the ID of the next record
            $next = $n[0]->id;
         }
      }

      $privateRecipesCount = Recipe::myRecipes()->private()->count();

      return view('UI.recipes.show', compact('recipe','categories','previous','next','byCatName','privateRecipesCount'));
   }


}