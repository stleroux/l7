<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use Illuminate\Http\Request;
use App\Models\Tag;
use Gate;

class TagsController extends Controller
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
      // Check if user has required permission
      abort_unless(Gate::allows('tag-manage'), 403);

      $tag = New Tag();
      $tags = Tag::all();
      
      return view('admin.tags.index', compact('tag','tags'));
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
      // Check if user has required tag
      abort_unless(Gate::allows('tag-create'), 403);

      $tag = New Tag();
      
      return view('admin.tags.create', compact('tag'));
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
   public function store(TagRequest $request, Tag $tag)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('tag-create'), 403);

      // assign values from form fields
      $tag->name = $request->name;
      $tag->category = $request->category;
      
      if($tag->save())
      {
        $notification = [
           'message' => 'The tag has been created successfully!', 
           'alert-type' => 'success'
        ];

        if ($request->submit == 'new')
        {
            return redirect()->back()->with($notification);
        }

        if ($request->submit == 'continue')
        {
          return redirect()->route('admin.tags.edit', $tag)->with($notification);
        }

      }

      return redirect()->route('admin.tags.index')->with($notification);
   }


##################################################################################################################
# SHOW
# Display the specified resource
##################################################################################################################
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    // Get all associated Audits
      // $audits = $tag->audits()->with('user')->orderBy('id','desc')->get();


##################################################################################################################
#  ███████╗██████╗ ██╗████████╗
#  ██╔════╝██╔══██╗██║╚══██╔══╝
#  █████╗  ██║  ██║██║   ██║   
#  ██╔══╝  ██║  ██║██║   ██║   
#  ███████╗██████╔╝██║   ██║   
#  ╚══════╝╚═════╝ ╚═╝   ╚═╝   
# Show the form for editing the specified resource
##################################################################################################################
   public function edit(Tag $tag)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('tag-edit'), 403);

      return view('admin.tags.edit', compact('tag'));
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
   public function update(TagRequest $request, Tag $tag)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('tag-edit'), 403);

      // assign values from form fields
      $tag->name = $request->name;
      $tag->category = $request->category;
      
      // Save the data
      $tag->save();

      $notification = [
         'message' => 'The tag has been updated successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'continue') {
         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.tags.index')->with($notification);
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
   public function destroy(Request $request, Tag $tag)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('tag-delete'), 403);

      // delete the role
      $tag->delete();

      $notification = [
         'message' => 'The tag was deleted successfully.',
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.tags.index')->with($notification);
   }


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
      abort_unless(Gate::allows('tag-delete'), 403);

      $tags = explode(',', $request->input('mass_destroy_pass_checkedvalue'));
      
      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {

         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );

      } else {
         
         foreach ($tags as $tag_id) {
            $tag = Tag::findOrFail($tag_id);
            $tag->delete();
         }

         $notification = array(
            'message' => 'The selected tags have been deleted successfully!', 
            'alert-type' => 'success'
         );

      }
      
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
      abort_unless(Gate::allows('tag-delete'), 403);

      $tag = Tag::onlyTrashed()->findOrFail($id);
      
      // delete the user
      $tag->forceDelete();

      // remove the role's permissions from the permission_role table
      $tag->posts()->detach();

      $notification = [
         'message' => 'The tag was deleted successfully!', 
         'alert-type' => 'success'
      ];

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
      abort_unless(Gate::allows('tag-delete'), 403);

      $tags = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($tags as $tag_id) {
            $tag = Tag::onlyTrashed()->findOrFail($tag_id);
            $tag->forceDelete();
            $tag->posts()->detach();
         }

         $notification = [
            'message' => 'The selected tags have been permanently deleted!',
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
   public function restore($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('tag-manage'), 403);

      $tag = Tag::onlyTrashed()->findOrFail($id);
      
      // Restore the user
      $tag->restore();

      $notification = [
         'message' => 'The tag was restored successfully!', 
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
      abort_unless(Gate::allows('tag-manage'), 403);

      $tags = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($tags as $tag_id) {
            $tag = Tag::onlyTrashed()->findOrFail($tag_id);
            $tag->restore();
         }

         $notification = [
            'message' => 'The selected tags have been restored successfully!', 
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
      abort_unless(Gate::allows('tag-manage'), 403);

      $tags = Tag::onlyTrashed()->get();
      return view('admin.tags.index', compact('tags'));
   }


}
