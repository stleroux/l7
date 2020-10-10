<?php

namespace App\Http\Controllers\Admin\Movies;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller; // Required for validation
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\Movie;
use App\Models\Comment;
use Carbon\Carbon;
use Auth;
use DB;
use Excel;
use Gate;
use File;
use Log;
use Route;
use Session;
use URL;

class FunctionsController extends MoviesController
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
      // only allow authenticated users to access these pages
      $this->middleware('auth');
   }


##################################################################################################################
#  █████╗ ██████╗ ██████╗     ███████╗ █████╗ ██╗   ██╗ ██████╗ ██████╗ ██╗████████╗███████╗
# ██╔══██╗██╔══██╗██╔══██╗    ██╔════╝██╔══██╗██║   ██║██╔═══██╗██╔══██╗██║╚══██╔══╝██╔════╝
# ███████║██║  ██║██║  ██║    █████╗  ███████║██║   ██║██║   ██║██████╔╝██║   ██║   █████╗  
# ██╔══██║██║  ██║██║  ██║    ██╔══╝  ██╔══██║╚██╗ ██╔╝██║   ██║██╔══██╗██║   ██║   ██╔══╝  
# ██║  ██║██████╔╝██████╔╝    ██║     ██║  ██║ ╚████╔╝ ╚██████╔╝██║  ██║██║   ██║   ███████╗
# ╚═╝  ╚═╝╚═════╝ ╚═════╝     ╚═╝     ╚═╝  ╚═╝  ╚═══╝   ╚═════╝ ╚═╝  ╚═╝╚═╝   ╚═╝   ╚══════╝
##################################################################################################################
   // public function addfavorite($id)
   // {
   //    // Check if user has required permission


   //    $user = Auth::user()->id;
   //    $movie = Movie::find($id);

   //    $movie->favorites()->sync([$user], false);

   //    Session::flash ('success','The movie was successfully added to your favorites list');
   //    return redirect()->back();
   // }


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
      // abort_unless(Gate::allows('permission-delete'), 403);

      $movies = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($movies as $movie) {
            $movie = Movie::findOrFail($movie);
            $movie->delete();
         }

         $notification = array(
            'message' => 'The selected movies have been deleted successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
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
      // Check if user has required permission
      // abort_unless(Gate::allows('recipe-delete'), 403);

      $movie = Movie::onlyTrashed()->findOrFail($id);
      // dd($movie);

      // delete the user
      if($movie->forceDelete())
      {

         if($movie->image) {
            $image = public_path().'/_movies/'.$movie->image;
            unlink($image);
         }

         $notification = array(
            'message' => 'The movie was deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the movie.',
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
      abort_unless(Gate::allows('movie-delete'), 403);

      $movies = explode(',', $request->input('mass_delete_pass_checkedvalue'));

      if(!$request->input('mass_delete_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($movies as $movie_id) {
            $movie = Movie::onlyTrashed()->findOrFail($movie_id);
            $movie->forceDelete();
         }

         $notification = array(
            'message' => 'The selected movies have been permanently deleted!',
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }

##################################################################################################################
// REST VIEW COUNTS
##################################################################################################################
   public function massResetViews(Request $request)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('recipe-manage'), 403);

      $movies = explode(',', $request->input('mass_resetViews_pass_checkedvalue'));

      if(!$request->input('mass_resetViews_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($movies as $movie_id) {
            $movie = Massovie::findOrFail($movie_id);
               $movie->views = 0;
            $movie->save();
         }

         $notification = [
            'message' => 'The views counts for the selected movies have been reset successfully!', 
            'alert-type' => 'success'
         ];

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
   // public function deleteAll(Request $request)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_delete')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $this->validate($request, [
   //       'checked' => 'required',
   //    ]);

   //    $checked = $request->input('checked');

   //    Movie::whereIn('id', $checked)->forceDelete();

   //    Session::flash('success','The selected movies were deleted successfully');
   //    return redirect()->back();
   // }


// ##################################################################################################################
// # ██████╗ ███████╗██╗     ███████╗████████╗███████╗    ████████╗██████╗  █████╗ ███████╗██╗  ██╗███████╗██████╗ 
// # ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝    ╚══██╔══╝██╔══██╗██╔══██╗██╔════╝██║  ██║██╔════╝██╔══██╗
// # ██║  ██║█████╗  ██║     █████╗     ██║   █████╗         ██║   ██████╔╝███████║███████╗███████║█████╗  ██║  ██║
// # ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝         ██║   ██╔══██╗██╔══██║╚════██║██╔══██║██╔══╝  ██║  ██║
// # ██████╔╝███████╗███████╗███████╗   ██║   ███████╗       ██║   ██║  ██║██║  ██║███████║██║  ██║███████╗██████╔╝
// # ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝       ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝╚══════╝╚═════╝ 
// // Remove the specified resource from storage - individual record
// ##################################################################################################################
//    public static function deleteTrashed($id)
//    {
//       // Check if user has required permission
//       if($this->enablePermissions) {
//          if(!checkPerm('movie_delete')) { abort(401, 'Unauthorized Access'); }
//       }

//       $movie = Movie::withTrashed()->findorFail($id);

//       $movie->forceDelete();

//       Session::flash ('success','The movie was deleted successfully');
//       return redirect()->route('admin.movies.trashed');
//    }


##################################################################################################################
# ██████╗ ██╗   ██╗██████╗ ██╗     ██╗ ██████╗ █████╗ ████████╗███████╗
# ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██╔══██╗╚══██╔══╝██╔════╝
# ██║  ██║██║   ██║██████╔╝██║     ██║██║     ███████║   ██║   █████╗  
# ██║  ██║██║   ██║██╔═══╝ ██║     ██║██║     ██╔══██║   ██║   ██╔══╝  
# ██████╔╝╚██████╔╝██║     ███████╗██║╚██████╗██║  ██║   ██║   ███████╗
# ╚═════╝  ╚═════╝ ╚═╝     ╚══════╝╚═╝ ╚═════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
// DUPLICATE :: Duplicate the specified resource in storage.
##################################################################################################################
   // public function duplicate($id)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_edit')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    // Pass along the ROUTE value of the previous page
   //    $ref = app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName();

   //    $movie = Movie::find($id);
   //      $newMovie = $movie->replicate();
   //      $newMovie->user_id = Auth::user()->id;
   //    $newMovie->save();

   //    Session::flash ('success','The movie was duplicated successfully');
   //    return redirect()->back();
   // }


##################################################################################################################
# IMPORT
##################################################################################################################
   // public function import() {

   //    foreach (File::allFiles(storage_path('json')) as $filename) {

   //       $data = file_get_contents($filename);

   //       $array = json_decode($data, true);

   //       foreach($array as $row)
   //       {
   //          $movie = new Movie;
   //             $movie->col_no = $row["CollectionNumber"];
   //             $movie->title = $row["Title"];
   //             if($row["OriginalTitle"]) { $movie->original_title = $row["OriginalTitle"]; }
   //             $movie->views = 0;
   //             if($row["UPC"]) { $movie->upc = $row["UPC"]; }
   //             if($row["RunningTime"]) { $movie->running_time = $row["RunningTime"]; }
   //             if($row["Rating"]) { $movie->rating = $row["Rating"]; }
   //             // if($row["Genres"]) { $movie->genres = $row["Genres"].["Genre"]; }
   //             // if($row["Studios"]) { $movie->studios  = $row["Studios"].["Studio"]; }
   //             if($row["Overview"]) { $movie->overview = $row["Overview"]; }
   //             if($row["ProductionYear"]) { $movie->production_year  = $row["ProductionYear"]; }
   //             $movie->created_at = Str::before($row["ProfileTimestamp"], 'T');
   //             $movie->updated_at = Str::before($row["ProfileTimestamp"], 'T');
   //             $movie->published_at = Str::before($row["ProfileTimestamp"], 'T');
   //             $movie->deleted_at = null;
   //          $movie->save();
   //       }

   //       // echo $filename . " processed successfully<br />";
   //    }

   //    // echo "Data should be inserted";
   //    Session::flash ('success','The movies have been added successfully');
   //    return redirect()->route('admin.movies.index');
   // }


##################################################################################################################
# ███╗   ███╗ █████╗ ██╗  ██╗███████╗    ██████╗ ██████╗ ██╗██╗   ██╗ █████╗ ████████╗███████╗
# ████╗ ████║██╔══██╗██║ ██╔╝██╔════╝    ██╔══██╗██╔══██╗██║██║   ██║██╔══██╗╚══██╔══╝██╔════╝
# ██╔████╔██║███████║█████╔╝ █████╗      ██████╔╝██████╔╝██║██║   ██║███████║   ██║   █████╗  
# ██║╚██╔╝██║██╔══██║██╔═██╗ ██╔══╝      ██╔═══╝ ██╔══██╗██║╚██╗ ██╔╝██╔══██║   ██║   ██╔══╝  
# ██║ ╚═╝ ██║██║  ██║██║  ██╗███████╗    ██║     ██║  ██║██║ ╚████╔╝ ██║  ██║   ██║   ███████╗
# ╚═╝     ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝    ╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚══════╝
##################################################################################################################
   // public function makeprivate($id)
   // {
   //    $movie = Movie::find($id);
   //       $movie->personal = 1;
   //    $movie->save();

   //    Session::flash('success','The movie was made private successfully');
   //    return redirect()->back();
   // }


##################################################################################################################
# ██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗
# ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║
# ██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║
# ██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║
# ██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║
# ╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝
##################################################################################################################
   // public function publish($id)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_edit')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $movie = Movie::withTrashed()->find($id);
   //      $movie->published_at = Carbon::now();
   //      $movie->deleted_at = Null;
   //    $movie->save();

   //    Session::flash ('success','The movie was published successfully');
   //    return redirect()->back();
   // }


##################################################################################################################
# ██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗     █████╗ ██╗     ██╗     
# ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║    ██╔══██╗██║     ██║     
# ██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║    ███████║██║     ██║     
# ██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║    ██╔══██║██║     ██║     
# ██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║    ██║  ██║███████╗███████╗
# ╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   // public function publishAll(Request $request)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_edit')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $this->validate($request, [
   //       'checked' => 'required',
   //    ]);

   //    $checked = $request->input('checked');

   //    foreach ($checked as $item) {
   //       $movie = Movie::withTrashed()->find($item);
   //          $movie->published_at = Carbon::now();
   //          $movie->deleted_at = Null;
   //       $movie->save();
   //    }

   //    Session::flash('success','The selected movies were published successfully');
   //    return redirect()->back();
   // }


##################################################################################################################
# ██████╗ ███████╗███╗   ███╗ ██████╗ ██╗   ██╗███████╗    ███████╗ █████╗ ██╗   ██╗ ██████╗ ██████╗ ██╗████████╗███████╗
# ██╔══██╗██╔════╝████╗ ████║██╔═══██╗██║   ██║██╔════╝    ██╔════╝██╔══██╗██║   ██║██╔═══██╗██╔══██╗██║╚══██╔══╝██╔════╝
# ██████╔╝█████╗  ██╔████╔██║██║   ██║██║   ██║█████╗      █████╗  ███████║██║   ██║██║   ██║██████╔╝██║   ██║   █████╗  
# ██╔══██╗██╔══╝  ██║╚██╔╝██║██║   ██║╚██╗ ██╔╝██╔══╝      ██╔══╝  ██╔══██║╚██╗ ██╔╝██║   ██║██╔══██╗██║   ██║   ██╔══╝  
# ██║  ██║███████╗██║ ╚═╝ ██║╚██████╔╝ ╚████╔╝ ███████╗    ██║     ██║  ██║ ╚████╔╝ ╚██████╔╝██║  ██║██║   ██║   ███████╗
# ╚═╝  ╚═╝╚══════╝╚═╝     ╚═╝ ╚═════╝   ╚═══╝  ╚══════╝    ╚═╝     ╚═╝  ╚═╝  ╚═══╝   ╚═════╝ ╚═╝  ╚═╝╚═╝   ╚═╝   ╚══════╝
##################################################################################################################
   // public function removefavorite($id)
   // {
   //    // Check if user has required permission
   //    // if($this->enablePermissions) {
   //    //    if(!checkPerm('')) { abort(401, 'Unauthorized Access'); }
   //    // }

   //    $user = Auth::user()->id;
   //    $movie = Movie::find($id);

   //    $movie->favorites()->detach($user);

   //    Session::flash ('success','The movie was successfully removed to your favorites list');
   //    return redirect()->back();
   // }


##################################################################################################################
# ██████╗ ███████╗███╗   ███╗ ██████╗ ██╗   ██╗███████╗    ██████╗ ██████╗ ██╗██╗   ██╗ █████╗ ████████╗███████╗
# ██╔══██╗██╔════╝████╗ ████║██╔═══██╗██║   ██║██╔════╝    ██╔══██╗██╔══██╗██║██║   ██║██╔══██╗╚══██╔══╝██╔════╝
# ██████╔╝█████╗  ██╔████╔██║██║   ██║██║   ██║█████╗      ██████╔╝██████╔╝██║██║   ██║███████║   ██║   █████╗  
# ██╔══██╗██╔══╝  ██║╚██╔╝██║██║   ██║╚██╗ ██╔╝██╔══╝      ██╔═══╝ ██╔══██╗██║╚██╗ ██╔╝██╔══██║   ██║   ██╔══╝  
# ██║  ██║███████╗██║ ╚═╝ ██║╚██████╔╝ ╚████╔╝ ███████╗    ██║     ██║  ██║██║ ╚████╔╝ ██║  ██║   ██║   ███████╗
# ╚═╝  ╚═╝╚══════╝╚═╝     ╚═╝ ╚═════╝   ╚═══╝  ╚══════╝    ╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚══════╝
##################################################################################################################
   // public function removeprivate($id)
   // {
   //    // Check if user has required permission
   //    // if($this->enablePermissions) {
   //    //    if(!checkPerm('')) { abort(401, 'Unauthorized Access'); }
   //    // }

   //    $movie = Movie::find($id);
   //       $movie->personal = 0;
   //    $movie->save();

   //    Session::flash('success','The movie was removed from private successfully');
   //    return redirect()->back();
   // }


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


      $movie = Movie::find($id);
         $movie->views = 0;
      $movie->save();

      // Session::flash('success','The movie\'s views count was reset to 0');
      $notification = [
         'message' => 'The views count for the movie has been reset successfully!', 
         'alert-type' => 'success'
      ];

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
      // Check if user has required permission


      $movie = Movie::withTrashed()->findOrFail($id);

      $movie->restore();

      // Session::flash ('success','The movie was successfully restored');
      $notification = [
         'message' => 'The movie was successfully restored!', 
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.movies.trashed')->with($notification);
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
      // abort_unless(Gate::allows('recipe-manage'), 403);

      $movies = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($movies as $movie_id) {
            $movie = Movie::onlyTrashed()->findOrFail($movie_id);
            $movie->restore();
         }

         $notification = [
            'message' => 'The selected movies have been restored successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# SEARCH
##################################################################################################################
   public function search(Request $request)
   {
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
      // dd($search);

      $query = Movie::where('title','like','%'.$search.'%');

      if ($request->has('overview')) {
         $query->orWhere('overview','like','%'.$search.'%');
      }

      if ($request->category != 0) {
         // dd($request->category);
         $query = $query->where('category',$request->category);
      }

      $movies = $query->orderBy('title','asc')->paginate(25);
      $letters = [];
      
      return view('admin.movies.index', compact('movies', 'letters'));
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
      // if($this->enablePermissions) {
      //    if(!checkPerm('')) { abort(401, 'Unauthorized Access'); }
      // }

      $movie = Movie::find($id);

      $comment = new Comment();
         $comment->user_id = Auth::user()->id;
         $comment->comment = $request->comment;
      $movie->comments()->save($comment);

      Session::flash('success', 'Comment added succesfully');
      return redirect()->route('admin.movies.show', $movie->id);
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
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_trash')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $movie = Movie::findOrFail($id);

   //    return view('admin.movies.trash', compact('movie'));
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
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_delete')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $this->validate($request, [
   //       'checked' => 'required',
   //    ]);

   //    $checked = $request->input('checked');

   //    foreach($checked as $item) {
   //       $movie = Movie::findOrFail($item);
   //       $movie->published_at = Null;
   //       $movie->save();
   //    }

   //    Movie::destroy($checked);

   //    Session::flash('success','The selected movies were trashed successfully');
   //    return redirect()->back();
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
   // public function trashDestroy($id)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_delete')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $movie = Movie::find($id);

   //    // Delete this recipe's favorites
   //    DB::table('favorites')->where('favoriteable_id', '=', $id)->delete();
   //    // Delete the recipe
   //    $movie->delete();

   //    Session::flash('success', 'The movie was successfully trashed!');
   //    return redirect(Session::get('fromPage'));
   //    // return redirect()->back();
   // }


##################################################################################################################
# ██╗   ██╗███╗   ██╗██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗
# ██║   ██║████╗  ██║██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║
# ██║   ██║██╔██╗ ██║██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║
# ██║   ██║██║╚██╗██║██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║
# ╚██████╔╝██║ ╚████║██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║
#  ╚═════╝ ╚═╝  ╚═══╝╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝
##################################################################################################################
   // public function unpublish($id)
   // {
   //    $movie = Movie::find($id);

   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_edit')) { abort(401, 'Unauthorized Access'); }
   //    }

   //       $movie->published_at = NULL;
   //       DB::table('favorites')->where('favoriteable_id', '=', $movie->id)->delete();
   //    $movie->save();

   //    Session::flash ('success','The movie was successfully unpublished and related favorites have been removed');
   //    return redirect()->back();
   // }


##################################################################################################################
# ██╗   ██╗███╗   ██╗██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗     █████╗ ██╗     ██╗     
# ██║   ██║████╗  ██║██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║    ██╔══██╗██║     ██║     
# ██║   ██║██╔██╗ ██║██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║    ███████║██║     ██║     
# ██║   ██║██║╚██╗██║██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║    ██╔══██║██║     ██║     
# ╚██████╔╝██║ ╚████║██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║    ██║  ██║███████╗███████╗
#  ╚═════╝ ╚═╝  ╚═══╝╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   // public function unpublishAll(Request $request)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('movie_edit')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $this->validate($request, [
   //       'checked' => 'required',
   //    ]);

   //    $checked = $request->input('checked');

   //    foreach ($checked as $item) {
   //       $movie = Movie::withTrashed()->find($item);
   //          $movie->published_at = Null;
   //          DB::table('favorites')->where('favoriteable_id', '=', $movie->id)->delete();
   //       $movie->save();
   //    }

   //    Session::flash('success','The selected movies were unpublished successfully and all related favorites have been removed');
   //    return redirect()->back();
   // }


}