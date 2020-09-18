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
use Auth;
use Carbon\Carbon;
use DB;
use Excel;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
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
      $this->middleware('auth');
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

      $recipe = Recipe::onlyTrashed()->findOrFail($id);
      // dd($recipe);

      // delete the user
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


      $this->validate($request, [
         'checked' => 'required',
      ]);

      $checked = $request->input('checked');

      Recipe::whereIn('id', $checked)->forceDelete();

      $notification = [
         'message' => 'The recipes were deleted successfully.', 
         'alert-type' => 'success'
      ];
      return redirect()->route($ref)->with($notification);
   }


##################################################################################################################
# ██████╗ ██╗   ██╗██████╗ ██╗     ██╗ ██████╗ █████╗ ████████╗███████╗
# ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██╔══██╗╚══██╔══╝██╔════╝
# ██║  ██║██║   ██║██████╔╝██║     ██║██║     ███████║   ██║   █████╗  
# ██║  ██║██║   ██║██╔═══╝ ██║     ██║██║     ██╔══██║   ██║   ██╔══╝  
# ██████╔╝╚██████╔╝██║     ███████╗██║╚██████╗██║  ██║   ██║   ███████╗
# ╚═════╝  ╚═════╝ ╚═╝     ╚══════╝╚═╝ ╚═════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
// DUPLICATE :: Duplicate the specified resource in storage.
##################################################################################################################
   public function duplicate($id)
   {
      $recipe = Recipe::find($id);

      // Check if user has required permission

      
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
# ███████╗ █████╗ ██╗   ██╗ ██████╗ ██████╗ ██╗████████╗███████╗     █████╗ ██████╗ ██████╗ 
# ██╔════╝██╔══██╗██║   ██║██╔═══██╗██╔══██╗██║╚══██╔══╝██╔════╝    ██╔══██╗██╔══██╗██╔══██╗
# █████╗  ███████║██║   ██║██║   ██║██████╔╝██║   ██║   █████╗      ███████║██║  ██║██║  ██║
# ██╔══╝  ██╔══██║╚██╗ ██╔╝██║   ██║██╔══██╗██║   ██║   ██╔══╝      ██╔══██║██║  ██║██║  ██║
# ██║     ██║  ██║ ╚████╔╝ ╚██████╔╝██║  ██║██║   ██║   ███████╗    ██║  ██║██████╔╝██████╔╝
# ╚═╝     ╚═╝  ╚═╝  ╚═══╝   ╚═════╝ ╚═╝  ╚═╝╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚═════╝ ╚═════╝ 
##################################################################################################################
   // public function favoriteAdd($id)
   // {
   //    // Check if user has required permission
   //    // if($this->enablePermissions) {
   //    //    if(!checkPerm('recipe_favorite')) { abort(401, 'Unauthorized Access'); }
   //    // }

   //    $recipe = Recipe::find($id);
   //    $recipe->addFavorite();

   //    Session::flash ('success','The recipe was successfully added to your Favorites list!');
   //    return redirect()->back();
   // }


##################################################################################################################
# ███████╗ █████╗ ██╗   ██╗ ██████╗ ██████╗ ██╗████████╗███████╗    ██████╗ ███████╗███╗   ███╗ ██████╗ ██╗   ██╗███████╗
# ██╔════╝██╔══██╗██║   ██║██╔═══██╗██╔══██╗██║╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝████╗ ████║██╔═══██╗██║   ██║██╔════╝
# █████╗  ███████║██║   ██║██║   ██║██████╔╝██║   ██║   █████╗      ██████╔╝█████╗  ██╔████╔██║██║   ██║██║   ██║█████╗  
# ██╔══╝  ██╔══██║╚██╗ ██╔╝██║   ██║██╔══██╗██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║╚██╔╝██║██║   ██║╚██╗ ██╔╝██╔══╝  
# ██║     ██║  ██║ ╚████╔╝ ╚██████╔╝██║  ██║██║   ██║   ███████╗    ██║  ██║███████╗██║ ╚═╝ ██║╚██████╔╝ ╚████╔╝ ███████╗
# ╚═╝     ╚═╝  ╚═╝  ╚═══╝   ╚═════╝ ╚═╝  ╚═╝╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝╚═╝     ╚═╝ ╚═════╝   ╚═══╝  ╚══════╝
##################################################################################################################
   // public function favoriteRemove($id)
   // {
   //    // Check if user has required permission
   //    // if($this->enablePermissions) {
   //    //    if(!checkPerm('recipe_favorite')) { abort(401, 'Unauthorized Access'); }
   //    // }

   //    $recipe = Recipe::find($id);
   //    $recipe->removeFavorite();

   //    Session::flash ('success','The recipe was successfully removed to your Favorites list!');
   //    return redirect()->back();
   // }


##################################################################################################################
# ██████╗ ██████╗ ██╗███╗   ██╗████████╗
# ██╔══██╗██╔══██╗██║████╗  ██║╚══██╔══╝
# ██████╔╝██████╔╝██║██╔██╗ ██║   ██║   
# ██╔═══╝ ██╔══██╗██║██║╚██╗██║   ██║   
# ██║     ██║  ██║██║██║ ╚████║   ██║   
# ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝   ╚═╝   
##################################################################################################################
   // public function print($id)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('recipe_print')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $recipe = Recipe::findorFail($id);

   //    return view('recipes.print', compact('recipe'));
   // }


##################################################################################################################
# ██████╗ ██████╗ ██╗███╗   ██╗████████╗     █████╗ ██╗     ██╗     
# ██╔══██╗██╔══██╗██║████╗  ██║╚══██╔══╝    ██╔══██╗██║     ██║     
# ██████╔╝██████╔╝██║██╔██╗ ██║   ██║       ███████║██║     ██║     
# ██╔═══╝ ██╔══██╗██║██║╚██╗██║   ██║       ██╔══██║██║     ██║     
# ██║     ██║  ██║██║██║ ╚████║   ██║       ██║  ██║███████╗███████╗
# ╚═╝     ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝   ╚═╝       ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   // public function printAll($category)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('recipe_print')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    if($category == "all"){
   //       $recipes = Recipe::orderBy('title', 'asc')->get();
   //    } else {
   //       $cCat = Category::where('name', $category)->pluck('id');
   //       $sCats = Category::where('parent_id', $cCat)->pluck('id');

   //       if($sCats->count() <= 0){
   //          $recipes = Recipe::where('category_id', $cCat)->orderBy('title', 'asc')->get();
   //       } else {
   //          $recipes = Recipe::whereIn('category_id', $sCats)->orderBy('title', 'asc')->get();
   //       }
   //    }

   //    return view('recipes.printAll', compact('recipes'));
   // }


##################################################################################################################
##################################################################################################################
# PRINT PDF
##################################################################################################################
##################################################################################################################
//    public function printPDF($id)
//     {
//       // // This  $data array will be passed to our PDF blade
//       // // $data = [
//       // //    'title' => 'First PDF for Medium',
//       // //    'heading' => 'Hello from 99Points.info',
//       // //    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'        
//       // // ];
//       // $recipe = Recipe::findOrFail($id);
//       // // dd($recipe);

//       // // Increase the view count since this is viewed from the frontend
//       // // DB::table('recipes')->where('id','=',$recipe->id)->increment('views',1);

//       // // $categories = Category::where('parent_id',1)->get();

//       // // return view('recipes.show', compact('recipe','categories'));
        
//       // // $pdf = PDF::loadView('recipes.printPDF', $data);
//       // $pdf = PDF::loadView('recipes.printPDF', $recipe);
//       // // dd($pdf);
//       // return $pdf->download('medium.pdf');



// $recipe = Recipe::findOrFail($id);
// // dd($recipe);
// $recipedata = ['recipe'=>$recipe];
// $pdf = PDF::loadView('recipes.print', array('recipedata'=>$recipedata));
// $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
// $filename = "generatepdf.pdf";
// // Save file to the directory
// // $pdf->save('generatepdf/'.$filename);
// //Download Pdf
// return $pdf->download('generatepdf.pdf');
// // Or return to view pdf
// //return view('pdfview');

//     }



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
      abort_unless((Gate::allows('recipe-edit') || ($recipe->user_id == Auth::id())), 403);


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
      // abort_unless(Gate::allows('permission-manage'), 403);

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
// RESET VIEWS COUNT
##################################################################################################################
   public function resetViews($id)
   {
      // Check if user has required permission


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
      // abort_unless(Gate::allows('recipe-manage'), 403);

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
# ███████╗████████╗ ██████╗ ██████╗ ███████╗     ██████╗ ██████╗ ███╗   ███╗███╗   ███╗███████╗███╗   ██╗████████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝    ██╔════╝██╔═══██╗████╗ ████║████╗ ████║██╔════╝████╗  ██║╚══██╔══╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗      ██║     ██║   ██║██╔████╔██║██╔████╔██║█████╗  ██╔██╗ ██║   ██║   
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝      ██║     ██║   ██║██║╚██╔╝██║██║╚██╔╝██║██╔══╝  ██║╚██╗██║   ██║   
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗    ╚██████╗╚██████╔╝██║ ╚═╝ ██║██║ ╚═╝ ██║███████╗██║ ╚████║   ██║   
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝     ╚═════╝ ╚═════╝ ╚═╝     ╚═╝╚═╝     ╚═╝╚══════╝╚═╝  ╚═══╝   ╚═╝   
##################################################################################################################
   // public function storeComment(CreateCommentRequest $request, $id)
   // {
   //    // Check if user has required permission
   //    if($this->enablePermissions) {
   //       if(!checkPerm('comment_add')) { abort(401, 'Unauthorized Access'); }
   //    }

   //    $recipe = Recipe::find($id);
   //       $comment = new Comment();
   //       $comment->user_id = Auth::user()->id;
   //       $comment->comment = $request->comment;
   //    $recipe->comments()->save($comment);

   //    Session::flash('success','Comment added succesfully.');
   //    // return redirect()->route('recipes.show', $recipe->id);
   //    return redirect()->back();
   // }


// ##################################################################################################################
// # ██████  ███████ ███████ ████████ ██████   ██████  ██    ██ 
// # ██   ██ ██      ██         ██    ██   ██ ██    ██  ██  ██  
// # ██   ██ █████   ███████    ██    ██████  ██    ██   ████   
// # ██   ██ ██           ██    ██    ██   ██ ██    ██    ██    
// # ██████  ███████ ███████    ██    ██   ██  ██████     ██    
// // Remove the specified resource from storage
// // Used in the index page and trashAll action to soft delete multiple records
// ##################################################################################################################
//    public function destroy($id)
//    {
//       // Check if user has required permission


//       $recipe = Recipe::findOrFail($id);

//       $notification = [
//          'message' => 'The recipe has been trashed successfully!', 
//          'alert-type' => 'success'
//       ];

//       return view('admin.recipes.trash', compact('recipe'))->with($notification);
//    }


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

   //    Recipe::destroy($checked);

   //    $notification = [
   //       'message' => 'The recipes were trashed successfully.', 
   //       'alert-type' => 'success'
   //    ];
   //    return redirect()->back()->with($notification);
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


   //    $recipe = Recipe::find($id);

   //    // Delete this recipe's favorites
   //    DB::table('favorites')->where('favoriteable_id', '=', $id)->delete();
   //    // Delete the recipe
   //    $recipe->delete();

   //    $notification = [
   //       'message' => 'The recipe was successfully trashed!', 
   //       'alert-type' => 'success'
   //    ];

   //    return redirect()->back()->with($notification);
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
      $recipe = Recipe::find($id);

      // Check if user has required permission
      abort_unless((Gate::allows('recipe-publish') || ($recipe->user_id == Auth::id())), 403);

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
      // abort_unless(Gate::allows('permission-manage'), 403);

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
