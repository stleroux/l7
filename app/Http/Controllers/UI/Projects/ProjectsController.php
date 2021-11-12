<?php

namespace App\Http\Controllers\UI\Projects;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Auth;
use DB;
use File;
use Image as Img;
use Route;
use Session;
use URL;

class ProjectsController extends Controller
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
      $this->middleware('auth')->except('index','show','faq');
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
    public function index($filter = null, $tag = null)
    {
        // Check if user has required permission

        // Set the session to the current page route
        Session::put('fromPage', url()->full());

        $project = New Project();
        $tags = Tag::where('category',3)->orderBy('name')->get();

        // if($filter) {
        //     if($filter == 1000) {
        //         $projects = Project::with('images')->orderBy('id','desc')->take(4)->get();
        //         return view('UI.projects.index', compact('projects','project'));
        //     }

        //     $projects = Project::with('images')->where('category', '=', $filter)->paginate(8);

        // } else {
        //     $projects = Project::with('images')->orderBy('name','asc')->paginate(8);
        // }

        if($filter == "all" && $tag){
            $projects = Tag::where('name', request('tag'))->firstOrFail()->projects()->orderBy('name')->paginate(8);

        // Filter and Tag
        } elseif($filter && $tag) {
            $projects = Project::with('images')->where('category', '=', $filter)->whereHas('tags', function ($query) {
                $query->where('name', request('tag'));
            })->paginate(8);

        // Filter and NO Tag
        } elseif($filter && !$tag) {
            $projects = Project::with('images')->where('category', '=', $filter)->orderBy('name')->paginate(8);
        }else{
            $projects = Project::with('images')->orderBy('name')->paginate(8);
        }
        
        // return view('UI.projects.index', compact('projects','project','filter'));
        return view('UI.projects.index', compact('project','tags','projects'));
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

        $faqs = FAQ::where('category', 'projects')->where('is_published', 1)->orderBy('question')->get();
        // dd($faqs);

        return view('UI.projects.faqs', compact('faqs'));

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
    public function show(Project $project, Request $request)
    {
        // Check if user has required permission

        // Increase the view count if viewed from the frontend
        // if(Auth::check()){
        //     $userlist = new Collection([1,2,3]);
        //     // dd($userlist);
        //     $id = Auth::user()->id;
        //     // dd($id);
        //     if (!$userlist->contains($id)) {
        //         if (url()->previous() != url('/projects/list')) {
        //             DB::table('projects')->where('id','=',$project->id)->increment('views',1);
        //         }
        //     }
        // }
        $expiresAt = now()->addHours(3);
        views($project)->cooldown($expiresAt)->record();

        // get previous project
        $previous = Project::where('name', '<', $project->name)->orderBy('name','asc')->max('name');
        if($previous){
            $p = Project::where('name',$previous)->get();
            $previous = $p[0]->id;
        }

        // get next project
        $next = Project::where('name', '>', $project->name)->orderBy('name','desc')->min('name');
        if($next){
            $n = Project::where('name',$next)->get();
            $next = $n[0]->id;
        }

        return view('UI.projects.show', compact('project','previous','next'));
    }

}
