<?php

namespace App\Http\Controllers\UI\Projects;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Project;
use Auth;
use DB;
use Session;

class CommentController extends Controller
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
# DESTROY
// Remove the specified resource from storage
// Used in the index page and trashAll action to soft delete multiple records
##################################################################################################################
   // public function destroy(Request $request, $id)
   // {
   //    // Check if user has required module
   
   //    DB::table('projects__finish_project')
   //       ->where('project_id', '=', $request->project_id)
   //       ->where('finish_id', '=', $id)
   //       ->delete();

   //    return redirect()->back();
   // }


##################################################################################################################
#  ███████╗████████╗ ██████╗ ██████╗ ███████╗
#  ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
#  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
#  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
#  ███████║   ██║   ╚██████╔╝██║  ██║███████╗
#  ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
# Store a newly created resource in storage
##################################################################################################################
   public function store(CreateCommentRequest $request, $id)
   {
      // Check if user has required module


      $project = project::find($id);

      $comment = new Comment();
         $comment->user_id = Auth::user()->id;
         $comment->comment = $request->comment;
      $project->comments()->save($comment);

      $notification = [
         'message' => 'The comment has been added successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->route('projects.show', $project->id)->with($notification);
   }

}
