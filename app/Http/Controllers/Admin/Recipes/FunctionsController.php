<?php

namespace App\Http\Controllers\Admin\Recipes;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use DB;
use Excel;
use File;
use Gate;
use Image;
use JavaScript;
use Log;
use PDF;
use Purifier;
use Route;
use Session;
use Storage;
use Table;
use URL;

class FunctionsController extends RecipesController
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
      $this->middleware('auth');
   }


##################################################################################################################
#  ██████╗ ███████╗██╗     ███████╗████████╗███████╗
#  ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝
#  ██║  ██║█████╗  ██║     █████╗     ██║   █████╗  
#  ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝  
#  ██████╔╝███████╗███████╗███████╗   ██║   ███████╗
#  ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝
# Mass Delete selected rows - all selected records
##################################################################################################################
   public function delete($id)
   {
      // Check if user has required permission
      abort_unless((Gate::allows('recipe-delete') || ($recipe->user_id == Auth::id())), 403);

      $recipe = Recipe::onlyTrashed()->findOrFail($id);

      // delete the recipe
      if($recipe->forceDelete())
      {

         if($recipe->image) {
            $image = public_path().'/_recipes/'.$recipe->image;
            unlink($image);
         }

         $notification = array(
            'message' => 'The recipe was deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the recipe.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██████╗ ███████╗██╗     ███████╗████████╗███████╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝
#  ██╔████╔██║███████║███████╗███████╗    ██║  ██║█████╗  ██║     █████╗     ██║   █████╗  
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝  
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██████╔╝███████╗███████╗███████╗   ██║   ███████╗
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝
# Mass Delete selected rows - all selected records
##################################################################################################################
   public function massDelete(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-delete'), 403);

      $recipes = explode(',', $request->input('mass_delete_pass_checkedvalue'));

      if(!$request->input('mass_delete_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($recipes as $recipe_id) {
            $recipe = Recipe::onlyTrashed()->findOrFail($recipe_id);
            $recipe->forceDelete();
         }

         $notification = array(
            'message' => 'The selected recipes have been permanently deleted!',
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ██████╗ ██╗   ██╗██████╗ ██╗     ██╗ ██████╗ █████╗ ████████╗███████╗
#  ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██╔══██╗╚══██╔══╝██╔════╝
#  ██║  ██║██║   ██║██████╔╝██║     ██║██║     ███████║   ██║   █████╗  
#  ██║  ██║██║   ██║██╔═══╝ ██║     ██║██║     ██╔══██║   ██║   ██╔══╝  
#  ██████╔╝╚██████╔╝██║     ███████╗██║╚██████╗██║  ██║   ██║   ███████╗
#  ╚═════╝  ╚═════╝ ╚═╝     ╚══════╝╚═╝ ╚═════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
# Duplicate the specified resource in storage.
##################################################################################################################
   public function duplicate($id)
   {
      $recipe = Recipe::find($id);

      // Check if user has required permission
      abort_unless(Gate::allows('recipe-manage'), 403);

      
      $newRecipe = $recipe->replicate();
      $newRecipe->user_id = Auth::user()->id;
      $newRecipe->save();

      $notification = [
         'message' => 'The recipe was duplicated successfully!', 
         'alert-type' => 'success'
      ];
      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ██████╗ ██████╗ ██╗███╗   ██╗████████╗
#  ██╔══██╗██╔══██╗██║████╗  ██║╚══██╔══╝
#  ██████╔╝██████╔╝██║██╔██╗ ██║   ██║   
#  ██╔═══╝ ██╔══██╗██║██║╚██╗██║   ██║   
#  ██║     ██║  ██║██║██║ ╚████║   ██║   
#  ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝   ╚═╝  
##################################################################################################################
   public function print($id)
   {
      // Check if user has required permission


      $recipe = Recipe::findorFail($id);

      return view('UI.recipes.print', compact('recipe'));
   }


##################################################################################################################
#  ██████╗ ██████╗ ██╗███╗   ██╗████████╗     █████╗ ██╗     ██╗     
#  ██╔══██╗██╔══██╗██║████╗  ██║╚══██╔══╝    ██╔══██╗██║     ██║     
#  ██████╔╝██████╔╝██║██╔██╗ ██║   ██║       ███████║██║     ██║     
#  ██╔═══╝ ██╔══██╗██║██║╚██╗██║   ██║       ██╔══██║██║     ██║     
#  ██║     ██║  ██║██║██║ ╚████║   ██║       ██║  ██║███████╗███████╗
#  ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝   ╚═╝       ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function printAll($category)
   {
      // Check if user has required permission


      if($category == "all"){
         $recipes = Recipe::orderBy('title', 'asc')->get();
      } else {
         $cCat = Category::where('name', $category)->pluck('id');
         $sCats = Category::where('parent_id', $cCat)->pluck('id');

         if($sCats->count() <= 0){
            $recipes = Recipe::where('category_id', $cCat)->orderBy('title', 'asc')->get();
         } else {
            $recipes = Recipe::whereIn('category_id', $sCats)->orderBy('title', 'asc')->get();
         }
      }

      return view('UI.recipes.printAll', compact('recipes'));
   }


##################################################################################################################
#  ██████╗ ██████╗ ██╗███╗   ██╗████████╗    ██████╗ ██████╗ ███████╗
#  ██╔══██╗██╔══██╗██║████╗  ██║╚══██╔══╝    ██╔══██╗██╔══██╗██╔════╝
#  ██████╔╝██████╔╝██║██╔██╗ ██║   ██║       ██████╔╝██║  ██║█████╗  
#  ██╔═══╝ ██╔══██╗██║██║╚██╗██║   ██║       ██╔═══╝ ██║  ██║██╔══╝  
#  ██║     ██║  ██║██║██║ ╚████║   ██║       ██║     ██████╔╝██║     
#  ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝   ╚═╝       ╚═╝     ╚═════╝ ╚═╝     
##################################################################################################################
   public function printPDF($id)
   {
      // Check if user has required permission

      
      // retreive recipe from db
      $recipe = Recipe::findOrFail($id);

      // share data to view
      view()->share('recipe', $recipe);
      $pdf = PDF::loadView('UI.recipes.printPDF', $recipe);
      // set the file name
      $filename = $recipe->title . ".pdf";

      // download PDF file with download method
      return $pdf->download($filename);
   }


##################################################################################################################
# ██████╗ ██████╗ ██╗██╗   ██╗ █████╗ ████████╗██╗███████╗███████╗
# ██╔══██╗██╔══██╗██║██║   ██║██╔══██╗╚══██╔══╝██║╚══███╔╝██╔════╝
# ██████╔╝██████╔╝██║██║   ██║███████║   ██║   ██║  ███╔╝ █████╗  
# ██╔═══╝ ██╔══██╗██║╚██╗ ██╔╝██╔══██║   ██║   ██║ ███╔╝  ██╔══╝  
# ██║     ██║  ██║██║ ╚████╔╝ ██║  ██║   ██║   ██║███████╗███████╗
# ╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function privatize($id)
   {
      $recipe = Recipe::find($id);
      
      // Check if user has required permission
      abort_unless((Gate::allows('recipe-edit') || ($recipe->user_id == Auth::id())), 403);

      $recipe->personal = 1;
      $recipe->save();

      // Delete this recipe's favorites
      DB::table('favorites')->where('favoriteable_id', '=', $id)->delete();

      $notification = [
         'message' => 'The recipe was successfully made private.', 
         'alert-type' => 'success'
      ];
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████╗ ██╗   ██╗██████╗ ██╗     ██╗ ██████╗██╗███████╗███████╗
# ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║╚══███╔╝██╔════╝
# ██████╔╝██║   ██║██████╔╝██║     ██║██║     ██║  ███╔╝ █████╗  
# ██╔═══╝ ██║   ██║██╔══██╗██║     ██║██║     ██║ ███╔╝  ██╔══╝  
# ██║     ╚██████╔╝██████╔╝███████╗██║╚██████╗██║███████╗███████╗
# ╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝ ╚═════╝╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function publicize($id)
   {
      $recipe = Recipe::find($id);

      // Check if user has required permission
      abort_unless((Gate::allows('recipe-edit') || ($recipe->user_id == Auth::id())), 403);

      $recipe->personal = 0;
      $recipe->save();

      $notification = [
         'message' => 'The recipe was successfully made public.', 
         'alert-type' => 'success'
      ];
      return redirect()->back()->with($notification);
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
      $recipe = Recipe::find($id);

      // Check if user has required permission
      abort_unless(Gate::allows('recipe-manage'), 403);

         $recipe->published_at = Carbon::now();
         $recipe->deleted_at = Null;
      $recipe->save();

      $notification = [
         'message' => 'The recipe was successfully published.', 
         'alert-type' => 'success'
      ];
      return redirect()->back()->with($notification);
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
      abort_unless(Gate::allows('recipe-manage'), 403);

      $recipes = explode(',', $request->input('mass_publish_pass_checkedvalue'));

      if(!$request->input('mass_publish_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be published.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($recipes as $recipe) {
            $recipe = Recipe::withTrashed()->find($recipe);
               $recipe->published_at = Carbon::now();
               $recipe->deleted_at = Null;
            $recipe->save();
         }

         $notification = [
            'message' => 'The selected recipes have been published successfully!', 
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
# RESET VIEWS COUNT
##################################################################################################################
   public function resetViews($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('recipe-manage'), 403);

      $recipe = Recipe::find($id);
         $recipe->views = 0;
      $recipe->save();

      $notification = [
         'message' => 'The recipe\'s views count was reset to 0.', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██████╗ ███████╗███████╗███████╗████████╗    ██╗   ██╗██╗███████╗██╗    ██╗███████╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██╔════╝██╔════╝██╔════╝╚══██╔══╝    ██║   ██║██║██╔════╝██║    ██║██╔════╝
#  ██╔████╔██║███████║███████╗███████╗    ██████╔╝█████╗  ███████╗█████╗     ██║       ██║   ██║██║█████╗  ██║ █╗ ██║███████╗
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██╔══██╗██╔══╝  ╚════██║██╔══╝     ██║       ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║╚════██║
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██║  ██║███████╗███████║███████╗   ██║        ╚████╔╝ ██║███████╗╚███╔███╔╝███████║
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝   ╚═╝         ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ ╚══════╝
##################################################################################################################
   public function massResetViews(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('recipe-manage'), 403);

      $recipes = explode(',', $request->input('mass_resetViews_pass_checkedvalue'));

      if(!$request->input('mass_resetViews_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($recipes as $recipe_id) {
            $recipe = Recipe::findOrFail($recipe_id);
               $recipe->views = 0;
            $recipe->save();
         }

         $notification = [
            'message' => 'The views counts for the selected recipes have been reset successfully!', 
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
      $recipe = Recipe::withTrashed()->findOrFail($id);

      // Check if user has required permission
      abort_unless((Gate::allows('recipe-edit') || ($recipe->user_id == Auth::id())), 403);

      $recipe->restore();

      $notification = [
         'message' => 'The recipe was successfully restored.', 
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.recipes.trashed')->with($notification);
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
      abort_unless(Gate::allows('recipe-manage'), 403);

      $recipes = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($recipes as $recipe_id) {
            $recipe = Recipe::onlyTrashed()->findOrFail($recipe_id);
            $recipe->restore();
         }

         $notification = [
            'message' => 'The selected recipes have been restored successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
#  ██╔████╔██║███████║███████╗███████╗    ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
##################################################################################################################
   public function massDestroy(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('recipe-delete'), 403);

      $recipes = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($recipes as $recipe) {
            $recipe = Recipe::findOrFail($recipe);
            $recipe->delete();
         }

         $notification = array(
            'message' => 'The selected recipes have been deleted successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


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
      $recipe = Recipe::find($id);

      // Check if user has required permission
      // abort_unless((Gate::allows('recipe-publish') || ($recipe->user_id == Auth::id())), 403);
      abort_unless(Gate::allows('recipe-manage'), 403);

         $recipe->published_at = NULL;
         // Delete this recipe's favorites
         DB::table('favorites')->where('favoriteable_id', '=', $recipe->id)->delete();
      $recipe->save();

      $notification = [
         'message' => 'The recipe was successfully unpublished.', 
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
      abort_unless(Gate::allows('recipe-manage'), 403);

      $recipes = explode(',', $request->input('mass_unpublish_pass_checkedvalue'));

      if(!$request->input('mass_unpublish_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be unpublished.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($recipes as $recipe) {
            $recipe = Recipe::findOrFail($recipe);
               $recipe->published_at = Null;
            $recipe->save();
            DB::table('favorites')->where('favoriteable_id', '=', $recipe->id)->delete();
         }

         $notification = [
            'message' => 'The selected recipes have been unpublished successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


}
