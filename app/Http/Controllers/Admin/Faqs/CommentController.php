<?php

namespace App\Http\Controllers\Admin\Faqs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Faq;
use Auth;
use DB;
use Gate;
use Session;

class CommentController extends Controller
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
# ██████  ███████ ███████ ████████ ██████   ██████  ██    ██ 
# ██   ██ ██      ██         ██    ██   ██ ██    ██  ██  ██  
# ██   ██ █████   ███████    ██    ██████  ██    ██   ████   
# ██   ██ ██           ██    ██    ██   ██ ██    ██    ██    
# ██████  ███████ ███████    ██    ██   ██  ██████     ██    
// Remove the specified resource from storage
// Used in the index page and trashAll action to soft delete multiple records
##################################################################################################################
   public function destroy(Request $request, $id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-delete'), 403);
   
      DB::table('projects__finish_project')
         ->where('project_id', '=', $request->project_id)
         ->where('finish_id', '=', $id)
         ->delete();

      return redirect()->back();
   }


##################################################################################################################
# ███████ ████████  ██████  ██████  ███████ 
# ██         ██    ██    ██ ██   ██ ██      
# ███████    ██    ██    ██ ██████  █████   
#      ██    ██    ██    ██ ██   ██ ██      
# ███████    ██     ██████  ██   ██ ███████ 
// Store a newly created resource in storage
##################################################################################################################
   public function store(CreateCommentRequest $request, $id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('faq-create'), 403);

      $project = project::find($id);

      $comment = new Comment();
         $comment->user_id = Auth::user()->id;
         $comment->comment = $request->comment;
         $project->comments()->save($comment);
      $comment->save();

      Session::flash('success', 'Comment added succesfully.');
      return redirect()->route('projects.show', $project->id);
   }

}
