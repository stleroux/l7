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
			->published()
			->orderBy('title', 'asc')
			// ->get();
			->paginate(15);

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


}
