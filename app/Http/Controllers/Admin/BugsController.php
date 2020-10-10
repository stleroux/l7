<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\BugRequest;
use App\Models\Bug;
use Illuminate\Http\Request;
use Auth;
use Gate;

class BugsController extends Controller
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
      abort_unless(Gate::allows('bug-manage'), 403);

        $bugs = Bug::all();

        return view('admin.bugs.index', compact('bugs'));
    }


##################################################################################################################
# ███████ ██   ██  ██████  ██     ██ 
# ██      ██   ██ ██    ██ ██     ██ 
# ███████ ███████ ██    ██ ██  █  ██ 
#      ██ ██   ██ ██    ██ ██ ███ ██ 
# ███████ ██   ██  ██████   ███ ███  
// Display the specified resource
##################################################################################################################
    public function show(Bug $bug)
    {
        // Check if user has required permission
      abort_unless(Gate::allows('bug-show'), 403);

      return view('admin.bugs.show', compact('bug'));
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
      abort_unless(Gate::allows('bug-create'), 403);

      $bug = New Bug();

      return view('admin.bugs.create', compact('bug'));
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
   public function store(Request $request, Bug $bug)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('role-create'), 403);

      // validate the data
      $this->validate($request, [
         'title' => 'required|min:5',
         'description' => 'required',
      ]);

         // assign values from form fields
         $bug->title = $request->title;
         $bug->page_url = $request->page_url;
         $bug->status = 1;
         $bug->description = $request->description;
         $bug->user_id = Auth::user()->id;

      // Save the data
      $bug->save();

      $notification = [
         'message' => 'The bug has been created successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'new')
      {
         return redirect()->back()->with($notification);
      }

      // return redirect()->route('admin.bugs.index')->with($notification);
      return redirect()->route('admin.bugs.index')->with($notification);
   }


##################################################################################################################
# ███████ ██████  ██ ████████ 
# ██      ██   ██ ██    ██    
# █████   ██   ██ ██    ██    
# ██      ██   ██ ██    ██    
# ███████ ██████  ██    ██    
// Show the form for editing the specified resource
##################################################################################################################
    public function edit(Bug $bug)
    {
        // Check if user has required permission
      abort_unless(Gate::allows('bug-edit'), 403);
      
      // $bug = Bug::find($bug->id);
      // dd($bug);

      return view('admin.bugs.edit', compact('bug'));
    }


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
    public function update(Request $request, Bug $bug)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('bug-edit'), 403);

      // $bug = Bug::findOrFail($bug->id);
      // dd($bug);

      // validate the data
      $this->validate($request, [
         'title' => 'required|min:5',
         'description' => 'required',
      ]);

      // assign values from form fields
      $bug->title = $request->title;
      $bug->page_url = $request->page_url;
      $bug->status = $request->status;
      $bug->description = $request->description;
      $bug->resolution = $request->resolution;
      // dd($bug);
      // Save the data
      $bug->save();

      $notification = [
         'message' => 'The bug has been updated successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'continue') {
         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.bugs.index')->with($notification);
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
  public function destroy(Bug $bug)
  {
      // Check if user has required permission
    abort_unless(Gate::allows('bug-delete'), 403);

    // delete the bug
    $bug->delete();

    $notification = [
       'message' => 'The bug has been deleted successfully!', 
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
    abort_unless(Gate::allows('bug-delete'), 403);

    $bugs = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

    if(!$request->input('mass_destroy_pass_checkedvalue'))
    {

    $notification = array(
        'message' => 'Please select entries to be deleted.', 
        'alert-type' => 'error'
    );

    } else {
     
    foreach ($bugs as $bug_id) {
        $bug = Bug::findOrFail($bug_id);
        $bug->delete();
    }

    $notification = array(
        'message' => 'The selected bugs have been deleted successfully!', 
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
      abort_unless(Gate::allows('bug-delete'), 403);

      $bug = Bug::onlyTrashed()->findOrFail($id);
      
      // delete the user
      $bug->forceDelete();

      $notification = [
         'message' => 'The bug was deleted successfully!', 
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
      abort_unless(Gate::allows('bug-delete'), 403);

      $bugs = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($bugs as $bug_id) {
            $bug = Bug::onlyTrashed()->findOrFail($bug_id);
            $bug->forceDelete();
         }

         $notification = [
            'message' => 'The selected bugs have been permanently deleted!',
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
      abort_unless(Gate::allows('bug-manage'), 403);

      $bug = Bug::onlyTrashed()->findOrFail($id);
      
      // Restore the user
      $bug->restore();

      $notification = [
         'message' => 'The bug was restored successfully!', 
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
      abort_unless(Gate::allows('bug-manage'), 403);

      $bugs = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($bugs as $bug_id) {
            $bug = Bug::onlyTrashed()->findOrFail($bug_id);
            $bug->restore();
         }

         $notification = [
            'message' => 'The selected bugs have been restored successfully!', 
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
      abort_unless(Gate::allows('bug-manage'), 403);

      $bugs = Bug::onlyTrashed()->get();
      return view('admin.bugs.index', compact('bugs'));
   }





   public function new()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('bug-manage'), 403);

      $bugs = Bug::where('status',1)->get();
      return view('admin.bugs.index', compact('bugs'));
   }

   public function pending()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('bug-manage'), 403);

      $bugs = Bug::where('status',2)->get();
      return view('admin.bugs.index', compact('bugs'));
   }

   public function notreproducible()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('bug-manage'), 403);

      $bugs = Bug::where('status',3)->get();
      return view('admin.bugs.index', compact('bugs'));
   }

   public function nonissue()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('bug-manage'), 403);

      $bugs = Bug::where('status',4)->get();
      return view('admin.bugs.index', compact('bugs'));
   }

      public function resolved()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('bug-manage'), 403);

      $bugs = Bug::where('status',10)->get();
      return view('admin.bugs.index', compact('bugs'));
   }

}
