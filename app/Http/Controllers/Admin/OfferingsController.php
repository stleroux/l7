<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferingRequest;
use App\Models\Offering;
use Auth;
use DB;
use File;
use Gate;
use Illuminate\Http\Request;
use Image as Img;
use Route;
use Session;
use Str;
use URL;


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
      $this->middleware('auth');
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
      abort_unless(Gate::allows('offering-create'), 403);

      $offering = New Offering();
      $categories = Offering::where('category',0)->get();
      // dd($categories);

      return view('admin.offerings.create', compact('offering','categories'));
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
   public function destroy(Offering $offering)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('offering-delete'), 403);

      // Check if sub-categories exist
      if($sub = Offering::where('category',$offering->id)->get())
      {
         $notification = [
         'message' => 'The offering cannot be deleted as child categories exist!', 
         'alert-type' => 'error'
      ];
         return redirect()->back()->with($notification);
      }

      // delete the permission
      $offering->delete();

      $notification = [
         'message' => 'The offering has been deleted successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
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
      abort_unless(Gate::allows('offering-delete'), 403);

      // Delete the FAQ from the database
      $offering = Offering::onlyTrashed()->findOrFail($id);
      $offering->forceDelete();

      $notification = [
         'message' => 'The offering was deleted successfully.', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
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
   public function edit(Offering $offering)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('offering-edit'), 403);


      $categories = Offering::where('category',0)->get()->sortBy('name');
      // dd($categories);
      // $offering = Offering::findOrFail($->id);

      return view('admin.offerings.edit', compact('offering','categories'));
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
      // Check if user has required permission
      // abort_unless(Gate::allows('offering-manage'), 403);

      // Set the session to the current page route
      // Session::put('fromPage', url()->full());

      // $offerings = Offering::orderBy('question','asc')->get();
      $offerings = Offering::orderBy('name')->get();
      // dd($offerings);
      // dd("HERE");
      
      return view('admin.offerings.index', compact('offerings'));
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
   public function store(OfferingRequest $request, Offering $offering)
   // public function store(Carving $Carving)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('offering-create'), 403);

      $offering->name        = Str::lower($request->name);
      // $offering->answer      = $request->answer;
      if($request->category == 1)
      {
         $offering->category    = 0;
      } else {
         $offering->category    = $request->category;
      }
         // $offering->category    = $request->category;
      // $offering->is_published = $request->is_published;
      // $offering->is_published  = (!isset($request->is_published)) ? 0 : 1 ;

      // Save the data
      if($offering->save())
      {
         $notification = [
            'message' => 'The offering has been created successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.offerings.edit', $offering)->with($notification);
         }

      }

      return redirect()->route('admin.offerings.index')->with($notification);
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
   public function show(Offering $offering, Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('offering-manage'), 403);

      // get previous Carving
      $previous = Offering::where('question', '<', $offering->question)->orderBy('question','asc')->max('question');
      
      if($previous){
         $p = Offering::where('question', $previous)->get();
         $previous = $p[0]->id;
      }

      // get next Carving
      $next = Offering::where('question', '>', $offering->question)->orderBy('question','desc')->min('question');

      if($next){
         $n = Offering::where('question', $next)->get();
         $next = $n[0]->id;
      }

      // Get all associated Audits
      $audits = $offering->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.offerings.show', compact('offering','previous','next','audits'));
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
   // public function update(CarvingRequest $request, Carving $Carving)
   public function update(OfferingRequest $request, Offering $offering)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('offering-edit'), 403);

      $offering->name     = Str::lower($request->name);
      // $offering->answer        = $request->answer;
      // $offering->category      = $request->category;
      if($request->category == 1)
      {
         $offering->category    = 0;
      } else {
         $offering->category    = $request->category;
      }
      // $offering->is_published  = $request->is_published;
      // $offering->is_published  = (!isset($request->is_published)) ? 0 : 1 ;

      // Save the data
      if($offering->save())
      {
         $notification = [
            'message' => 'The offering has been updated successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'update')
         {
            return redirect()->route('admin.offerings.index')->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.offerings.edit', $offering)->with($notification);
         }

      }

      return redirect()->route('admin.offerings.index')->with($notification);
   }


##################################################################################################################
# VALIDATE REQUEST
##################################################################################################################
   // $Carving->update($this->validateRequest());

   // private function validateRequest()
   // {
   //    return request()->validate(
   //       // Rules
   //       [
   //          'name' => 'required|min:3',
   //          'category' => 'required|min:0|not_in:0',
   //          'description' => 'required',
   //          'width' => '',
   //          'depth' => '',
   //          'height' => '',
   //          'completed_at' => '',
   //          'weight' => '',
   //          'price' => '',
   //          'time_invested' => '',
   //          'image' => 'sometimes|file|image|max:5000',
   //       ],
   //       // Custom error messages
   //       [
   //          'name.required' => 'This is required, you dumb dumb',
   //          'name.min' => 'At least 3 characters',
   //       ]
   //    );
   // }

   
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
      abort_unless(Gate::allows('offering-delete'), 403);

      $offerings = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         foreach ($offerings as $offering_id) {
            // Check if sub-categories exist
            if($sub = Offering::where('category',$offering_id)->first())
            {
               $notification = [
               'message' => 'The offering cannot be deleted as child categories exist!', 
               'alert-type' => 'error'
            ];
               return redirect()->back()->with($notification);
            }

            $offerings = Offering::findOrFail($offering_id);
            $offerings->delete();
         }

         $notification = array(
            'message' => 'The selected offerings have been deleted successfully!', 
            'alert-type' => 'success'
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
      abort_unless(Gate::allows('offering-delete'), 403);

      $offerings = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($offerings as $offering_id) {
            $offering = Offering::onlyTrashed()->findOrFail($offering_id);
            $offering->forceDelete();
         }

         $notification = [
            'message' => 'The selected offerings have been permanently deleted!',
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
   // public function resetViews($id)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('offering-manage'), 403);

   //    $offering = Offering::find($id);
   //       $offering->views = 0;
   //    $offering->save();

   //    $notification = [
   //       'message' => 'The offering\'s views count was reset to 0.', 
   //       'alert-type' => 'success'
   //    ];
   //    return redirect()->back()->with($notification);
   // }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██████╗ ███████╗███████╗███████╗████████╗    ██╗   ██╗██╗███████╗██╗    ██╗███████╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██╔════╝██╔════╝██╔════╝╚══██╔══╝    ██║   ██║██║██╔════╝██║    ██║██╔════╝
#  ██╔████╔██║███████║███████╗███████╗    ██████╔╝█████╗  ███████╗█████╗     ██║       ██║   ██║██║█████╗  ██║ █╗ ██║███████╗
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██╔══██╗██╔══╝  ╚════██║██╔══╝     ██║       ╚██╗ ██╔╝██║██╔══╝  ██║███╗██║╚════██║
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██║  ██║███████╗███████║███████╗   ██║        ╚████╔╝ ██║███████╗╚███╔███╔╝███████║
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝   ╚═╝         ╚═══╝  ╚═╝╚══════╝ ╚══╝╚══╝ ╚══════╝
##################################################################################################################
   // public function massResetViews(Request $request)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('offering-manage'), 403);

   //    $offerings = explode(',', $request->input('mass_resetViews_pass_checkedvalue'));

   //    if(!$request->input('mass_resetViews_pass_checkedvalue'))
   //    {

   //       $notification = [
   //          'message' => 'Please select entries to be restore.', 
   //          'alert-type' => 'error'
   //       ];

   //    } else {
         
   //       foreach ($offerings as $offering_id) {
   //          $offering = Offering::findOrFail($offering_id);
   //             $offering->views = 0;
   //          $offering->save();
   //       }

   //       $notification = [
   //          'message' => 'The views counts for the selected questions have been reset successfully!', 
   //          'alert-type' => 'success'
   //       ];

   //    }
      
   //    return redirect()->back()->with($notification);
   // }


##################################################################################################################
#  ██████╗ ███████╗███████╗████████╗ ██████╗ ██████╗ ███████╗
#  ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
#  ██████╔╝█████╗  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
#  ██╔══██╗██╔══╝  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
#  ██║  ██║███████╗███████║   ██║   ╚██████╔╝██║  ██║███████╗
#  ╚═╝  ╚═╝╚══════╝╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
# Restore trashed file
##################################################################################################################
   public function restore($offering)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('offering-manage'), 403);

      $offering = Offering::onlyTrashed()->findOrFail($offering);
      
      // Restore the user
      $offering->restore();

      $notification = [
         'message' => 'The offering was restored successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██████╗ ███████╗███████╗████████╗ ██████╗ ██████╗ ███████╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
#  ██╔████╔██║███████║███████╗███████╗    ██████╔╝█████╗  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██╔══██╗██╔══╝  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██║  ██║███████╗███████║   ██║   ╚██████╔╝██║  ██║███████╗
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═╝  ╚═╝╚══════╝╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
##################################################################################################################
   public function massRestore(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('offering-manage'), 403);

      $offerings = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($offerings as $offering_id) {
            $offering = Offering::onlyTrashed()->findOrFail($offering_id);
            $offering->restore();
         }

         $notification = [
            'message' => 'The selected offerings have been restored successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ████████╗██████╗  █████╗ ███████╗██╗  ██╗███████╗██████╗ 
#  ╚══██╔══╝██╔══██╗██╔══██╗██╔════╝██║  ██║██╔════╝██╔══██╗
#     ██║   ██████╔╝███████║███████╗███████║█████╗  ██║  ██║
#     ██║   ██╔══██╗██╔══██║╚════██║██╔══██║██╔══╝  ██║  ██║
#     ██║   ██║  ██║██║  ██║███████║██║  ██║███████╗██████╔╝
#     ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝╚══════╝╚═════╝ 
# Display a list of resources that have been trashed (Soft Deleted)
##################################################################################################################
   public function trashed()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('offering-manage'), 403);

      $offerings = Offering::onlyTrashed()->get();
      
      return view('admin.offerings.index', compact('offerings'));
   }


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
   //    $offering = Offering::find($id);
      
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('offering-manage'), 403);

   //       $offering->is_published = 1;
   //       if($offering->deleted_at != Null) {
   //          $offering->deleted_at = Null;
   //       }
   //    $offering->save();

   //    Session::flash ('success','The offering was successfully published.');
   //    return redirect()->back();
   // }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║
#  ██╔████╔██║███████║███████╗███████╗    ██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝
##################################################################################################################
   // public function massPublish(Request $request)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('offering-manage'), 403);

   //    $offerings = explode(',', $request->input('mass_publish_pass_checkedvalue'));

   //    if(!$request->input('mass_publish_pass_checkedvalue'))
   //    {

   //       $notification = [
   //          'message' => 'Please select entries to be published.', 
   //          'alert-type' => 'error'
   //       ];

   //    } else {
         
   //       foreach ($offerings as $offering) {
   //          $offering = Offering::withTrashed()->find($offering);
   //             $offering->is_published = 1;
   //             $offering->deleted_at = Null;
   //          $offering->save();
   //       }

   //       $notification = [
   //          'message' => 'The selected offerings have been published successfully!', 
   //          'alert-type' => 'success'
   //       ];

   //    }
      
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
   // public function unpublish($id)
   // {
   //    $offering = Offering::find($id);

   //    // Check if user has required permission
   //    abort_unless(Gate::allows('offering-manage'), 403);

   //    // Set the variable so we can use a button in other pages to come back to this page
   //    // Session::put('pageName', 'unpublish');

   //    $offering->is_published = 0;
   //    $offering->save();

   //    $notification = [
   //       'message' => 'The offering was successfully unpublished.', 
   //       'alert-type' => 'success'
   //    ];

   //    return redirect()->back()->with($notification);
   // }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██╗   ██╗███╗   ██╗██████╗ ██╗   ██╗██████╗ ██╗     ██╗███████╗██╗  ██╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██║   ██║████╗  ██║██╔══██╗██║   ██║██╔══██╗██║     ██║██╔════╝██║  ██║
#  ██╔████╔██║███████║███████╗███████╗    ██║   ██║██╔██╗ ██║██████╔╝██║   ██║██████╔╝██║     ██║███████╗███████║
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██║   ██║██║╚██╗██║██╔═══╝ ██║   ██║██╔══██╗██║     ██║╚════██║██╔══██║
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ╚██████╔╝██║ ╚████║██║     ╚██████╔╝██████╔╝███████╗██║███████║██║  ██║
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝     ╚═════╝ ╚═╝  ╚═══╝╚═╝      ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚══════╝╚═╝  ╚═╝
##################################################################################################################
   // public function massUnpublish(Request $request)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('offering-manage'), 403);

   //    $offerings = explode(',', $request->input('mass_unpublish_pass_checkedvalue'));

   //    if(!$request->input('mass_unpublish_pass_checkedvalue'))
   //    {

   //       $notification = [
   //          'message' => 'Please select entries to be unpublished.', 
   //          'alert-type' => 'error'
   //       ];

   //    } else {
         
   //       foreach ($offerings as $offering) {
   //          $offering = Offering::findOrFail($offering);
   //          $offering->is_published = 0;
   //          $offering->save();
   //          // DB::table('favorites')->where('favoriteable_id', '=', $post->id)->delete();
   //       }

   //       $notification = [
   //          'message' => 'The selected offerings have been unpublished successfully!', 
   //          'alert-type' => 'success'
   //       ];

   //    }
      
   //    return redirect()->back()->with($notification);
   // }

}
