<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller; // Required for validation // use Illuminate\Routing\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use Carbon\Carbon;
use DB;
use File;
use Gate;
use Image;
use Log;
use Purifier;
use Session;
use Storage;
use URL;

class FunctionsController extends Controller
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
      // Only allow authenticated users access to these functions
      $this->middleware('auth')->except('archives');
   }


   ##################################################################################################################
   # ██████  ███████ ██      ███████ ████████ ███████ 
   # ██   ██ ██      ██      ██         ██    ██      
   # ██   ██ █████   ██      █████      ██    █████   
   # ██   ██ ██      ██      ██         ██    ██      
   # ██████  ███████ ███████ ███████    ██    ███████ 
   // Mass Delete selected rows - all selected records
   ##################################################################################################################
   public function delete($id)
   {
      $post = Post::onlyTrashed()->findOrFail($id);

      // Check if user has required permission
      abort_unless((Gate::allows('post-delete') || ($post->user_id == Auth::id())), 403);

      // delete the user
      if($post->forceDelete())
      {

         if($post->image) {
            $image = public_path().'/_posts/'.$post->image;
            unlink($image);
         }

         $notification = array(
            'message' => 'The post was deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the post.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████╗ ███████╗██╗     ███████╗████████╗███████╗     █████╗ ██╗     ██╗     
# ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝    ██╔══██╗██║     ██║     
# ██║  ██║█████╗  ██║     █████╗     ██║   █████╗      ███████║██║     ██║     
# ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝      ██╔══██║██║     ██║     
# ██████╔╝███████╗███████╗███████╗   ██║   ███████╗    ██║  ██║███████╗███████╗
# ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝╚══════╝
// Mass Delete selected rows - all selected records
##################################################################################################################
   public function massDelete(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-delete'), 403);

      $posts = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($posts as $post_id) {
            $post = Post::onlyTrashed()->findOrFail($post_id);

            // Delete images from file system
            // $images = DB::table('projects__images')->where('project_id', '=', $project->id)->get();

            if($post->image) {
               $image = public_path().'/_posts/'.$post->image;
               unlink($image);
            }

            // Delete related tags from DB
            DB::table('post_tag')->where('post_id', '=', $post->id)->delete();

            $post->forceDelete();
            // $project->permissions()->detach();
         }

         $notification = [
            'message' => 'The selected posts and all associated resources have been permanently deleted!',
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██╗███╗   ███╗ █████╗  ██████╗ ███████╗    ██████╗ ███████╗██╗     ███████╗████████╗███████╗
# ██║████╗ ████║██╔══██╗██╔════╝ ██╔════╝    ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝
# ██║██╔████╔██║███████║██║  ███╗█████╗      ██║  ██║█████╗  ██║     █████╗     ██║   █████╗  
# ██║██║╚██╔╝██║██╔══██║██║   ██║██╔══╝      ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝  
# ██║██║ ╚═╝ ██║██║  ██║╚██████╔╝███████╗    ██████╔╝███████╗███████╗███████╗   ██║   ███████╗
# ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝ ╚═════╝ ╚══════╝    ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝
##################################################################################################################
   public function deleteImage($id)
   {
      // Find the user
      $post = Post::find($id);

      // Check if user has required permission
      abort_unless(Gate::allows('post-delete'), 403);

         // Delete the image from the system
         File::delete('_posts/' . $post->image);
         
      // Update database
         $post->image = NULL;
      $post->save();
      
      // Set flash data with success message
      Session::flash ('success', 'The post\'s image was successfully removed!');

      // Send the user back to the Show page
      return redirect()->route('admin.posts.edit', compact('post'));
   }


##################################################################################################################
# ██╗███╗   ███╗ █████╗  ██████╗ ███████╗    ██╗   ██╗██╗███████╗██╗    ██╗
# ██║████╗ ████║██╔══██╗██╔════╝ ██╔════╝    ██║   ██║██║██╔════╝██║    ██║
# ██║██╔████╔██║███████║██║  ███╗█████╗      ██║   ██║██║█████╗  ██║ █╗ ██║
# ██║██║╚██╔╝██║██╔══██║██║   ██║██╔══╝      ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║
# ██║██║ ╚═╝ ██║██║  ██║╚██████╔╝███████╗     ╚████╔╝ ██║███████╗╚███╔███╔╝
# ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝ ╚═════╝ ╚══════╝      ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ 
##################################################################################################################
   public function viewImage($id)
   {
      $post = Post::find($id);

      return view('admin.posts.viewImage')->withPost($post);
   }


##################################################################################################################
# ███    ███  █████  ███████ ███████     ██████  ███████ ███████ ████████ ██████   ██████  ██    ██ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██         ██    ██   ██ ██    ██  ██  ██  
# ██ ████ ██ ███████ ███████ ███████     ██   ██ █████   ███████    ██    ██████  ██    ██   ████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██           ██    ██    ██   ██ ██    ██    ██    
# ██      ██ ██   ██ ███████ ███████     ██████  ███████ ███████    ██    ██   ██  ██████     ██    
##################################################################################################################
   public function massDestroy(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-delete'), 403);

      $posts = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($posts as $post) {
            $post = Post::findOrFail($post);
            $post->delete();
         }

         $notification = array(
            'message' => 'The selected posts have been deleted successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████╗ ██████╗ ██╗███╗   ██╗████████╗
# ██╔══██╗██╔══██╗██║████╗  ██║╚══██╔══╝
# ██████╔╝██████╔╝██║██╔██╗ ██║   ██║   
# ██╔═══╝ ██╔══██╗██║██║╚██╗██║   ██║   
# ██║     ██║  ██║██║██║ ╚████║   ██║   
# ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝   ╚═╝   
##################################################################################################################
   public function printPost($id)
   {
      $post = Post::find($id);

      return view('admin.posts.print')->withPost($post);
   }


##################################################################################################################
# ██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗
# ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║
# ██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║
# ██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║
# ██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║
# ╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝
##################################################################################################################
   public function publish($id)
   {
      $post = Post::find($id);
      
      // Check if user has required permission
      abort_unless((Gate::allows('post-edit') || ($post->user_id == Auth::id())), 403);

         $post->published_at = Carbon::now();
         if($post->deleted_at != Null) {
            $post->deleted_at = Null;
         }
      $post->save();

      Session::flash ('success','The post was successfully published.');
      return redirect()->back();
   }


##################################################################################################################
# ██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗     █████╗ ██╗     ██╗     
# ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║    ██╔══██╗██║     ██║     
# ██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║    ███████║██║     ██║     
# ██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║    ██╔══██║██║     ██║     
# ██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║    ██║  ██║███████╗███████╗
# ╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function massPublish(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-manage'), 403);

      $posts = explode(',', $request->input('mass_publish_pass_checkedvalue'));

      if(!$request->input('mass_publish_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be published.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($posts as $post) {
            $post = Post::withTrashed()->find($post);
               $post->published_at = Carbon::now();
               $post->deleted_at = Null;
            $post->save();
         }

         $notification = [
            'message' => 'The selected posts have been published successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);

   }


##################################################################################################################
# ██████╗ ███████╗███████╗███████╗████████╗    ██╗   ██╗██╗███████╗██╗    ██╗███████╗
# ██╔══██╗██╔════╝██╔════╝██╔════╝╚══██╔══╝    ██║   ██║██║██╔════╝██║    ██║██╔════╝
# ██████╔╝█████╗  ███████╗█████╗     ██║       ██║   ██║██║█████╗  ██║ █╗ ██║███████╗
# ██╔══██╗██╔══╝  ╚════██║██╔══╝     ██║       ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║╚════██║
# ██║  ██║███████╗███████║███████╗   ██║        ╚████╔╝ ██║███████╗╚███╔███╔╝███████║
# ╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝   ╚═╝         ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ ╚══════╝
// RESET VIEWS COUNT
##################################################################################################################
   public function resetViews($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-manage'), 403);

      $post = Post::find($id);
         $post->views = 0;
      $post->save();

      $notification = [
         'message' => 'The post\'s views count was reset to 0.', 
         'alert-type' => 'success'
      ];
      return redirect()->back()->with($notification);
   }


##################################################################################################################
// REST VIEW COUNTS
##################################################################################################################
   public function massResetViews(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-manage'), 403);

      $posts = explode(',', $request->input('mass_resetViews_pass_checkedvalue'));

      if(!$request->input('mass_resetViews_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($posts as $post_id) {
            $post = Post::findOrFail($post_id);
               $post->views = 0;
            $post->save();
         }

         $notification = [
            'message' => 'The views counts for the selected posts have been reset successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████╗ ███████╗███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ██████╔╝█████╗  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ██╔══██╗██╔══╝  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ██║  ██║███████╗███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚═╝  ╚═╝╚══════╝╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// RESTORE TRASHED FILE
##################################################################################################################
   public function restore($id)
   {
      $post = Post::withTrashed()->findOrFail($id);

      // Check if user has required permission
      abort_unless((Gate::allows('post-edit') || ($post->user_id == Auth::id())), 403);

      $post->restore();

      $notification = [
         'message' => 'The post was successfully restored.', 
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.posts.trashed')->with($notification);
   }


##################################################################################################################
# ██████╗ ███████╗███████╗████████╗ ██████╗ ██████╗ ███████╗     █████╗ ██╗     ██╗     
# ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝    ██╔══██╗██║     ██║     
# ██████╔╝█████╗  ███████╗   ██║   ██║   ██║██████╔╝█████╗      ███████║██║     ██║     
# ██╔══██╗██╔══╝  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝      ██╔══██║██║     ██║     
# ██║  ██║███████╗███████║   ██║   ╚██████╔╝██║  ██║███████╗    ██║  ██║███████╗███████╗
# ╚═╝  ╚═╝╚══════╝╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝    ╚═╝  ╚═╝╚══════╝╚══════╝
// RESTORE ALL TRASHED FILE
##################################################################################################################
   public function massRestore(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-manage'), 403);

      $posts = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($posts as $post_id) {
            $post = Post::onlyTrashed()->findOrFail($post_id);
            $post->restore();
         }

         $notification = [
            'message' => 'The selected posts have been restored successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ████████╗██████╗  █████╗ ███████╗██╗  ██╗
# ╚══██╔══╝██╔══██╗██╔══██╗██╔════╝██║  ██║
#    ██║   ██████╔╝███████║███████╗███████║
#    ██║   ██╔══██╗██╔══██║╚════██║██╔══██║
#    ██║   ██║  ██║██║  ██║███████║██║  ██║
#    ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
##################################################################################################################
   // public function trash($id)
   // {
   //    $post = Post::findOrFail($id);

   //    // Check if user has required permission


   //    return view('admin.posts.trash', compact('post'));
   // }


##################################################################################################################
# ████████╗██████╗  █████╗ ███████╗██╗  ██╗     █████╗ ██╗     ██╗     
# ╚══██╔══╝██╔══██╗██╔══██╗██╔════╝██║  ██║    ██╔══██╗██║     ██║     
#    ██║   ██████╔╝███████║███████╗███████║    ███████║██║     ██║     
#    ██║   ██╔══██╗██╔══██║╚════██║██╔══██║    ██╔══██║██║     ██║     
#    ██║   ██║  ██║██║  ██║███████║██║  ██║    ██║  ██║███████╗███████╗
#    ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝╚══════╝╚══════╝
// Remove the specified resource from storage
// Used in the index page to soft delete multiple records
##################################################################################################################
   // public function trashAll(Request $request)
   // {
   //    // Check if user has required permission


   //    $this->validate($request, [
   //       'checked' => 'required',
   //    ]);

   //    $checked = $request->input('checked');

   //    Post::destroy($checked);

   //    Session::flash('success','The posts were trashed successfully.');
   //    return redirect(Session::get('fromPage'));
   // }


##################################################################################################################
# ████████╗██████╗  █████╗ ███████╗██╗  ██╗    ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
# ╚══██╔══╝██╔══██╗██╔══██╗██╔════╝██║  ██║    ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
#    ██║   ██████╔╝███████║███████╗███████║    ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
#    ██║   ██╔══██╗██╔══██║╚════██║██╔══██║    ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
#    ██║   ██║  ██║██║  ██║███████║██║  ██║    ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
#    ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝    ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
// Remove the specified resource from storage
// Used in the index page and trashAll action to soft delete multiple records
##################################################################################################################
   // public function trashDestroy($id, $page=null)
   // {
   //    // Check if user has required permission

   //    $post = Post::find($id);
   //       $post->published_at = null;
   //    $post->save();

   //    $post->delete();

   //    Session::flash('success', 'The post was successfully trashed!');
   //    return redirect(Session::get('fromPage'));
   // }


##################################################################################################################
# ██╗   ██╗███╗   ██╗██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗
# ██║   ██║████╗  ██║██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║
# ██║   ██║██╔██╗ ██║██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║
# ██║   ██║██║╚██╗██║██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║
# ╚██████╔╝██║ ╚████║██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║
#  ╚═════╝ ╚═╝  ╚═══╝╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝
##################################################################################################################
   public function unpublish($id)
   {
      $post = Post::find($id);

      // Check if user has required permission
      abort_unless((Gate::allows('post-edit') || ($post->user_id == Auth::id())), 403);

      // Set the variable so we can use a button in other pages to come back to this page
      // Session::put('pageName', 'unpublish');

       $post->published_at = NULL;
     $post->save();

      $notification = [
         'message' => 'The post was successfully unpublished.', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██╗   ██╗███╗   ██╗██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗     █████╗ ██╗     ██╗     
# ██║   ██║████╗  ██║██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║    ██╔══██╗██║     ██║     
# ██║   ██║██╔██╗ ██║██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║    ███████║██║     ██║     
# ██║   ██║██║╚██╗██║██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║    ██╔══██║██║     ██║     
# ╚██████╔╝██║ ╚████║██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║    ██║  ██║███████╗███████╗
#  ╚═════╝ ╚═╝  ╚═══╝╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function massUnpublish(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('post-edit'), 403);

      $posts = explode(',', $request->input('mass_unpublish_pass_checkedvalue'));

      if(!$request->input('mass_unpublish_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be unpublished.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($posts as $post) {
            $post = Post::findOrFail($post);
               $post->published_at = Null;
            $post->save();
            DB::table('favorites')->where('favoriteable_id', '=', $post->id)->delete();
         }

         $notification = [
            'message' => 'The selected posts have been unpublished successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


}