<?php

namespace App\Http\Controllers\UI\Movies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Required for validation // use Illuminate\Routing\Controller;
use App\Models\Movie;
use Carbon\Carbon;
use DB;
use Session;

class MoviesController extends Controller
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
# ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
# ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
# ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
# ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
# ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
# ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
// Display a list of resources
##################################################################################################################
	public function index(Request $request, $key=null)
	{
		// Check if user has required permission


		// Set the session to the current page route
		Session::put('fromPage', url()->full());
			
		//$alphas = range('A', 'Z');
		$alphas = DB::table('movies')
			->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
			->where('published_at','<', Carbon::Now())
			->orderBy('letter')
			->get();

		$letters = [];
		foreach($alphas as $alpha) {
			$letters[] = $alpha->letter;
		}

		// If $key value is passed
		if ($key) {
			$movies = Movie::with('user')
				->sortable()
				->published()
				->where('title', 'like', $key . '%')
				->orderBy('title', 'asc')
				// ->get();
				->paginate(15);
			return view('UI.movies.index', compact('movies','letters'));
		}

		// No $key value is passed
		$movies = Movie::with('user')
			->sortable()
			// ->published()
			->orderBy('title', 'asc')
			// ->get();
			->paginate(15);
		// dd($movies);

		// Required to be able to list the "catagories" in the search block
		$movie = New Movie();

		return view('UI.movies.index', compact('movies','letters','movie'));
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
	// public function show(Request $request, $id, $previous=null, $next=null)
	public function show(Request $request, $id, $previous=null, $next=null)
	{
		// Check if user has required permission


		// Get the current movie to display
		$movie = Movie::findOrFail($id);

		// Increase the view count since this is viewed from the frontend
		DB::table('movies')->where('id','=',$id)->increment('views',1);

		// get the title of the next movie
		$nextTitle = Movie::published()->where('title', '>', $movie->title)->orderBy('title','desc')->min('title');

		if($nextTitle){
			$next = Movie::published()->where('title', $nextTitle)->first();
			$next = $next->id;
		}

		// get the title of the previous movie
		$previousTitle = Movie::published()->where('title', '<', $movie->title)->orderBy('title','asc')->max('title');

		if($previousTitle){
			$previous = Movie::published()->where('title', $previousTitle)->first();
			$previous = $previous->id;
		}

		return view('UI.movies.show', compact('movie','next','previous'));
	}


##################################################################################################################
# ███████╗ █████╗ ██╗   ██╗ ██████╗ ██████╗ ██╗████████╗███████╗     █████╗ ██████╗ ██████╗ 
# ██╔════╝██╔══██╗██║   ██║██╔═══██╗██╔══██╗██║╚══██╔══╝██╔════╝    ██╔══██╗██╔══██╗██╔══██╗
# █████╗  ███████║██║   ██║██║   ██║██████╔╝██║   ██║   █████╗      ███████║██║  ██║██║  ██║
# ██╔══╝  ██╔══██║╚██╗ ██╔╝██║   ██║██╔══██╗██║   ██║   ██╔══╝      ██╔══██║██║  ██║██║  ██║
# ██║     ██║  ██║ ╚████╔╝ ╚██████╔╝██║  ██║██║   ██║   ███████╗    ██║  ██║██████╔╝██████╔╝
# ╚═╝     ╚═╝  ╚═╝  ╚═══╝   ╚═════╝ ╚═╝  ╚═╝╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚═════╝ ╚═════╝ 
##################################################################################################################
   public function favoriteAdd($id)
   {
      // Check if user has required permission
      // if($this->enablePermissions) {
      //    if(!checkPerm('article_')) { abort(401, 'Unauthorized Access'); }
      // }

      $movie = Movie::find($id);
      $movie->addFavorite();

      Session::flash ('success','The movie was successfully added to your Favorites list!');
      return redirect()->back();
   }


##################################################################################################################
# ███████╗ █████╗ ██╗   ██╗ ██████╗ ██████╗ ██╗████████╗███████╗    ██████╗ ███████╗███╗   ███╗ ██████╗ ██╗   ██╗███████╗
# ██╔════╝██╔══██╗██║   ██║██╔═══██╗██╔══██╗██║╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝████╗ ████║██╔═══██╗██║   ██║██╔════╝
# █████╗  ███████║██║   ██║██║   ██║██████╔╝██║   ██║   █████╗      ██████╔╝█████╗  ██╔████╔██║██║   ██║██║   ██║█████╗  
# ██╔══╝  ██╔══██║╚██╗ ██╔╝██║   ██║██╔══██╗██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║╚██╔╝██║██║   ██║╚██╗ ██╔╝██╔══╝  
# ██║     ██║  ██║ ╚████╔╝ ╚██████╔╝██║  ██║██║   ██║   ███████╗    ██║  ██║███████╗██║ ╚═╝ ██║╚██████╔╝ ╚████╔╝ ███████╗
# ╚═╝     ╚═╝  ╚═╝  ╚═══╝   ╚═════╝ ╚═╝  ╚═╝╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝╚═╝     ╚═╝ ╚═════╝   ╚═══╝  ╚══════╝
##################################################################################################################
   public function favoriteRemove($id)
   {
      // Check if user has required permission
      // if($this->enablePermissions) {
      //    if(!checkPerm('recipe_favorite')) { abort(401, 'Unauthorized Access'); }
      // }

      $movie = Movie::find($id);
      $movie->removeFavorite();

      Session::flash ('success','The movie was successfully removed to your Favorites list!');
      return redirect()->back();
   }


##################################################################################################################
# SEARCH
##################################################################################################################
   public function search(Request $request)
   {
      // $route = Route::current();
      // dd($route);
      // $name = Route::currentRouteName();
      // dd($name);
      // $action = Route::currentRouteAction();
      // dd($action);

      $rules = [
         'title' => 'required',
      ];

      $customMessages = [
         'title.required' => 'Required',
      ];

      $this->validate($request, $rules, $customMessages);

      // Set the session to the current page route
      Session::put('fromPage', url()->full());

      $search = $request->get('title');

      $query = Movie::with('user')->where('title','like','%'.$search.'%');

      if ($request->has('overview')) {
         $query->orWhere('overview','like','%'.$search.'%');
      }

      if ($request->category != 0) {
         // dd($request->category);
         $query = $query->where('category',$request->category);
      }

      $movies = $query->orderBy('title','asc')->paginate(25);
      $letters = [];
      
      return view('UI.movies.index', compact('movies', 'letters','search'));
  }


##################################################################################################################
#  █████╗ ██████╗  ██████╗██╗  ██╗██╗██╗   ██╗███████╗
# ██╔══██╗██╔══██╗██╔════╝██║  ██║██║██║   ██║██╔════╝
# ███████║██████╔╝██║     ███████║██║██║   ██║█████╗  
# ██╔══██║██╔══██╗██║     ██╔══██║██║╚██╗ ██╔╝██╔══╝  
# ██║  ██║██║  ██║╚██████╗██║  ██║██║ ╚████╔╝ ███████╗
# ╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝╚═╝  ╚═══╝  ╚══════╝
# Display the archived resources
##################################################################################################################
   public function archives($year, $month)
   {
      // Check if user has required permission
      if($this->enablePermissions) {
         if(!checkPerm('movie_browse')) { abort(401, 'Unauthorized Access'); }
      }

      // Set the session to the current page route
      Session::put('fromPage', url()->full());

      $archives = Movie::with('user')->whereYear('created_at','=', $year)
         ->whereMonth('created_at','=', $month)
         ->where('published_at', '<=', Carbon::now())
         ->get();

      return view('movies.archives', compact('archives'))->withYear($year)->withMonth($month);
   }


##################################################################################################################
# ███╗   ███╗██╗   ██╗    ███████╗ █████╗ ██╗   ██╗ ██████╗ ██████╗ ██╗████████╗███████╗███████╗
# ████╗ ████║╚██╗ ██╔╝    ██╔════╝██╔══██╗██║   ██║██╔═══██╗██╔══██╗██║╚══██╔══╝██╔════╝██╔════╝
# ██╔████╔██║ ╚████╔╝     █████╗  ███████║██║   ██║██║   ██║██████╔╝██║   ██║   █████╗  ███████╗
# ██║╚██╔╝██║  ╚██╔╝      ██╔══╝  ██╔══██║╚██╗ ██╔╝██║   ██║██╔══██╗██║   ██║   ██╔══╝  ╚════██║
# ██║ ╚═╝ ██║   ██║       ██║     ██║  ██║ ╚████╔╝ ╚██████╔╝██║  ██║██║   ██║   ███████╗███████║
# ╚═╝     ╚═╝   ╚═╝       ╚═╝     ╚═╝  ╚═╝  ╚═══╝   ╚═════╝ ╚═╝  ╚═╝╚═╝   ╚═╝   ╚══════╝╚══════╝
// MY FAVORITES :: Display a listing of the resource that have been favorited by a specific user.
##################################################################################################################
   public function myFavorites(Request $request, $key=null)
   {
      // Check if user has required permission
      if($this->enablePermissions) {
         if(!checkPerm('movie_browse')) { abort(401, 'Unauthorized Access'); }
      }

      // Set the session to the current page route
      Session::put('fromPage', url()->full());

      if(Auth::check()) {
         $user = Auth::user();
         $movies = $user->favorite(Movie::class)->sortBy('title');
      }

      return view('movies.myFavorites', compact('movies'));
   }
}
