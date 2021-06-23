<?php

namespace App\Http\Controllers\Admin\Posts;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller; // Required for validation // use Illuminate\Routing\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use Auth;
use Gate;
use DB;
use Carbon\Carbon;
use File;
use Image;
use Purifier;
use Session;
use Storage;
use Log;
use URL;

use App\Http\Requests\PostRequest;
// use App\Http\Requests\UpdatePostRequest;

class PostsController extends Controller
{

##################################################################################################################
#   ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
#  ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
#  ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
#  ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
#  ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#   ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct() {
      // only allow authenticated users to access these pages
      $this->middleware('auth');
   }
   

##################################################################################################################
#   ██████╗██████╗ ███████╗ █████╗ ████████╗███████╗
#  ██╔════╝██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██╔════╝
#  ██║     ██████╔╝█████╗  ███████║   ██║   █████╗  
#  ██║     ██╔══██╗██╔══╝  ██╔══██║   ██║   ██╔══╝  
#  ╚██████╗██║  ██║███████╗██║  ██║   ██║   ███████╗
#   ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
# Show the form for creating a new resource
##################################################################################################################
   public function create()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-create'), 403);

      $post = new Post();
      // Get all categories related to Posts Category
      $cats = Category::where('name','posts')->first();
      $categories = Category::where('parent_id', $cats->id)->get();
      $tags = Tag::where('category', Tag::IS_POST)->get();

      return view('admin.posts.create', compact('categories','tags', 'post'));
   }


##################################################################################################################
# DELETE
##################################################################################################################
   // public function delete($id)
   // {
   //    // Check if user has required permission


   //    $post = Post::onlyTrashed()->findOrFail($id);

   //    Session::put('pageName', 'trashed');

   //    return view('admin.posts.delete', compact('post'));
   // }


##################################################################################################################
# DELETE ALL
# Mass Delete selected rows - all selected records
##################################################################################################################
   // public function deleteAll(Request $request)
   // {
   //    // Check if user has required permission


   //    // Set the variable so we can use a button in other pages to come back to this page
 //      Session::put('fromPage', '');

   //    $this->validate($request, [
   //       'checked' => 'required',
   //    ]);

   //    $checked = $request->input('checked');

   //    Post::whereIn('id', $checked)->forceDelete();

   //    Session::flash('delete','The posts were deleted successfully.');
   //    return redirect()->route('admin.posts.trashed');
   // }


##################################################################################################################
# DELETE DESTROY
# Remove the specified resource from storage
##################################################################################################################
   // public function deleteDestroy($id)
   // {
   //    // Check if user has required permission


   //    $post = Post::withTrashed()->find($id);

   //    // remove any references to this post from the post_tag table
   //    $post->tags()->detach();

   //    // Delete the associated image if any
   //    File::delete('_posts/' . $post->image_path);

   //    $post->forceDelete();

   //    Session::flash('success', 'The post was successfully deleted!');
   //    return redirect()->route('admin.posts.trashed');
   // }


##################################################################################################################
#  ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
#  ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
#  ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
#  ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
#  ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
#  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
# Remove the specified resource from storage
##################################################################################################################
   public function destroy(Post $post)
   {
      // Check if user has required permission
      abort_unless((Gate::allows('post-delete') || ($post->user_id == Auth::id())), 403);

      // delete the post
      $post->delete();

      $notification = [
         'message' => 'The post has been deleted successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ███████╗██████╗ ██╗████████╗
#  ██╔════╝██╔══██╗██║╚══██╔══╝
#  █████╗  ██║  ██║██║   ██║   
#  ██╔══╝  ██║  ██║██║   ██║   
#  ███████╗██████╔╝██║   ██║   
#  ╚══════╝╚═════╝ ╚═╝   ╚═╝   
# Show the form for editing the specified resource
##################################################################################################################
   public function edit(Post $post)
   {
      // find the post in the db and save it to a variable
      // $post = Post::findOrFail($id);

      // Check if user has required permission
      abort_unless((Gate::allows('post-edit') || ($post->user_id == Auth::id())), 403);

      // Get all categories related to Posts Category
      $cats = Category::where('name','posts')->first();
      $categories = Category::where('parent_id', $cats->id)->get();
      $tags = Tag::where('category', Tag::IS_POST)->get();

      return view('admin.posts.edit', compact('post','categories','tags'));
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
   public function index(Request $request, $key=null)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-manage'), 403);

      // Set the session to the current page route
      Session::put('fromPage', url()->full());

      $alphas = DB::table('posts')
         ->select(DB::raw('DISTINCT LEFT(title, 1) as letter'))
         ->where('published_at','<', Carbon::Now())
         ->where('deleted_at','=', Null)
         ->orderBy('letter')
         ->get();

      $letters = [];
      foreach($alphas as $alpha) {
        $letters[] = $alpha->letter;
      }

      // If $key value is passed
      if ($key) {
         $posts = Post::published()
            ->with('user','category','likes','views')
            ->where('title', 'like', $key . '%')
            ->orderBy('title', 'asc')
            ->get();
      } else {
         // No $key value is passed
         $posts = Post::published()
            ->with('user','category','likes','views')
            ->orderBy('id','desc')
            ->get();
      }
      
      return view('admin.posts.index', compact('posts','letters'));
   }


##################################################################################################################
#  ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
#  ██╔════╝██║  ██║██╔═══██╗██║    ██║
#  ███████╗███████║██║   ██║██║ █╗ ██║
#  ╚════██║██╔══██║██║   ██║██║███╗██║
#  ███████║██║  ██║╚██████╔╝╚███╔███╔╝
#  ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
# Display the specified resource
##################################################################################################################
   public function show($id)
   {
      $post = Post::find($id);

      // Check if user has required permission


     // Increase the view count if viewed from the frontend
     if (url()->previous() == url('/blog/')) {
         DB::table('posts')->where('id','=',$post->id)->increment('views',1);
     }

      // Get all categories related to Posts Category
      $cats = Category::where('name','posts')->first();
      $categories = Category::where('parent_id', $cats->id)->get();

      $tags = Tag::where('category', Tag::IS_POST)->get();

      // get previous project
      $previous = Post::where('title', '<', $post->title)->published()->orderBy('title','asc')->max('title');
      
      if($previous){
         $p = Post::where('title', $previous)->get();
         $previous = $p[0]->id;
      }

      // get next posts
      $next = Post::where('title', '>', $post->title)->published()->orderBy('title','desc')->min('title');

      if($next){
         $n = Post::where('title', $next)->get();
         $next = $n[0]->id;
      }

      // Get all associated Audits
      $audits = $post->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.posts.show')
         ->withPost($post)
         ->withTags($tags)
         ->withPrevious($previous)
         ->withNext($next)
         ->withCategories($cats)
         ->withAudits($audits);
   }


##################################################################################################################
#  ███████╗████████╗ ██████╗ ██████╗ ███████╗
#  ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
#  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
#  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
#  ███████║   ██║   ╚██████╔╝██║  ██║███████╗
#  ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
# Store a newly created resource in storage
##################################################################################################################
   public function store(PostRequest $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-create'), 403);

      // save the data in the database
      $post = new Post;

         $post->title = $request->title;
         // slug is handled in the model
         $post->category_id = $request->category_id;
         $post->published_at = $request->published_at;
         $post->body = $request->body;
         // $post->body = Purifier::clean($request->body);
         $post->user_id = Auth::user()->id;
         $post->modified_by_id = Auth::user()->id;
         $post->public_notes = $request->public_notes;
         $post->private_notes = $request->private_notes;
         $post->source = $request->source;


         // Save the image if there is one
         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('_posts/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $post->image = $filename;
         }

      if($post->save())
      {
         $notification = [
           'message' => 'The post has been created successfully!', 
           'alert-type' => 'success'
        ];

         // save the tags in the post_tag table
         // false required as default (otherwise override existing association)
         if (isset($request->tags))
         {
             $post->tags()->sync($request->tags, false);
         } else {
             $post->tags()->sync(array());
         }

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.posts.edit', $post->id)->with($notification);
         }
      }

      // redirect to another page
      return redirect()->route('admin.posts.index');
   }


##################################################################################################################
#  ██╗   ██╗██████╗ ██████╗  █████╗ ████████╗███████╗
#  ██║   ██║██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝██╔════╝
#  ██║   ██║██████╔╝██║  ██║███████║   ██║   █████╗  
#  ██║   ██║██╔═══╝ ██║  ██║██╔══██║   ██║   ██╔══╝  
#  ╚██████╔╝██║     ██████╔╝██║  ██║   ██║   ███████╗
#   ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝
# Update the specified resource in storage
##################################################################################################################
   public function update(PostRequest $request, $id)
   {
      // Get the post values from the database
      $post = Post::find($id);

      // Check if user has required permission
      abort_unless(Gate::allows('post-edit'), 403);

         // Save the data to the database
         $post->title = $request->input('title');
         $post->category_id = $request->input('category_id');
         $post->published_at = $request->input('published_at');
         // $post->body = Purifier::clean($request->input('body'));
         $post->body = $request->body;
         $post->public_notes = $request->public_notes;
         $post->private_notes = $request->private_notes;
         $post->source = $request->source;

         // Check if a new image was submitted
         if ($request->hasFile('image')) {
            //Add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('_posts/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            
            // get name of old image
            $oldImageName = $post->image;

            // Update database
            $post->image = $filename;

            // Delete old photo
            File::delete('_posts/' . $oldImageName);
         }

      // $post->save();
      if($post->save())
      {
         $notification = [
           'message' => 'The post has been created successfully!', 
           'alert-type' => 'success'
         ];

         //save the tags in the databse
         // not adding 2nd param will delete all entries in array and replace them with new ones
         // check that there is something in the array and then save it else pass an empty array
         if (isset($request->tags))
         {
             $post->tags()->sync($request->tags);
         } else {
             $post->tags()->sync(array());
         }

         if ($request->submit == 'update')
         {
            return redirect()->route('admin.posts.index')->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.posts.edit', $post)->with($notification);
         }

         // Set flash data with success message
         Session::flash ('success', 'This post was successfully updated!');
         return redirect()->route('admin.posts.index');
      }

   }

}
