<?php

namespace App\Http\Controllers\UI;

use Gate;
// use App\Http\Requests\BugRequest;
use App\Models\Offering;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OfferingsController extends Controller
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
      // $this->middleware('auth');
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

      // $offerings = Offering::where('category', '!=', 0)->orderByDesc('name')->get()->groupBy(function($item) {
      //       return $item->category;
      //   });
      $offerings = Offering::where('category',0)->where('id','!=',1)->orderBy('name')->get();
      // dd($offerings);

      return view('UI.offerings.index', compact('offerings'));
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
//    public function create()
//    {
//       // Check if user has required permission
//       // abort_unless(Gate::allows('bug-create'), 403);

//       $bug = New Bug();

//       return view('UI.bugs.create', compact('bug'));
//    }


// ##################################################################################################################
// #  ███████╗████████╗ ██████╗ ██████╗ ███████╗
// #  ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
// #  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
// #  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
// #  ███████║   ██║   ╚██████╔╝██║  ██║███████╗
// #  ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// # Store a newly created resource in storage
// ##################################################################################################################
//    public function store(Request $request, Bug $bug)
//    {
//       // Check if user has required permission
//       // abort_unless(Gate::allows('role-create'), 403);

//       // validate the data
//       $this->validate($request, [
//          'title' => 'required|min:5',
//          'description' => 'required',
//       ]);

//       $bug = New Bug;

//          // assign values from form fields
//          $bug->title = $request->title;
//          $bug->page_url = $request->page_url;
//          $bug->status = Bug::IS_NEW;
//          $bug->description = $request->description;
//          $bug->user_id = Auth::user()->id;

//       // Save the data
//       $bug->save();

//       $notification = [
//          'message' => 'The bug has been created successfully!', 
//          'alert-type' => 'success'
//       ];

//       if ($request->submit == 'new')
//       {
//          return redirect()->back()->with($notification);
//       }

//       return redirect()->route('bugs.index')->with($notification);
//    }


// ##################################################################################################################
// #  ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
// #  ██╔════╝██║  ██║██╔═══██╗██║    ██║
// #  ███████╗███████║██║   ██║██║ █╗ ██║
// #  ╚════██║██╔══██║██║   ██║██║███╗██║
// #  ███████║██║  ██║╚██████╔╝╚███╔███╔╝
// #  ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
// # Display the specified resource
// ##################################################################################################################
//    public function show(Bug $bug)
//    {
//       // Check if user has required permission
//       // abort_unless(Gate::allows('bug-show'), 403);

//       // Increase the view count since this is viewed from the frontend
//       $expiresAt = now()->addHours(3);
//       views($bug)->cooldown($expiresAt)->record();

//       return view('UI.bugs.show', compact('bug'));
//    }


// ##################################################################################################################
// #  ███████╗██████╗ ██╗████████╗
// #  ██╔════╝██╔══██╗██║╚══██╔══╝
// #  █████╗  ██║  ██║██║   ██║   
// #  ██╔══╝  ██║  ██║██║   ██║   
// #  ███████╗██████╔╝██║   ██║   
// #  ╚══════╝╚═════╝ ╚═╝   ╚═╝   
// # Show the form for editing the specified resource
// ##################################################################################################################
//    public function edit(Bug $bug)
//    {
//       // Check if user has required permission
//       abort_unless((Gate::allows('bug-edit') || ($bug->user_id == Auth::id())), 403);

//       return view('UI.bugs.edit', compact('bug'));
//    }


// ##################################################################################################################
// #  ██╗   ██╗██████╗ ██████╗  █████╗ ████████╗███████╗
// #  ██║   ██║██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝██╔════╝
// #  ██║   ██║██████╔╝██║  ██║███████║   ██║   █████╗  
// #  ██║   ██║██╔═══╝ ██║  ██║██╔══██║   ██║   ██╔══╝  
// #  ╚██████╔╝██║     ██████╔╝██║  ██║   ██║   ███████╗
// #   ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝
// # Update the specified resource in storage
// ##################################################################################################################
//    public function update(Request $request, Bug $bug)
//    {
//       // Check if user has required permission
//       abort_unless((Gate::allows('bug-edit') || ($bug->user_id == Auth::id())), 403);

//       // validate the data
//       $this->validate($request, [
//          'title' => 'required|min:5',
//          'description' => 'required',
//       ]);

//       // assign values from form fields
//       $bug->title = $request->title;
//       $bug->page_url = $request->page_url;
//       $bug->description = $request->description;
      
//       // Save the data
//       $bug->save();

//       $notification = [
//          'message' => 'The bug has been updated successfully!', 
//          'alert-type' => 'success'
//       ];

//       if ($request->submit == 'continue') {
//          return redirect()->back()->with($notification);
//       }

//       return redirect()->route('bugs.index')->with($notification);
//    }


// ##################################################################################################################
// #  ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
// #  ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
// #  ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
// #  ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
// #  ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
// #  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
// # Remove the specified resource from storage
// ##################################################################################################################
//    public function destroy(Bug $bug)
//    {
//       // Check if user has required permission
//       abort_unless((Gate::allows('bug-delete') || ($bug->user_id == Auth::id())), 403);
      
//       // delete the bug
//       $bug->delete();

//       $notification = [
//          'message' => 'The bug has been deleted successfully!', 
//          'alert-type' => 'success'
//       ];

//       return redirect()->back()->with($notification);
//    }

}
