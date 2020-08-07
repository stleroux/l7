<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Comment;
use App\Models\Admin\Category;
use App\Models\Admin\Projects\Project;
use App\Models\Admin\Projects\Finish;
use App\Models\Admin\Projects\Material;
use App\Models\Admin\Projects\Image;
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
      abort_unless(Gate::allows('project-create'), 403);

      $project = New Project();

      return view('admin.projects.projects.create', compact('project'));
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

      // return redirect()->route('admin.projects.index')->with($notification);
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
      abort_unless(Gate::allows('project-delete'), 403);

      // Delete images from file system
      $images = DB::table('projects__images')->where('project_id', '=', $id)->get();

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
      DB::table('projects__images')->where('project_id', '=', $id)->delete();

      // Delete related materials from DB
      DB::table('projects__material_project')->where('project_id', '=', $id)->delete();

      // Delete related finishes from DB
      DB::table('projects__finish_project')->where('project_id', '=', $id)->delete();

      // Delete the project from the database
      $project = Project::onlyTrashed()->findOrFail($id);
      $project->forceDelete();

      // Set flash data with success message
      // Session::flash('delete','The project, related files and DB entries were deleted successfully.');
      $notification = [
         'message' => 'The project, related files and DB entries were deleted successfully.', 
         'alert-type' => 'success'
      ];
      // Redirect
      // return redirect()->route('admin.projects.index')->with($notification);
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
   public function edit(Project $project)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-edit'), 403);

      $project = Project::with('finishes')->with('materials')->with('images')->find($project->id);

      $materials = Material::all();
      $finishes = Finish::all();

      return view('admin.projects.projects.edit', compact('project','finishes','materials'));
   }


##################################################################################################################
# ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
# ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
# ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
# ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
# ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
# ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
// Display a list of resources
##################################################################################################################
      // public function index($filter = null)
      // {
      //     // Check if user has required permission
      //     if($this->enablePermissions)
      //     {
      //         if(!checkPerm('project_index')) { abort(401, 'Unauthorized Access'); }
      //     }

      //     // Set the session to the current page route
      //     Session::put('fromPage', url()->full());

      //     $project = New Project();

      //     if($filter) {
      //         if($filter == 1000) {
      //             $projects = Project::with('images')->orderBy('id','desc')->take(4)->get();
      //             return view('projects.index', compact('projects','project'));
      //         }

      //         $projects = Project::with('images')->where('category', '=', $filter)->paginate(8);

      //     } else {
      //         $projects = Project::with('images')->orderBy('name','asc')->paginate(8);
      //     }
            
      //     return view('projects.index', compact('projects','project'));
      // }


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
      abort_unless(Gate::allows('project-manage'), 403);

      // Set the session to the current page route
      // Session::put('fromPage', url()->full());

      $projects = Project::with('images')->orderBy('name','asc')->get();

      return view('admin.projects.projects.index', compact('projects'));
   }


##################################################################################################################
# ███████ ████████  ██████  ██████  ███████ 
# ██         ██    ██    ██ ██   ██ ██      
# ███████    ██    ██    ██ ██████  █████   
#      ██    ██    ██    ██ ██   ██ ██      
# ███████    ██     ██████  ██   ██ ███████ 
// Store a newly created resource in storage
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
      $project->save();

      $notification = [
         'message' => 'The project has been created successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.projects.index')->with($notification);
   }


##################################################################################################################
# ███████ ██   ██  ██████  ██     ██ 
# ██      ██   ██ ██    ██ ██     ██ 
# ███████ ███████ ██    ██ ██  █  ██ 
#      ██ ██   ██ ██    ██ ██ ███ ██ 
# ███████ ██   ██  ██████   ███ ███  
// Display the specified resource
##################################################################################################################
   public function show(Project $project, Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('project-manage'), 403);

      // Increase the view count if viewed from the frontend
      // if (url()->previous() != url('/projects/list')) {
      //     DB::table('projects__projects')->where('id','=',$project->id)->increment('views',1);
      // }

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
      $image = Image::where('project_id', '=', $project->id)->first();

      return view('admin.projects.projects.show', compact('project','image','previous','next'));
   }


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
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
      $project->save();

      $notification = [
         'message' => 'The project has been created successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.projects.index')->with($notification);
   }


##################################################################################################################
#██╗   ██╗ █████╗ ██╗     ██╗██████╗  █████╗ ████████╗███████╗    ██████╗ ███████╗ ██████╗ ██╗   ██╗███████╗███████╗████████╗
#██║   ██║██╔══██╗██║     ██║██╔══██╗██╔══██╗╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝██╔═══██╗██║   ██║██╔════╝██╔════╝╚══██╔══╝
#██║   ██║███████║██║     ██║██║  ██║███████║   ██║   █████╗      ██████╔╝█████╗  ██║   ██║██║   ██║█████╗  ███████╗   ██║   
#╚██╗ ██╔╝██╔══██║██║     ██║██║  ██║██╔══██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║▄▄ ██║██║   ██║██╔══╝  ╚════██║   ██║   
# ╚████╔╝ ██║  ██║███████╗██║██████╔╝██║  ██║   ██║   ███████╗    ██║  ██║███████╗╚██████╔╝╚██████╔╝███████╗███████║   ██║   
#  ╚═══╝  ╚═╝  ╚═╝╚══════╝╚═╝╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝ ╚══▀▀═╝  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   
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
# ███    ███  █████  ███████ ███████     ██████  ███████ ███████ ████████ ██████   ██████  ██    ██ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██         ██    ██   ██ ██    ██  ██  ██  
# ██ ████ ██ ███████ ███████ ███████     ██   ██ █████   ███████    ██    ██████  ██    ██   ████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██           ██    ██    ██   ██ ██    ██    ██    
# ██      ██ ██   ██ ███████ ███████     ██████  ███████ ███████    ██    ██   ██  ██████     ██    
   ##################################################################################################################
   public function massDestroy(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('permission-delete'), 403);

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
# ███    ███  █████  ███████ ███████     ██████  ███████ ██      ███████ ████████ ███████ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██      ██         ██    ██      
# ██ ████ ██ ███████ ███████ ███████     ██   ██ █████   ██      █████      ██    █████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██      ██      ██         ██    ██      
# ██      ██ ██   ██ ███████ ███████     ██████  ███████ ███████ ███████    ██    ███████ 
##################################################################################################################
   public function massDelete(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('permission-delete'), 403);

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
$images = DB::table('projects__images')->where('project_id', '=', $project->id)->get();

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
DB::table('projects__images')->where('project_id', '=', $project->id)->delete();

// Delete related materials from DB
DB::table('projects__material_project')->where('project_id', '=', $project->id)->delete();

// Delete related finishes from DB
DB::table('projects__finish_project')->where('project_id', '=', $project->id)->delete();



            $project->forceDelete();
            // $project->permissions()->detach();
         }

         $notification = [
            'message' => 'The selected projects and all associated resources have been permanently deleted!',
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
      abort_unless(Gate::allows('project-manage'), 403);

      $project = Project::onlyTrashed()->findOrFail($id);
      
      // Restore the user
      $project->restore();

      $notification = [
         'message' => 'The project was restored successfully!', 
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
      abort_unless(Gate::allows('project-manage'), 403);

      $projects = Project::onlyTrashed()->get();
      return view('admin.projects.projects.index', compact('projects'));
   }
}