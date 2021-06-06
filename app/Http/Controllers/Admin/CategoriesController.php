<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Models\Recipe;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use Carbon\Carbon;
use DB;
use Excel;
use File;
use Gate;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Image;
use JavaScript;
use Log;
use Purifier;
use Route;
use Session;
use Storage;
// use App\Http\Requests\CreateCategoryRequest;
// use App\Http\Requests\UpdateCategoryRequest;

class CategoriesController extends Controller
{

##################################################################################################################
#  ██████  ██████  ███    ██ ███████ ████████ ██████  ██    ██  ██████ ████████ 
# ██      ██    ██ ████   ██ ██         ██    ██   ██ ██    ██ ██         ██    
# ██      ██    ██ ██ ██  ██ ███████    ██    ██████  ██    ██ ██         ██    
# ██      ██    ██ ██  ██ ██      ██    ██    ██   ██ ██    ██ ██         ██    
#  ██████  ██████  ██   ████ ███████    ██    ██   ██  ██████   ██████    ██    
##################################################################################################################
   public function __construct()
   {
      $this->middleware('auth');
   }


##################################################################################################################
#  ██████ ██████  ███████  █████  ████████ ███████ 
# ██      ██   ██ ██      ██   ██    ██    ██      
# ██      ██████  █████   ███████    ██    █████   
# ██      ██   ██ ██      ██   ██    ██    ██      
#  ██████ ██   ██ ███████ ██   ██    ██    ███████ 
// Show the form for creating a new resource
##################################################################################################################
   // public function create()
   // {
   //    // Check if user has required permission

   //    $categories = Category::with('children')->where('parent_id','=',0)->orderBy('name')->get();

   //    return view('admin.categories.create', compact('categories'));
   // }


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
      abort_unless(Gate::allows('category-delete'), 403);

      $category = Category::onlyTrashed()->findOrFail($id);

      // delete the user
      if($category->forceDelete())
      {
         $notification = array(
            'message' => 'The category was deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the category.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████  ███████ ███████ ████████ ██████   ██████  ██    ██ 
# ██   ██ ██      ██         ██    ██   ██ ██    ██  ██  ██  
# ██   ██ █████   ███████    ██    ██████  ██    ██   ████   
# ██   ██ ██           ██    ██    ██   ██ ██    ██    ██    
# ██████  ███████ ███████    ██    ██   ██  ██████     ██  
// Remove the specified resource from storage
// Used in the index page and trashAll action to soft delete multiple records
##################################################################################################################
   public function destroy(Category $category)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-delete'), 403);

      if(Post::where('category_id', $category->id)->count() > 0)
      {
         $notification = array(
            'message' => 'Cannot delete this category as some posts are using it!', 
            'alert-type' => 'error'
         );

         return redirect()->back()->with($notification);
      }

      if(Recipe::where('category_id', $category->id)->count() > 0)
      {
         $notification = array(
            'message' => 'Cannot delete this category as some recipes are using it!', 
            'alert-type' => 'error'
         );

         return redirect()->back()->with($notification);
      }
      

      $subCategories = Category::where('parent_id',$category->id)->get();

      // delete the category
      if($category->delete())
      {
         foreach($subCategories as $subCat)
         {
            $subCat->delete();
         }

         $notification = array(
            'message' => 'The category and related sub-categories have been deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the category and the related sub-categories.',
            'alert-type' => 'error'
         );
      }

      return redirect()->route('admin.categories.index')->with($notification);
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
      abort_unless(Gate::allows('category-delete'), 403);

      $categories = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      foreach ($categories as $category_id) {
         if(Post::where('category_id', $category_id)->count() > 0)
         {
            $notification = array(
               'message' => 'Cannot delete category : ['.$category_id.'] as some posts are using it!', 
               'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
         }
      }

      foreach ($categories as $category_id) {
         if(Recipe::where('category_id', $category_id)->count() > 0)
         {
            $notification = array(
               'message' => 'Cannot delete category : ['.$category_id.'] as some recipes are using it!', 
               'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
         }
      }

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {

         foreach ($categories as $category_id) {
            $category = Category::findOrFail($category_id);
            $category->delete();
         }

         $notification = array(
            'message' => 'The selected categories have been trashed successfully!', 
            'alert-type' => 'success'
         );
      }

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████   ██████  ██     ██ ███    ██ ██       ██████   █████  ██████      ███████ ██   ██  ██████ ███████ ██      
# ██   ██ ██    ██ ██     ██ ████   ██ ██      ██    ██ ██   ██ ██   ██     ██       ██ ██  ██      ██      ██      
# ██   ██ ██    ██ ██  █  ██ ██ ██  ██ ██      ██    ██ ███████ ██   ██     █████     ███   ██      █████   ██      
# ██   ██ ██    ██ ██ ███ ██ ██  ██ ██ ██      ██    ██ ██   ██ ██   ██     ██       ██ ██  ██      ██      ██      
# ██████   ██████   ███ ███  ██   ████ ███████  ██████  ██   ██ ██████      ███████ ██   ██  ██████ ███████ ███████ 
##################################################################################################################
   public function downloadExcel($type)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      $data = Category::get()->toArray();
      return Excel::create('Categories_List', function($excel) use ($data) {
         $excel->sheet('mySheet', function($sheet) use ($data)
         {
            $sheet->fromArray($data);
         });
      })->download($type);
   }


##################################################################################################################
# ███████ ██████  ██ ████████ 
# ██      ██   ██ ██    ██    
# █████   ██   ██ ██    ██    
# ██      ██   ██ ██    ██    
# ███████ ██████  ██    ██    
// Show the form for editing the specified resource
##################################################################################################################
   public function edit($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-edit'), 403);

      $category = Category::find($id);

      return  view('admin.categories.edit', compact('category'));
   }


##################################################################################################################
# ███████ ██   ██ ██████   ██████  ██████  ████████     ██████  ██████  ███████ 
# ██       ██ ██  ██   ██ ██    ██ ██   ██    ██        ██   ██ ██   ██ ██      
# █████     ███   ██████  ██    ██ ██████     ██        ██████  ██   ██ █████   
# ██       ██ ██  ██      ██    ██ ██   ██    ██        ██      ██   ██ ██      
# ███████ ██   ██ ██       ██████  ██   ██    ██        ██      ██████  ██      
##################################################################################################################
   public function exportPDF()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      $data = Category::get()->toArray();
      return Excel::create('Categories_List', function($excel) use ($data) {
         $excel->sheet('mySheet', function($sheet) use ($data)
         {
            $sheet->fromArray($data);
         });
      })->download("pdf");
   }


##################################################################################################################
# ██ ███    ███ ██████   ██████  ██████  ████████ 
# ██ ████  ████ ██   ██ ██    ██ ██   ██    ██    
# ██ ██ ████ ██ ██████  ██    ██ ██████     ██    
# ██ ██  ██  ██ ██      ██    ██ ██   ██    ██    
# ██ ██      ██ ██       ██████  ██   ██    ██    
// IMPORT :: Show the form for importing entries to storage.
##################################################################################################################
   public function import()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      return view('admin.categories.import');
   }


##################################################################################################################
# ██ ███    ███ ██████   ██████  ██████  ████████     ███████ ██    ██ ███    ██  ██████ ████████ ██  ██████  ███    ██ 
# ██ ████  ████ ██   ██ ██    ██ ██   ██    ██        ██      ██    ██ ████   ██ ██         ██    ██ ██    ██ ████   ██ 
# ██ ██ ████ ██ ██████  ██    ██ ██████     ██        █████   ██    ██ ██ ██  ██ ██         ██    ██ ██    ██ ██ ██  ██ 
# ██ ██  ██  ██ ██      ██    ██ ██   ██    ██        ██      ██    ██ ██  ██ ██ ██         ██    ██ ██    ██ ██  ██ ██ 
# ██ ██      ██ ██       ██████  ██   ██    ██        ██       ██████  ██   ████  ██████    ██    ██  ██████  ██   ████ 
##################################################################################################################
   public function importExcel()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      if(Input::hasFile('import_file')){
         $path = Input::file('import_file')->getRealPath();
         $data = Excel::load($path, function($reader) {})->get();

         if(!empty($data) && $data->count()){
            foreach ($data as $key => $value) {
               $insert[] = [
                  'name'         => $value->name,
                  'description'  => $value->description,
                  'module_id'    => $value->module_id,
                  'created_at'   => $value->created_at,
                  'updated_at'   => $value->updated_at,
               ];
            }

            if(!empty($insert)){
               DB::table('categories')->insert($insert);
               Session::flash('success','Import was successfull!');
               return redirect()->route('categories.index');
            }
         }
      }
      return back();
   }


##################################################################################################################
# ██ ███    ██ ██████  ███████ ██   ██ 
# ██ ████   ██ ██   ██ ██       ██ ██  
# ██ ██ ██  ██ ██   ██ █████     ███   
# ██ ██  ██ ██ ██   ██ ██       ██ ██  
# ██ ██   ████ ██████  ███████ ██   ██ 
// Display a list of resources
##################################################################################################################
   public function index(Request $request, $key=null)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      $categories = Category::with('parent','children')->orderBy('name', 'asc')->get();

      $parentCategories = Category::with('children')->where('parent_id', 0)->get();

      return view('admin.categories.index', compact('categories','parentCategories'));
   }


##################################################################################################################
# ███    ██ ███████ ██     ██      ██████  █████  ████████ ███████  ██████   ██████  ██████  ██ ███████ ███████ 
# ████   ██ ██      ██     ██     ██      ██   ██    ██    ██      ██       ██    ██ ██   ██ ██ ██      ██      
# ██ ██  ██ █████   ██  █  ██     ██      ███████    ██    █████   ██   ███ ██    ██ ██████  ██ █████   ███████ 
# ██  ██ ██ ██      ██ ███ ██     ██      ██   ██    ██    ██      ██    ██ ██    ██ ██   ██ ██ ██           ██ 
# ██   ████ ███████  ███ ███       ██████ ██   ██    ██    ███████  ██████   ██████  ██   ██ ██ ███████ ███████ 
// Display a listing of the resource that were created since the user's last login.
##################################################################################################################
   public function newCategories(Request $request, $key=null)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);      

      $alphas = DB::table('categories')
      ->select(DB::raw('DISTINCT LEFT(name, 1) as letter'))
      ->where('created_at', '>=' , Auth::user()->last_login_date)
      ->orderBy('letter')
      ->get();

      $letters = [];
      foreach($alphas as $alpha) {
         $letters[] = $alpha->letter;
      }

      // If $key value is passed
      if ($key) {
         $categories = Category::newCategories()
         ->where('name', 'like', $key . '%')
         ->get();
      } else {
         $categories = Category::newCategories()->get();
      }

      return view('admin.categories.newCategories', compact('categories','letters'));
   }


##################################################################################################################
# ███████ ██   ██  ██████  ██     ██ 
# ██      ██   ██ ██    ██ ██     ██ 
# ███████ ███████ ██    ██ ██  █  ██ 
#      ██ ██   ██ ██    ██ ██ ███ ██ 
# ███████ ██   ██  ██████   ███ ███  
// Display the specified resource
##################################################################################################################
   public function show($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      $category = Category::findOrFail($id);

      return view('admin.categories.show', compact('category'));
   }


##################################################################################################################
# ███████ ████████  ██████  ██████  ███████ 
# ██         ██    ██    ██ ██   ██ ██      
# ███████    ██    ██    ██ ██████  █████   
#      ██    ██    ██    ██ ██   ██ ██      
# ███████    ██     ██████  ██   ██ ███████ 
// Store a newly created resource in storage
##################################################################################################################
   public function store(Request $request)
   {
      // dd($request->part);
      // Check if user has required permission
      abort_unless(Gate::allows('category-create'), 403);

      if($request->part === 'main')
      {
         $rules = [
            'mName' => 'required|min:3|max:50',
         ];

         $customMessages = [
            'mName.required' => 'Required',
            'mName.min' => 'Minimum 3 characters',
            'mName.max' => 'Maximum 50 characters',
         ];

         $this->validate($request, $rules, $customMessages);

         $category = new Category;
            $category->parent_id = 0;
            $category->name = $request->mName;
            $category->value = $request->mValue;
            $category->description = $request->mDescription;
         $category->save();

         Session::flash('success','The new parent category has been created.');
         dd($request->part);
         return redirect()->route('admin.categories.index', ['part1', $request->part]);
      } 

      if($request->part === 'sub')
      {
         $rules = [
            'sSubs' => 'required',
            'sName' => 'required|min:3|max:50',
         ];

         $customMessages = [
            'sSubs.required' => 'Required',
            'sName.required' => 'Required',
            'sName.min' => 'Minimum 3 characters',
            'sName.max' => 'Maximum 50 characters',
         ];

         $this->validate($request, $rules, $customMessages);

         $category = new Category;
            $category->parent_id = $request->sSubs;
            $category->name = $request->sName;
            $category->value = $request->sValue;
            $category->description = $request->sDescription;
         $category->save();

         Session::flash('success','The new sub-category has been created.');
         dd($request->part);
         return redirect()->route('admin.categories.index', ['part1', $request->part]);
      }

      if($request->part === 'category')
      {
         $rules = [
            'cCategory' => 'required',
            'cSubcategory' => 'required',
            'cName' => 'required|min:3|max:50',
         ];

         $customMessages = [
            'cCategory.required' => 'Required',
            'cSubcategory.required' => 'Required',
            'cName.required' => 'Required',
            'cName.min' => 'Minimum 3 characters',
            'cName.max' => 'Maximum 50 characters',
         ];

         // dd($request->part);
         $this->validate($request, $rules, $customMessages);

         $cSubCategory = Category::where('name', '=', $request->cSubcategory)->where('parent_id', '=', $request->cCategory)->pluck('id');

         $category = new Category;
            $category->parent_id = $cSubCategory[0];
            $category->name = $request->cName;
            $category->value = $request->cValue;
            $category->description = $request->cDescription;
         $category->save();

         Session::flash('success','The new category has been created.');
         return redirect()->route('admin.categories.index')->with(['title' => 'Data From Controller']);
      }

   }


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
   public function update(Request $request, $id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-edit'), 403);

      $rules = [
         'name' => 'required|min:3|max:50',
      ];

      $customMessages = [
         'name.required' => 'Required',
         'name.min' => 'Minimum 3 characters',
         'name.max' => 'Maximum 50 characters',
      ];

      $this->validate($request, $rules, $customMessages);

      // Get the category value from the database
      $category = Category::find($id);
      $category->name = $request->input('name');
      $category->value = $request->input('value');
      $category->description = $request->input('description');
      
      // Save the data to the database
      $category->save();

      // Set flash data with success message
      Session::flash('success','The category was successfully updated!');
      // Redirect
      return redirect()->route('admin.categories.index');
   }


##################################################################################################################
# ██████  ███████ ███████ ████████  ██████  ██████  ███████ 
# ██   ██ ██      ██         ██    ██    ██ ██   ██ ██      
# ██████  █████   ███████    ██    ██    ██ ██████  █████   
# ██   ██ ██           ██    ██    ██    ██ ██   ██ ██      
# ██   ██ ███████ ███████    ██     ██████  ██   ██ ███████ 
// RESTORE TRASHED FILE
##################################################################################################################
   public function restore($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      $category = Category::withTrashed()->findOrFail($id);

      // restore the category
      if($category->restore())
      {
         $notification = array(
            'message' => 'The category was restored successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error restoring the category.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ███    ███  █████  ███████ ███████     ██████  ███████ ███████ ████████  ██████  ██████  ███████ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██         ██    ██    ██ ██   ██ ██      
# ██ ████ ██ ███████ ███████ ███████     ██████  █████   ███████    ██    ██    ██ ██████  █████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██           ██    ██    ██    ██ ██   ██ ██      
# ██      ██ ██   ██ ███████ ███████     ██   ██ ███████ ███████    ██     ██████  ██   ██ ███████ 
##################################################################################################################

   public function massRestore(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      $categories = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         );
      } else {

         foreach ($categories as $category_id) {
            $category = Category::withTrashed()->findOrFail($category_id);
            $category->restore();
         }

         $notification = array(
            'message' => 'The selected categories have been restored successfully!', 
            'alert-type' => 'success'
         );
      }

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ███    ███  █████  ███████ ███████     ██████  ███████ ██      ███████ ████████ ███████ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██      ██         ██    ██      
# ██ ████ ██ ███████ ███████ ███████     ██   ██ █████   ██      █████      ██    █████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██      ██      ██         ██    ██      
# ██      ██ ██   ██ ███████ ███████     ██████  ███████ ███████ ███████    ██    ███████ 
##################################################################################################################
   public function massDelete(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-delete'), 403);

      $categories = explode(',', $request->input('mass_delete_pass_checkedvalue'));

      if(!$request->input('mass_delete_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {

         foreach ($categories as $category_id) {
            $category = Category::withTrashed()->findOrFail($category_id);
            $category->forceDelete();
         }

         $notification = array(
            'message' => 'The selected users have been permanently deleted!',
            'alert-type' => 'success'
         );
      }

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ████████ ██████   █████  ███████ ██   ██ ███████ ██████  
#    ██    ██   ██ ██   ██ ██      ██   ██ ██      ██   ██ 
#    ██    ██████  ███████ ███████ ███████ █████   ██   ██ 
#    ██    ██   ██ ██   ██      ██ ██   ██ ██      ██   ██ 
#    ██    ██   ██ ██   ██ ███████ ██   ██ ███████ ██████  
// Display a list of resources that have been trashed (Soft Deleted)
##################################################################################################################
   public function trashed()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('category-manage'), 403);

      $categories = Category::onlyTrashed()->get();
      $parentCategories = Category::with('children')->where('parent_id', 0)->get();

      return view('admin.categories.index', compact('categories','parentCategories'));
   }


}
