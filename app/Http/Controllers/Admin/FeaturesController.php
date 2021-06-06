<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\featureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use Auth;
use Gate;

class FeaturesController extends Controller
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
# ██ ███    ██ ██████  ███████ ██   ██ 
# ██ ████   ██ ██   ██ ██       ██ ██  
# ██ ██ ██  ██ ██   ██ █████     ███   
# ██ ██  ██ ██ ██   ██ ██       ██ ██  
# ██ ██   ████ ██████  ███████ ██   ██ 
// Display a list of resources
##################################################################################################################
   public function index()
	{
		// Check if user has required permission
      abort_unless(Gate::allows('feature-manage'), 403);

		$features = Feature::all();

		return view('admin.features.index', compact('features'));
	}


##################################################################################################################
# ███████ ██   ██  ██████  ██     ██ 
# ██      ██   ██ ██    ██ ██     ██ 
# ███████ ███████ ██    ██ ██  █  ██ 
#      ██ ██   ██ ██    ██ ██ ███ ██ 
# ███████ ██   ██  ██████   ███ ███  
// Display the specified resource
##################################################################################################################
	public function show(Feature $feature)
	{
		// Check if user has required permission
      abort_unless(Gate::allows('feature-show'), 403);

      // Get all associated Audits
      $audits = $feature->audits()->with('user')->orderBy('id','desc')->get();

		return view('admin.features.show', compact('feature','audits'));
	}


##################################################################################################################
#  ██████ ██████  ███████  █████  ████████ ███████ 
# ██      ██   ██ ██      ██   ██    ██    ██      
# ██      ██████  █████   ███████    ██    █████   
# ██      ██   ██ ██      ██   ██    ██    ██      
#  ██████ ██   ██ ███████ ██   ██    ██    ███████ 
// Show the form for creating a new resource
##################################################################################################################
   public function create()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-create'), 403);

      $feature = New Feature();

      return view('admin.features.create', compact('feature'));
   }

##################################################################################################################
# ███████ ████████  ██████  ██████  ███████ 
# ██         ██    ██    ██ ██   ██ ██      
# ███████    ██    ██    ██ ██████  █████   
#      ██    ██    ██    ██ ██   ██ ██      
# ███████    ██     ██████  ██   ██ ███████ 
// Store a newly created resource in storage
##################################################################################################################
   public function store(Request $request, Feature $feature)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-create'), 403);

      // validate the data
      $this->validate($request, [
         'title' => 'required|min:5',
         'description' => 'required',
      ]);

         // assign values from form fields
         $feature->title = $request->title;
         $feature->status = 1;
         $feature->description = $request->description;
         $feature->user_id = Auth::user()->id;

      // Save the data
      if($feature->save())
      {
         $notification = [
            'message' => 'The feature has been created successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
         return redirect()->route('admin.features.edit', $feature)->with($notification);
         }

      }

      return redirect()->route('admin.features.index')->with($notification);
   }


##################################################################################################################
# ███████ ██████  ██ ████████ 
# ██      ██   ██ ██    ██    
# █████   ██   ██ ██    ██    
# ██      ██   ██ ██    ██    
# ███████ ██████  ██    ██    
// Show the form for editing the specified resource
##################################################################################################################
	public function edit(Feature $feature)
	{
		// Check if user has required permission
      abort_unless(Gate::allows('feature-edit'), 403);
      
      return view('admin.features.edit', compact('feature'));
	}


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
	public function update(Request $request, Feature $feature)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-edit'), 403);

      // validate the data
      $this->validate($request, [
         'title' => 'required|min:5',
         'description' => 'required',
      ]);

      // assign values from form fields
      $feature->title = $request->title;
      $feature->status = $request->status;
      $feature->description = $request->description;
      $feature->resolution = $request->resolution;

      // Save the data
      $feature->save();

      $notification = [
         'message' => 'The feature has been updated successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'continue') {
         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.features.index')->with($notification);
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
	public function destroy(Feature $feature)
	{
		// Check if user has required permission
      abort_unless(Gate::allows('feature-delete'), 403);

      // delete the feature
      $feature->delete();

      $notification = [
         'message' => 'The feature has been deleted successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
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
   	abort_unless(Gate::allows('feature-delete'), 403);

   	$features = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

   	if(!$request->input('mass_destroy_pass_checkedvalue'))
   	{

   	$notification = array(
   		'message' => 'Please select entries to be deleted.', 
   		'alert-type' => 'error'
   	);

   	} else {
   	 
      	foreach ($features as $feature_id) {
      		$feature = Feature::findOrFail($feature_id);
      		$feature->delete();
      	}

      	$notification = array(
      		'message' => 'The selected feature requests have been deleted successfully!', 
      		'alert-type' => 'success'
      	);

      }

   	return redirect()->back()->with($notification);
   }


#################################################################################################################
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
      abort_unless(Gate::allows('feature-delete'), 403);

      $feature = Feature::onlyTrashed()->findOrFail($id);
      
      // delete the user
      $feature->forceDelete();

      $notification = [
         'message' => 'The feature was deleted successfully!', 
         'alert-type' => 'success'
      ];

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
      abort_unless(Gate::allows('feature-delete'), 403);

      $features = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($features as $feature_id) {
            $feature = Feature::onlyTrashed()->findOrFail($feature_id);
            $feature->forceDelete();
         }

         $notification = [
            'message' => 'The selected features have been permanently deleted!',
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
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
      abort_unless(Gate::allows('feature-manage'), 403);

      $feature = Feature::onlyTrashed()->findOrFail($id);
      
      // Restore the user
      $feature->restore();

      $notification = [
         'message' => 'The feature was restored successfully!', 
         'alert-type' => 'success'
      ];

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
      abort_unless(Gate::allows('feature-manage'), 403);

      $features = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($features as $feature_id) {
            $feature = Feature::onlyTrashed()->findOrFail($feature_id);
            $feature->restore();
         }

         $notification = [
            'message' => 'The selected features have been restored successfully!', 
            'alert-type' => 'success'
         ];

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
      abort_unless(Gate::allows('feature-manage'), 403);

      $features = feature::onlyTrashed()->get();
      return view('admin.features.index', compact('features'));
   }


   public function new()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-manage'), 403);

      $features = Feature::where('status', Feature::IS_NEW)->get();
      return view('admin.features.index', compact('features'));
   }

   public function underreview()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-manage'), 403);

      $features = Feature::where('status',  Feature::IS_UNDER_REVIEW)->get();
      return view('admin.features.index', compact('features'));
   }

   public function pending()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-manage'), 403);

      $features = Feature::where('status',  Feature::IS_PENDING)->get();
      return view('admin.features.index', compact('features'));
   }

   public function implemented()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-manage'), 403);

      $features = Feature::where('status',  Feature::IS_IMPLEMENTED)->get();
      return view('admin.features.index', compact('features'));
   }

      public function rejected()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('feature-manage'), 403);

      $features = Feature::where('status',  Feature::IS_REJECTED)->get();
      return view('admin.features.index', compact('features'));
   }

}
