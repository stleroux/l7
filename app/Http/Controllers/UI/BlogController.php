<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Project;
use Carbon\Carbon;
use Auth;
use DB;
use Log;
use Redirect;
use Session;

use App\Http\Requests\CreateCommentRequest;

class BlogController extends Controller
{

##################################################################################################################
#  ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
# ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
# ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
# ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
# ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#  ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct() {
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
   public function archive($year, $month)
   {

      $archives = Post::published()->with('user')
         ->whereYear('created_at','=', $year)
         ->whereMonth('created_at','=', $month)
         ->orderBy('id','desc')
         ->get();

      // Save the URL in a varibale so it can be used in the blog.single page to redirect the user to the archives list page
      Session::flash('backUrl', \Request::fullUrl());

      return view('UI.blog.archive', compact('archives'))->withYear($year)->withMonth($month);
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
      // Session::put('fromPage', url()->full());

      $faqs = FAQ::where('category', 'blog')->where('is_published', 1)->orderBy('question')->get();
      // dd($faqs);

      return view('UI.blog.faqs', compact('faqs'));

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
   public function getIndex()
   {
      $posts = Post::published()->with('user')->orderBy('published_at','desc')->paginate(5);

      return view ('UI.blog.index', compact('posts'));
   }


##################################################################################################################
# ██████╗ ██████╗ ██╗███╗   ██╗████████╗
# ██╔══██╗██╔══██╗██║████╗  ██║╚══██╔══╝
# ██████╔╝██████╔╝██║██╔██╗ ██║   ██║   
# ██╔═══╝ ██╔══██╗██║██║╚██╗██║   ██║   
# ██║     ██║  ██║██║██║ ╚████║   ██║   
# ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝   ╚═╝   
##################################################################################################################
   public function print($id)
   {
      $post = Post::find($id);

      return view('UI.blog.print', compact('post'));
   }


##################################################################################################################
# ███████╗███████╗ █████╗ ██████╗  ██████╗██╗  ██╗
# ██╔════╝██╔════╝██╔══██╗██╔══██╗██╔════╝██║  ██║
# ███████╗█████╗  ███████║██████╔╝██║     ███████║
# ╚════██║██╔══╝  ██╔══██║██╔══██╗██║     ██╔══██║
# ███████║███████╗██║  ██║██║  ██║╚██████╗██║  ██║
# ╚══════╝╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝
##################################################################################################################
   public function search(Request $request)
   {
      $this->validate($request, [
         'search' => 'required'
      ]);

      $search = $request->get('search');

      $posts = Post::where('title', 'like', "%$search%")
          ->orWhere('body', 'like', "%$search%")
          ->published()
          ->paginate(10)
          ->appends(['search' => $search]);

      return view('UI.blog.search', compact('posts'));
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
   public function show($slug)
   {
      // fetch from database based on slug
      $post = Post::where('slug', '=', $slug)->first();

      // get previous post id
      $previous = Post::published()->where('id', '<', $post->id)->orderBy('published_at','asc')->max('id');
      // get slug if record exists
      if($previous = Post::published()->find($previous)) {
         $previous = $previous->slug;
      }

      // get next post id
      $next = Post::published()->where('id', '>', $post->id)->orderBy('published_at','desc')->min('id');
      // get slug if record exists
      if($next = Post::published()->find($next)) {
         $next = $next->slug;
      }

      // Add 1 to views column
      // DB::table('posts')->where('slug', '=', $slug)->increment('views', 1);
      $expiresAt = now()->addHours(3);
      views($post)->cooldown($expiresAt)->record();

      // return the view and pass in the post object
      return view('UI.blog.show', compact('post','next','previous'));
   }


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗     ██████╗ ██████╗ ███╗   ███╗███╗   ███╗███████╗███╗   ██╗████████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝    ██╔════╝██╔═══██╗████╗ ████║████╗ ████║██╔════╝████╗  ██║╚══██╔══╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗      ██║     ██║   ██║██╔████╔██║██╔████╔██║█████╗  ██╔██╗ ██║   ██║   
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝      ██║     ██║   ██║██║╚██╔╝██║██║╚██╔╝██║██╔══╝  ██║╚██╗██║   ██║   
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗    ╚██████╗╚██████╔╝██║ ╚═╝ ██║██║ ╚═╝ ██║███████╗██║ ╚████║   ██║   
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝     ╚═════╝ ╚═════╝ ╚═╝     ╚═╝╚═╝     ╚═╝╚══════╝╚═╝  ╚═══╝   ╚═╝   
##################################################################################################################
   public function storeComment(CreateCommentRequest $request, $id)
   {
      // Check if user has required permission


      $post = Post::find($id);

      $comment = new Comment();
         $comment->user_id = Auth::user()->id;
         $comment->comment = $request->comment;
      $post->comments()->save($comment);

      Session::flash('success', 'Comment added succesfully.');
      return redirect()->route('blog.show', [$post->slug]);
      }

}
