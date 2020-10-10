<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
// use App\Http\Requests\BugRequest;
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
      $features = Feature::where('user_id', '=', Auth::user()->id)->get();
      // $features = Bug::where('user_id', 20)->get();

      return view('UI.features.index', compact('features'));
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
      // abort_unless(Gate::allows('bug-create'), 403);

      $feature = New Feature();

      return view('UI.features.create', compact('feature'));
      // return view('admin.bugs.create');
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
      // dd($request);
      // dd($bug->title);
      // Check if user has required permission
      // abort_unless(Gate::allows('role-create'), 403);

      // validate the data
      $this->validate($request, [
         'title' => 'required|min:5',
         'description' => 'required',
      ]);

      $feature = New Feature;

         // assign values from form fields
         $feature->title = $request->title;
         $feature->status = 1;
         $feature->description = $request->description;
         $feature->user_id = Auth::user()->id;

      // Save the data
      $feature->save();

      $notification = [
         'message' => 'The feature has been created successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'new')
      {
         return redirect()->back()->with($notification);
      }

      // return redirect()->route('admin.bugs.index')->with($notification);
      return redirect()->route('features.index')->with($notification);
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
      // abort_unless(Gate::allows('bug-show'), 403);

		return view('UI.features.show', compact('feature'));
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
      // abort_unless(Gate::allows('bug-edit'), 403);
      abort_unless((Gate::allows('feature-edit') || ($feature->user_id == Auth::id())), 403);
      
      // dd($bug);

      return view('UI.features.edit', compact('feature'));
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
      abort_unless((Gate::allows('feature-edit') || ($feature->user_id == Auth::id())), 403);

      // validate the data
      $this->validate($request, [
         'title' => 'required|min:5',
         'description' => 'required',
      ]);

      // assign values from form fields
      $feature->title = $request->title;
      $feature->description = $request->description;
      
      // Save the data
      $feature->save();

      $notification = [
         'message' => 'The feature has been updated successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'continue') {
         return redirect()->back()->with($notification);
      }

      return redirect()->route('features.index')->with($notification);
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
      // abort_unless(Gate::allows('bug-delete'), 403);
      abort_unless((Gate::allows('feature-delete') || ($feature->user_id == Auth::id())), 403);
	
   
      // delete the bug
      $feature->delete();

      $notification = [
         'message' => 'The feature has been deleted successfully!', 
         'alert-type' => 'success'
      ];

      // return redirect()->route('admin.projects.index')->with($notification);
      return redirect()->back()->with($notification);
   }


}
