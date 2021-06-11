<?php

namespace App\Http\Controllers\Admin\Carvings;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarvingRequest;
use App\Models\Carving;
use App\Models\CarvingImage;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Finish;
use App\Models\Material;
use App\Models\Tag;
use Illuminate\Http\Request;
use Auth;
use DB;
use File;
use Gate;
use Image as Img;
use Route;
use Session;
use URL;


class CarvingsController extends Controller
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
      abort_unless(Gate::allows('carving-create'), 403);

      $carving = New Carving();
      $tags = Tag::where('category', Tag::IS_CARVING)->orderBy('name')->get();

      return view('admin.carvings.create', compact('carving','tags'));
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
   public function destroy(Carving $carving)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('carving-delete'), 403);

      // delete the permission
      $carving->delete();

      $notification = [
         'message' => 'The carving has been deleted successfully!', 
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
      abort_unless(Gate::allows('carving-delete'), 403);

      // Delete images from file system
      $images = DB::table('carvings_images')->where('carving_id', '=', $id)->get();

      if($images) {
         foreach($images as $image) {
            // Delete the image(s) and thumbnail(s) from storage
            $image_path = public_path().'/_carvings/'.$id.'/'.$image->name;
            $thumbs_path = public_path().'/_carvings/'.$id.'/thumbs/'.$image->name;
            unlink($image_path);
            unlink($thumbs_path);
         }
      }

      // Check if there are any files left in the thumbs folder, if not, delete the folder
      if (count(glob('_carvings/' . $id . "/thumbs/*")) === 0 ) { // empty
         // Delete the thumbs folder
         File::deleteDirectory(public_path('_carvings/'.$id.'/thumbs/'));
         // Delete the main folder
         File::deleteDirectory(public_path('_carvings/' . $id));
      }

      // Delete related images from DB
      DB::table('carvings_images')->where('carving_id', '=', $id)->delete();

      // Delete related materials from DB
      DB::table('carving_material')->where('carving_id', '=', $id)->delete();

      // Delete related finishes from DB
      DB::table('carving_finish')->where('carving_id', '=', $id)->delete();

      // Delete related tags from DB
      DB::table('carving_tag')->where('carving_id', '=', $id)->delete();

      // Delete the Carving from the database
      $carving = Carving::onlyTrashed()->findOrFail($id);
      $carving->forceDelete();

      // Set flash data with success message
      $notification = [
         'message' => 'The carving, related files and DB entries were deleted successfully.', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ██████╗ ███████╗██╗     ███████╗████████╗███████╗         ██╗ ██████╗ ██████╗     ███████╗██╗  ██╗███████╗███████╗████████╗
#  ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝         ██║██╔═══██╗██╔══██╗    ██╔════╝██║  ██║██╔════╝██╔════╝╚══██╔══╝
#  ██║  ██║█████╗  ██║     █████╗     ██║   █████╗           ██║██║   ██║██████╔╝    ███████╗███████║█████╗  █████╗     ██║   
#  ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝      ██   ██║██║   ██║██╔══██╗    ╚════██║██╔══██║██╔══╝  ██╔══╝     ██║   
#  ██████╔╝███████╗███████╗███████╗   ██║   ███████╗    ╚█████╔╝╚██████╔╝██████╔╝    ███████║██║  ██║███████╗███████╗   ██║   
#  ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝     ╚════╝  ╚═════╝ ╚═════╝     ╚══════╝╚═╝  ╚═╝╚══════╝╚══════╝   ╚═╝   
##################################################################################################################
   public function deleteJobSheet($id)
   {
      // dd($id);
      // Find the user
      $carving = Carving::find($id);
      // dd($carving);

      $jobSheet = public_path('\_carvings\\'.$carving->id.'\\'.$carving->jobSheet);
      // dd($jobSheet);

      // Delete the job sheet from the system
      File::delete($jobSheet);

      // Update database
      $carving->jobSheet = NULL;
      $carving->save();

      // Set flash data with success message and return user to same tab
      $notification = array(
         'message' => 'The job sheet was successfully removed!',
         'alert-type' => 'success'
      );

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
   public function edit(Carving $carving)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('carving-edit'), 403);

      $carving = Carving::with('finishes')->with('materials')->with('images')->find($carving->id);

      $materials = Material::all();
      $finishes = Finish::all();
      $tags = Tag::where('category', Tag::IS_CARVING)->orderBy('name')->get();

      return view('admin.carvings.edit', compact('carving','finishes','materials','tags'));
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
   public function index($tag = null)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('carving-manage'), 403);

      // Set the session to the current page route
      // Session::put('fromPage', url()->full());

      if(request('tag')){
         // dd(request('tag'));
         $carvings = Tag::where('name', request('tag'))->firstOrFail()->carvings->sortBy('name');
      } else {
         $carvings = Carving::with('images')->orderBy('name','asc')->get();
      }

      $tags = Tag::where('category', Tag::IS_CARVING)->orderBy('name')->get();

      return view('admin.carvings.index', compact('carvings','tags'));
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
   public function store(CarvingRequest $request, Carving $carving)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('carving-create'), 403);

      $carving->name          = $request->name;
      $carving->category      = $request->category;
      $carving->description   = $request->description;
      $carving->width         = $request->width;
      $carving->depth         = $request->depth;
      $carving->height        = $request->height;
      $carving->weight        = $request->weight;
      $carving->jobSheet      = $request->jobSheet;
      $carving->completed_at  = $request->completed_at;
      $carving->price         = $request->price;
      $carving->design_time_hrs   = $request->design_time_hrs;
      $carving->design_time_mins   = $request->design_time_mins;
      $carving->machine_time_hrs  = $request->machine_time_hrs;
      $carving->machine_time_mins  = $request->machine_time_mins;

      // Save the data
      if($carving->save())
      {
         $notification = [
            'message' => 'The carving has been created successfully!', 
            'alert-type' => 'success'
         ];

         // save the tags in the post_tag table
         // false required as default (otherwise override existing association)
         if (isset($request->tags))
         {
             $carving->tags()->sync($request->tags, false);
         } else {
             $carving->tags()->sync(array());
         }

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.carvings.edit', $carving)->with($notification);
         }

      }

      return redirect()->route('admin.carvings.index')->with($notification);
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
   public function show(Carving $carving, Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('carving-manage'), 403);

      // get previous Carving
      $previous = Carving::where('name', '<', $carving->name)->orderBy('name','asc')->max('name');
      
      if($previous){
         $p = Carving::where('name', $previous)->get();
         $previous = $p[0]->id;
      }

      // get next Carving
      $next = Carving::where('name', '>', $carving->name)->orderBy('name','desc')->min('name');

      if($next){
         $n = Carving::where('name', $next)->get();
         $next = $n[0]->id;
      }

      // Get the first image associated to this Carving
      $image = CarvingImage::where('carving_id', '=', $carving->id)->first();

      // Get all associated Audits
      $audits = $carving->audits()->with('user')->orderBy('id','desc')->get();
      // dd($audits);

      return view('admin.carvings.show', compact('carving','image','previous','next','audits'));
   }


// SHOW JOB SHEET
   // public function showJobSheet(Carving $carving)
   // {
   //    // return File::get(public_path() . '\_carvings\\'.$carving->id.'\\'.$carving->jobSheet);
   //    $file = File::get(public_path() . '\_carvings\\'.$carving->id.'\\'.$carving->jobSheet);

   //    return view('admin.carvings.showJobSheet', compact('file', 'carving'));
   //    // dd($carving);
   //    // dd($carving->jobSheet);
   // }

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
   public function update(CarvingRequest $request, Carving $carving)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('carving-edit'), 403);

      $carving->name          = $request->name;
      $carving->category      = $request->category;
      $carving->description   = $request->description;
      $carving->width         = $request->width;
      $carving->depth         = $request->depth;
      $carving->height        = $request->height;
      $carving->weight        = $request->weight;
      // $carving->jobSheet      = $request->jobSheet;
      $carving->completed_at  = $request->completed_at;
      $carving->price         = $request->price;
      $carving->design_time_hrs   = $request->design_time_hrs;
      $carving->design_time_mins   = $request->design_time_mins;
      $carving->machine_time_hrs  = $request->machine_time_hrs;
      $carving->machine_time_mins  = $request->machine_time_mins;

      // Save the data
      if($carving->save())
      {
         $notification = [
            'message' => 'The carving has been created successfully!', 
            'alert-type' => 'success'
         ];

         //save the tags in the databse
         // not adding 2nd param will delete all entries in array and replace them with new ones
         // check that there is something in the array and then save it else pass an empty array
         if (isset($request->tags))
         {
             $carving->tags()->sync($request->tags);
         } else {
             $carving->tags()->sync(array());
         }

         // Check if a new file was submitted
         if ($request->hasFile('jobSheet')) {

            // Check for existing job sheet file and delete if necessary
            if($carving->jobSheet)
            {
               $jobSheet = public_path('\_carvings\\'.$carving->id.'\\'.$carving->jobSheet);

               // Delete the job sheet from the system
               File::delete($jobSheet);

               // Update database
               $carving->jobSheet = NULL;
               $carving->save();
            }

            $destinationPath = public_path('_carvings/' . $carving->id); // upload path
            $filename = time() . '.' . $request->jobSheet->getClientOriginalExtension();
            $request->jobSheet->move($destinationPath, $filename);

            $carving->jobSheet = $filename;
            $carving->save();
         }

         if ($request->submit == 'update')
         {
            return redirect()->route('admin.carvings.index')->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.carvings.edit', $carving)->with($notification);
         }

      }

      return redirect()->route('admin.carvings.index')->with($notification);
   }


##################################################################################################################
#  ██╗   ██╗ █████╗ ██╗     ██╗██████╗  █████╗ ████████╗███████╗    ██████╗ ███████╗ ██████╗ ██╗   ██╗███████╗███████╗████████╗
#  ██║   ██║██╔══██╗██║     ██║██╔══██╗██╔══██╗╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝██╔═══██╗██║   ██║██╔════╝██╔════╝╚══██╔══╝
#  ██║   ██║███████║██║     ██║██║  ██║███████║   ██║   █████╗      ██████╔╝█████╗  ██║   ██║██║   ██║█████╗  ███████╗   ██║   
#  ╚██╗ ██╔╝██╔══██║██║     ██║██║  ██║██╔══██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║▄▄ ██║██║   ██║██╔══╝  ╚════██║   ██║   
#   ╚████╔╝ ██║  ██║███████╗██║██████╔╝██║  ██║   ██║   ███████╗    ██║  ██║███████╗╚██████╔╝╚██████╔╝███████╗███████║   ██║   
#    ╚═══╝  ╚═╝  ╚═╝╚══════╝╚═╝╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝ ╚══▀▀═╝  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   
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
      abort_unless(Gate::allows('carving-delete'), 403);

      $carvings = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($carvings as $carving_id) {
            $carvings = Carving::findOrFail($carving_id);
            $carvings->delete();
         }

         $notification = array(
            'message' => 'The selected carvings have been deleted successfully!', 
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
      abort_unless(Gate::allows('carving-delete'), 403);

      $carvings = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($carvings as $carving_id) {
            $carving = Carving::onlyTrashed()->findOrFail($carving_id);

            // Delete images from file system
            $images = DB::table('carvings_images')->where('carving_id', '=', $carving->id)->get();

            if($images) {
               foreach($images as $image) {
                  // Delete the image(s) and thumbnail(s) from storage
                  $image_path = public_path().'/_carvings/'.$carving->id.'/'.$image->name;
                  $thumbs_path = public_path().'/_carvings/'.$carving->id.'/thumbs/'.$image->name;
                  unlink($image_path);
                  unlink($thumbs_path);
               }
            }

            // Check if there are any files left in the thumbs folder, if not, delete the folder
            if (count(glob('_carvings/' . $carving->id . "/thumbs/*")) === 0 ) { // empty
               // Delete the thumbs folder
               File::deleteDirectory(public_path('_carvings/'.$carving->id.'/thumbs/'));
               // Delete the main folder
               File::deleteDirectory(public_path('_carvings/' . $carving->id));
            }

            // Delete related images from DB
            DB::table('carvings_images')->where('carving_id', '=', $carving->id)->delete();

            // Delete related materials from DB
            DB::table('carving_material')->where('carving_id', '=', $carving->id)->delete();

            // Delete related finishes from DB
            DB::table('carving_finish')->where('carving_id', '=', $carving->id)->delete();

            // Delete related tags from DB
            DB::table('carving_tag')->where('carving_id', '=', $carving->id)->delete();


            $carving->forceDelete();
            // $project->permissions()->detach();
         }

         $notification = [
            'message' => 'The selected carvings and all associated resources have been permanently deleted!',
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
      abort_unless(Gate::allows('carving-manage'), 403);

      $carving = Carving::find($id);
         $carving->views = 0;
      $carving->save();

      $notification = [
         'message' => 'The projects\'s views count was reset to 0.', 
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
      abort_unless(Gate::allows('carving-manage'), 403);

      $carvings = explode(',', $request->input('mass_resetViews_pass_checkedvalue'));

      if(!$request->input('mass_resetViews_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($carvings as $carving_id) {
            $carving = Carving::findOrFail($carving_id);
               $carving->views = 0;
            $carving->save();
         }

         $notification = [
            'message' => 'The views counts for the selected carvings have been reset successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ██████╗ ███████╗███████╗████████╗ ██████╗ ██████╗ ███████╗
#  ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
#  ██████╔╝█████╗  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
#  ██╔══██╗██╔══╝  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
#  ██║  ██║███████╗███████║   ██║   ╚██████╔╝██║  ██║███████╗
#  ╚═╝  ╚═╝╚══════╝╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
# Restore trashed file
##################################################################################################################
   public function restore($carving)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('carving-manage'), 403);

      $carving = Carving::onlyTrashed()->findOrFail($carving);
      
      // Restore the user
      $carving->restore();

      $notification = [
         'message' => 'The carving was restored successfully!', 
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
      abort_unless(Gate::allows('carving-manage'), 403);

      $carvings = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($carvings as $carving_id) {
            $carving = Carving::onlyTrashed()->findOrFail($carving_id);
            $carving->restore();
         }

         $notification = [
            'message' => 'The selected carvings have been restored successfully!', 
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
      abort_unless(Gate::allows('carving-manage'), 403);

      $carvings = Carving::onlyTrashed()->get();
      
      return view('admin.carvings.index', compact('carvings'));
   }

}
