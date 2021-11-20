<?php

namespace App\Http\Controllers\UI\Carvings;

use App\Http\Controllers\Controller;
use CyrildeWit\EloquentViewable\Support\Period;
use App\Models\Category;
use App\Models\Carving;
use App\Models\Faq;
use App\Models\Comment;
use App\Models\Tag;
// use CyrildeWit\EloquentViewable\Support\Period;
// use App\Models\Admin\Projects\Finish;
// use App\Models\Admin\Projects\Material;
// use App\Models\Admin\Projects\Image;
use Illuminate\Http\Request;
use Auth;
use DB;
use File;
use Image as Img;
use Route;
use Session;
use URL;
use Carbon\Carbon;

class CarvingsController extends Controller
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
      // $this->middleware('auth')->except('index','show');
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
    // public function index($filter = null, $tag = null)
    public function index($filter = null, $tag = null)
    {
        // Check if user has required permission
        

        // Set the session to the current page route
        Session::put('fromPage', url()->full());

        $carving = New Carving();
        $tags = Tag::where('category',1)->orderBy('name')->get();

        if($filter == "all" && $tag){
            $carvings = Tag::where('name', request('tag'))->firstOrFail()->carvings()->orderBy('name')->paginate(8);

        // Filter and Tag
        } elseif($filter && $tag) {
            $carvings = Carving::with('comments')->with('images')->where('category', '=', $filter)->whereHas('tags', function ($query) {
                $query->where('name', request('tag'));
            })->paginate(8);

        // Filter and NO Tag
        } elseif($filter && !$tag) {
            $carvings = Carving::with('comments')->with('images')->where('category', '=', $filter)->orderBy('name')->paginate(8);
        }else{
            $carvings = Carving::with('comments')->with('images')->orderBy('name')->paginate(8);
        }

        return view('UI.carvings.index', compact('carving','tags','carvings'));

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

        $faqs = FAQ::where('category', 'carvings')->where('is_published', 1)->orderBy('question')->get();
        // dd($faqs);

        // Increase the view count since this is viewed from the frontend
        // $expiresAt = now()->addHours(3);
        // views($faq)->cooldown($expiresAt)->record();

        return view('UI.carvings.faqs', compact('faqs'));

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
    public function show(Carving $carving, Request $request)
    {
        // Check if user has required permission

        // Increase the view count if viewed from the frontend
        // if (url()->previous() != url('/carvings/list')) {
        //     DB::table('carvings')->where('id','=',$carving->id)->increment('views',1);
        // }
        $expiresAt = now()->addHours(3);
        views($carving)->cooldown($expiresAt)->record();
        // views($carving)->record();

        // get previous project
        $previous = Carving::where('name', '<', $carving->name)->orderBy('name','asc')->max('name');
        if($previous){
            $p = Carving::where('name',$previous)->get();
            $previous = $p[0]->id;
        }

        // get next project
        $next = Carving::where('name', '>', $carving->name)->orderBy('name','desc')->min('name');
        if($next){
            $n = Carving::where('name',$next)->get();
            $next = $n[0]->id;
        }

        return view('UI.carvings.show', compact('carving','previous','next'));
    }


    // public function index($filter = null, $tag = null)
    public function typeList()
    {
        // Check if user has required permission
        

        // Set the session to the current page route
        // Session::put('fromPage', url()->full());

        $list = FAQ::findOrFail(126);
        // dd($list);

        // Increase the view count since this is viewed from the frontend
        // $expiresAt = now()->addHours(3);
        // views($faq)->cooldown($expiresAt)->record();

        return view('UI.carvings.typeList', compact('list'));

    }
}
