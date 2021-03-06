<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use Auth;
use Gate;

class FeaturesController extends Controller
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
      $this->middleware('auth');
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
   public function index()
   {
      // $features = Feature::where('user_id', '=', Auth::user()->id)->get();
      // $features = Feature::all();
      $features = Feature::with('user','likes')->orderBy('id','desc')->get();

      return view('UI.features.index', compact('features'));
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
      // abort_unless(Gate::allows('bug-create'), 403);

      $feature = New Feature();

      return view('UI.features.create', compact('feature'));
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
   public function store(FeatureRequest $request, Feature $feature)
   {
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
         $feature->status = Feature::IS_NEW;
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

      return redirect()->route('features.index')->with($notification);
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
   public function show(Feature $feature)
   {
      // Check if user has required permission
      abort_unless((Gate::allows('feature-show') || $feature->user_id == Auth::id()), 403);

      // Increase the view count since this is viewed from the frontend
      $expiresAt = now()->addHours(3);
      views($feature)->cooldown($expiresAt)->record();

      return view('UI.features.show', compact('feature'));
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
   public function edit(Feature $feature)
   {
      // Check if user has required permission
      abort_unless((Gate::allows('feature-edit') || $feature->user_id == Auth::id()), 403);
      
      return view('UI.features.edit', compact('feature'));
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
#  ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
#  ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
#  ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
#  ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
#  ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
#  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
# Remove the specified resource from storage
##################################################################################################################
   public function destroy(Feature $feature)
   {
      // Check if user has required permission
      abort_unless((Gate::allows('feature-delete') || checkIfOwner() || checkIfStatusNew()), 403);
      
      // delete the bug
      $feature->delete();

      $notification = [
         'message' => 'The feature has been deleted successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }

}
