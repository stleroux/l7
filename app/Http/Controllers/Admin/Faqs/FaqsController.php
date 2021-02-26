<?php

namespace App\Http\Controllers\Admin\Faqs;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;
use DB;
use File;
use Gate;
use Image as Img;
use Route;
use Session;
use URL;


class FaqsController extends Controller
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
   public function create()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-create'), 403);

      $faq = New Faq();

      return view('admin.faqs.create', compact('faq'));
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
   public function destroy(Faq $faq)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-delete'), 403);

      // delete the permission
      $faq->delete();

      $notification = [
         'message' => 'The question has been deleted successfully!', 
         'alert-type' => 'success'
      ];

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
      abort_unless(Gate::allows('faq-delete'), 403);

      // Delete the FAQ from the database
      $faq = Faq::onlyTrashed()->findOrFail($id);
      $faq->forceDelete();

      $notification = [
         'message' => 'The question was deleted successfully.', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ███████ ██████  ██ ████████ 
# ██      ██   ██ ██    ██    
# █████   ██   ██ ██    ██    
# ██      ██   ██ ██    ██    
# ███████ ██████  ██    ██    
// Show the form for editing the specified resource
##################################################################################################################
   public function edit(Faq $faq)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-edit'), 403);

      $faq = Faq::findOrFail($faq->id);

      return view('admin.faqs.edit', compact('faq'));
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
      abort_unless(Gate::allows('faq-manage'), 403);

      // Set the session to the current page route
      // Session::put('fromPage', url()->full());

      $faqs = Faq::orderBy('question','asc')->get();
      
      return view('admin.faqs.index', compact('faqs'));
   }


##################################################################################################################
# ███████ ████████  ██████  ██████  ███████ 
# ██         ██    ██    ██ ██   ██ ██      
# ███████    ██    ██    ██ ██████  █████   
#      ██    ██    ██    ██ ██   ██ ██      
# ███████    ██     ██████  ██   ██ ███████ 
// Store a newly created resource in storage
##################################################################################################################
   public function store(FaqRequest $request, Faq $faq)
   // public function store(Carving $Carving)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-create'), 403);

      $faq->question    = $request->question;
      $faq->answer      = $request->answer;
      $faq->category    = $request->category;

      // Save the data
      if($faq->save())
      {
         $notification = [
            'message' => 'The faq has been created successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.faqs.edit', $faq)->with($notification);
         }

      }

      return redirect()->route('admin.faqs.index')->with($notification);
   }


##################################################################################################################
# ███████ ██   ██  ██████  ██     ██ 
# ██      ██   ██ ██    ██ ██     ██ 
# ███████ ███████ ██    ██ ██  █  ██ 
#      ██ ██   ██ ██    ██ ██ ███ ██ 
# ███████ ██   ██  ██████   ███ ███  
// Display the specified resource
##################################################################################################################
   public function show(Faq $faq, Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-manage'), 403);

      // get previous Carving
      $previous = Faq::where('question', '<', $faq->question)->orderBy('question','asc')->max('question');
      
      if($previous){
         $p = Faq::where('question', $previous)->get();
         $previous = $p[0]->id;
      }

      // get next Carving
      $next = Faq::where('question', '>', $faq->question)->orderBy('question','desc')->min('question');

      if($next){
         $n = Faq::where('question', $next)->get();
         $next = $n[0]->id;
      }

      // Get all associated Audits
      $audits = $faq->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.faqs.show', compact('faq','previous','next','audits'));
   }


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
   // public function update(CarvingRequest $request, Carving $Carving)
   public function update(FaqRequest $request, Faq $faq)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-edit'), 403);

      $faq->question      = $request->question;
      $faq->answer        = $request->answer;
      $faq->category      = $request->category;

      // Save the data
      if($faq->save())
      {
         $notification = [
            'message' => 'The faq has been deleted successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'update')
         {
            return redirect()->route('admin.faqs.index')->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.faqs.edit', $faq)->with($notification);
         }

      }

      return redirect()->route('admin.faqs.index')->with($notification);
   }


##################################################################################################################
#██╗   ██╗ █████╗ ██╗     ██╗██████╗  █████╗ ████████╗███████╗    ██████╗ ███████╗ ██████╗ ██╗   ██╗███████╗███████╗████████╗
#██║   ██║██╔══██╗██║     ██║██╔══██╗██╔══██╗╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝██╔═══██╗██║   ██║██╔════╝██╔════╝╚══██╔══╝
#██║   ██║███████║██║     ██║██║  ██║███████║   ██║   █████╗      ██████╔╝█████╗  ██║   ██║██║   ██║█████╗  ███████╗   ██║   
#╚██╗ ██╔╝██╔══██║██║     ██║██║  ██║██╔══██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║▄▄ ██║██║   ██║██╔══╝  ╚════██║   ██║   
# ╚████╔╝ ██║  ██║███████╗██║██████╔╝██║  ██║   ██║   ███████╗    ██║  ██║███████╗╚██████╔╝╚██████╔╝███████╗███████║   ██║   
#  ╚═══╝  ╚═╝  ╚═╝╚══════╝╚═╝╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝ ╚══▀▀═╝  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   
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
# ███    ███  █████  ███████ ███████     ██████  ███████ ███████ ████████ ██████   ██████  ██    ██ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██         ██    ██   ██ ██    ██  ██  ██  
# ██ ████ ██ ███████ ███████ ███████     ██   ██ █████   ███████    ██    ██████  ██    ██   ████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██           ██    ██    ██   ██ ██    ██    ██    
# ██      ██ ██   ██ ███████ ███████     ██████  ███████ ███████    ██    ██   ██  ██████     ██    
   ##################################################################################################################
   public function massDestroy(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-delete'), 403);

      $faqs = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($faqs as $faq_id) {
            $faqs = Faq::findOrFail($faq_id);
            $faqs->delete();
         }

         $notification = array(
            'message' => 'The selected questions have been deleted successfully!', 
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
      abort_unless(Gate::allows('faq-delete'), 403);

      $faqs = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($faqs as $faq_id) {
            $faq = Faq::onlyTrashed()->findOrFail($faq_id);
            $faq->forceDelete();
         }

         $notification = [
            'message' => 'The selected questions have been permanently deleted!',
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
      abort_unless(Gate::allows('faq-manage'), 403);

      $faq = Faq::find($id);
         $faq->views = 0;
      $faq->save();

      $notification = [
         'message' => 'The question\'s views count was reset to 0.', 
         'alert-type' => 'success'
      ];
      return redirect()->back()->with($notification);
   }


##################################################################################################################
// REST VIEW COUNTS
##################################################################################################################
   public function massResetViews(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-manage'), 403);

      $faqs = explode(',', $request->input('mass_resetViews_pass_checkedvalue'));

      if(!$request->input('mass_resetViews_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($faqs as $faq_id) {
            $faq = Faq::findOrFail($faq_id);
               $faq->views = 0;
            $faq->save();
         }

         $notification = [
            'message' => 'The views counts for the selected questions have been reset successfully!', 
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
   public function restore($faq)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-manage'), 403);

      $faq = Faq::onlyTrashed()->findOrFail($faq);
      
      // Restore the user
      $faq->restore();

      $notification = [
         'message' => 'The question was restored successfully!', 
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
      abort_unless(Gate::allows('faq-manage'), 403);

      $faqs = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($faqs as $faq_id) {
            $faq = Faq::onlyTrashed()->findOrFail($faq_id);
            $faq->restore();
         }

         $notification = [
            'message' => 'The selected questions have been restored successfully!', 
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
      abort_unless(Gate::allows('faq-manage'), 403);

      $faqs = Faq::onlyTrashed()->get();
      
      return view('admin.faqs.index', compact('faqs'));
   }
}
