<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Finish;
use App\Models\Material;
use App\Models\Project;
use App\Models\ProjectImage;
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

class ProjectsController extends Controller
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
      abort_unless(Gate::allows('project-create'), 403);

      $project = New Project();
      $tags = Tag::where('category', Tag::IS_PROJECT)->get();

      return view('admin.projects.create', compact('project','tags'));
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
   public function destroy(Project $project)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-delete'), 403);

      // delete the permission
      $project->delete();

      $notification = [
         'message' => 'The project has been deleted successfully!', 
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
      abort_unless(Gate::allows('project-delete'), 403);

      // Delete images from file system
      $images = DB::table('projects_images')->where('project_id', '=', $id)->get();

      if($images) {
         foreach($images as $image) {
            // Delete the image(s) and thumbnail(s) from storage
            $image_path = public_path().'/_projects/'.$id.'/'.$image->name;
            $thumbs_path = public_path().'/_projects/'.$id.'/thumbs/'.$image->name;
            unlink($image_path);
            unlink($thumbs_path);
         }
      }

      // Check if there are any files left in the thumbs folder, if not, delete the folder
      if (count(glob('_projects/' . $id . "/thumbs/*")) === 0 ) { // empty
         // Delete the thumbs folder
         File::deleteDirectory(public_path('_projects/'.$id.'/thumbs/'));
         // Delete the main folder
         File::deleteDirectory(public_path('_projects/' . $id));
      }

      // Delete related images from DB
      DB::table('projects_images')->where('project_id', '=', $id)->delete();

      // Delete related materials from DB
      DB::table('material_project')->where('project_id', '=', $id)->delete();

      // Delete related finishes from DB
      DB::table('finish_project')->where('project_id', '=', $id)->delete();

      // Delete related tags from DB
      DB::table('project_tag')->where('project_id', '=', $id)->delete();

      // Delete the project from the database
      $project = Project::onlyTrashed()->findOrFail($id);
      $project->forceDelete();

      $notification = [
         'message' => 'The project, related files and DB entries were deleted successfully.', 
         'alert-type' => 'success'
      ];

      // Redirect
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
   public function edit(Project $project)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-edit'), 403);

      $project = Project::with('finishes')->with('materials')->with('images')->find($project->id);

      $materials = Material::all();
      $finishes = Finish::all();
      $tags = Tag::where('category', Tag::IS_PROJECT)->get();

      return view('admin.projects.edit', compact('project','finishes','materials','tags'));
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
      abort_unless(Gate::allows('project-manage'), 403);

      // Set the session to the current page route
      // Session::put('fromPage', url()->full());

      $projects = Project::with('images','likes','views')->orderBy('name','asc')->get();

      return view('admin.projects.index', compact('projects'));
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
   public function store(ProjectRequest $request, Project $project)
   // public function store(Project $project)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-create'), 403);

      $project->name          = $request->name;
      $project->category      = $request->category;
      $project->description   = $request->description;
      $project->width         = $request->width;
      $project->depth         = $request->depth;
      $project->height        = $request->height;
      $project->weight        = $request->weight;
      $project->completed_at  = $request->completed_at;
      $project->price         = $request->price;
      $project->time_invested = $request->time_invested;

      // Save the data
      if($project->save())
      {
         $notification = [
            'message' => 'The project has been created successfully!', 
            'alert-type' => 'success'
         ];


         // save the tags in the post_tag table
         // false required as default (otherwise override existing association)
         if (isset($request->tags))
         {
             $project->tags()->sync($request->tags, false);
         } else {
             $project->tags()->sync(array());
         }

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.projects.edit', $project)->with($notification);
         }

      }


      return redirect()->route('admin.projects.index')->with($notification);
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
   public function show(Project $project, Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-manage'), 403);

      // get previous project
      $previous = Project::where('name', '<', $project->name)->orderBy('name','asc')->max('name');
      
      if($previous){
         $p = Project::where('name', $previous)->get();
         $previous = $p[0]->id;
      }

      // get next project
      $next = Project::where('name', '>', $project->name)->orderBy('name','desc')->min('name');

      if($next){
         $n = Project::where('name', $next)->get();
         $next = $n[0]->id;
      }

      // Get the first image associated to this project
      $image = ProjectImage::where('project_id', '=', $project->id)->first();
      $tags = Tag::where('category', Tag::IS_PROJECT)->get();

      // Get all associated Audits
      $audits = $project->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.projects.show', compact('project','image','previous','next','tags','audits'));
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
   public function update(ProjectRequest $request, Project $project)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-edit'), 403);

      $project->name          = $request->name;
      $project->category      = $request->category;
      $project->description   = $request->description;
      $project->width         = $request->width;
      $project->depth         = $request->depth;
      $project->height        = $request->height;
      $project->weight        = $request->weight;
      $project->completed_at  = $request->completed_at;
      $project->price         = $request->price;
      $project->time_invested = $request->time_invested;

      // Save the data
      if($project->save())
      {
         $notification = [
            'message' => 'The project has been created successfully!', 
            'alert-type' => 'success'
         ];

         //save the tags in the databse
         // not adding 2nd param will delete all entries in array and replace them with new ones
         // check that there is something in the array and then save it else pass an empty array
         if (isset($request->tags))
         {
             $project->tags()->sync($request->tags);
         } else {
             $project->tags()->sync(array());
         }

         if ($request->submit == 'update')
         {
            return redirect()->route('admin.projects.index')->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.projects.edit', $project)->with($notification);
         }

      }

      return redirect()->route('admin.projects.index')->with($notification);
   }


##################################################################################################################
# VALIDATE REQUEST
##################################################################################################################
   // $project->update($this->validateRequest());

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
      abort_unless(Gate::allows('project-delete'), 403);

      $projects = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($projects as $project_id) {
            $projects = Project::findOrFail($project_id);
            $projects->delete();
         }

         $notification = array(
            'message' => 'The selected projects have been deleted successfully!', 
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
      abort_unless(Gate::allows('project-delete'), 403);

      $projects = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($projects as $project_id) {
            $project = Project::onlyTrashed()->findOrFail($project_id);

            // Delete images from file system
            $images = DB::table('projects_images')->where('project_id', '=', $project->id)->get();

            if($images) {
               foreach($images as $image) {
                  // Delete the image(s) and thumbnail(s) from storage
                  $image_path = public_path().'/_projects/'.$project->id.'/'.$image->name;
                  $thumbs_path = public_path().'/_projects/'.$project->id.'/thumbs/'.$image->name;
                  unlink($image_path);
                  unlink($thumbs_path);
               }
            }

            // Check if there are any files left in the thumbs folder, if not, delete the folder
            if (count(glob('_projects/' . $project->id . "/thumbs/*")) === 0 ) { // empty
               // Delete the thumbs folder
               File::deleteDirectory(public_path('_projects/'.$project->id.'/thumbs/'));
               // Delete the main folder
               File::deleteDirectory(public_path('_projects/' . $project->id));
            }

            // Delete related images from DB
            DB::table('projects_images')->where('project_id', '=', $project->id)->delete();

            // Delete related materials from DB
            DB::table('material_project')->where('project_id', '=', $project->id)->delete();

            // Delete related finishes from DB
            DB::table('finish_project')->where('project_id', '=', $project->id)->delete();

            // Delete related tags from DB
            DB::table('project_tag')->where('project_id', '=', $project->id)->delete();

            $project->forceDelete();
         }

         $notification = [
            'message' => 'The selected projects and all associated resources have been permanently deleted!',
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
      abort_unless(Gate::allows('project-manage'), 403);

      $project = Project::find($id);
         $project->views = 0;
      $project->save();

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
      abort_unless(Gate::allows('project-manage'), 403);

      $projects = explode(',', $request->input('mass_resetViews_pass_checkedvalue'));

      if(!$request->input('mass_resetViews_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($projects as $project_id) {
            $project = Project::findOrFail($project_id);
               $project->views = 0;
            $project->save();
         }

         $notification = [
            'message' => 'The views counts for the selected projects have been reset successfully!', 
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
   public function restore($project)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-manage'), 403);

      $project = Project::onlyTrashed()->findOrFail($project);
      
      // Restore the user
      $project->restore();

      $notification = [
         'message' => 'The project was restored successfully!', 
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
      abort_unless(Gate::allows('permission-manage'), 403);

      $projects = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($projects as $project_id) {
            $project = Project::onlyTrashed()->findOrFail($project_id);
            $project->restore();
         }

         $notification = [
            'message' => 'The selected permissions have been restored successfully!', 
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
      abort_unless(Gate::allows('project-manage'), 403);

      $projects = Project::onlyTrashed()->get();
      
      return view('admin.projects.index', compact('projects'));
   }

}
