<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Models\Permission;
use DB;
use Gate;
use Illuminate\Http\Request;

class RolesController extends Controller
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
      abort_unless(Gate::allows('role-manage'), 403);

      $roles = Role::All();
      return view('admin.roles.index', compact('roles'));
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
      abort_unless(Gate::allows('role-create'), 403);

      $role = New Role();
      // $permissions = Permission::all()->groupBy('group')->orderBy('model.name', 'desc');
      $permissions = Permission::all()->sortBy("name")->groupBy('group');

      return view('admin.roles.create', compact('role','permissions'));
   }


##################################################################################################################
# ███████ ████████  ██████  ██████  ███████ 
# ██         ██    ██    ██ ██   ██ ██      
# ███████    ██    ██    ██ ██████  █████   
#      ██    ██    ██    ██ ██   ██ ██      
# ███████    ██     ██████  ██   ██ ███████ 
// Store a newly created resource in storage
##################################################################################################################
   public function store(RoleRequest $request, Role $role)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('role-create'), 403);

      // assign values from form fields
      $role->name = $request->name;
      $role->description = $request->description;

      // Save the data
      $role->save();

      $role->permissions()->attach($request->permissions);

      $notification = [
         'message' => 'The role has been created successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'new')
      {
         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.roles.index')->with($notification);
   }


##################################################################################################################
# ███████ ██   ██  ██████  ██     ██ 
# ██      ██   ██ ██    ██ ██     ██ 
# ███████ ███████ ██    ██ ██  █  ██ 
#      ██ ██   ██ ██    ██ ██ ███ ██ 
# ███████ ██   ██  ██████   ███ ███  
// Display the specified resource
##################################################################################################################
   public function show(Role $role)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('role-manage'), 403);
   }


##################################################################################################################
# ███████ ██████  ██ ████████ 
# ██      ██   ██ ██    ██    
# █████   ██   ██ ██    ██    
# ██      ██   ██ ██    ██    
# ███████ ██████  ██    ██    
// Show the form for editing the specified resource
##################################################################################################################
   public function edit(Role $role)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('role-edit'), 403);

      // $permissions = Permission::groupBy('group')->orderBy('name', 'desc')->get();
      $permissions = Permission::all()->sortBy("name")->groupBy('group');
      // dd($permissions);

      return view('admin.roles.edit', compact('role','permissions'));
   }


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
   public function update(RoleRequest $request, Role $role)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('role-edit'), 403);

      // assign values from form fields
      $role->name = $request->name;
      $role->description = $request->description;
      
      // Save the data
      $role->save();

      $role->permissions()->sync($request->permissions);

      $notification = [
         'message' => 'The role has been updated successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'continue') {
         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.roles.index')->with($notification);
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
   public function destroy(Request $request, Role $role)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('role-delete'), 403);

      // delete the role
      $role->delete();

      $notification = [
         'message' => 'The role was deleted successfully.',
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.roles.index')->with($notification);
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
      abort_unless(Gate::allows('role-delete'), 403);

      $roles = explode(',', $request->input('mass_destroy_pass_checkedvalue'));
      
      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {

         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );

      } else {
         
         foreach ($roles as $role_id) {
            $role = Role::findOrFail($role_id);
            $role->delete();
         }

         $notification = array(
            'message' => 'The selected roles have been deleted successfully!', 
            'alert-type' => 'success'
         );

      }
      
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
      abort_unless(Gate::allows('role-delete'), 403);

      $role = Role::onlyTrashed()->findOrFail($id);
      
      // delete the user
      $role->forceDelete();

      // remove the role's permissions from the permission_role table
      $role->permissions()->detach();

      $notification = [
         'message' => 'The role was deleted successfully!', 
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
      abort_unless(Gate::allows('role-delete'), 403);

      $roles = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($roles as $role_id) {
            $role = Role::onlyTrashed()->findOrFail($role_id);
            $role->forceDelete();
            $role->permissions()->detach();
         }

         $notification = [
            'message' => 'The selected roles have been permanently deleted!',
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
      abort_unless(Gate::allows('role-manage'), 403);

      $role = Role::onlyTrashed()->findOrFail($id);
      
      // Restore the user
      $role->restore();

      $notification = [
         'message' => 'The role was restored successfully!', 
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
      abort_unless(Gate::allows('role-manage'), 403);

      $roles = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($roles as $role_id) {
            $role = Role::onlyTrashed()->findOrFail($role_id);
            $role->restore();
         }

         $notification = [
            'message' => 'The selected roles have been restored successfully!', 
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
      abort_unless(Gate::allows('role-manage'), 403);

      $roles = Role::onlyTrashed()->get();
      return view('admin.roles.index', compact('roles'));
   }


##################################################################################################################
# ███    ██  ██████      ██████  ███████ ██████  ███    ███ ██ ███████ ███████ ██  ██████  ███    ██ ███████ 
# ████   ██ ██    ██     ██   ██ ██      ██   ██ ████  ████ ██ ██      ██      ██ ██    ██ ████   ██ ██      
# ██ ██  ██ ██    ██     ██████  █████   ██████  ██ ████ ██ ██ ███████ ███████ ██ ██    ██ ██ ██  ██ ███████ 
# ██  ██ ██ ██    ██     ██      ██      ██   ██ ██  ██  ██ ██      ██      ██ ██ ██    ██ ██  ██ ██      ██ 
# ██   ████  ██████      ██      ███████ ██   ██ ██      ██ ██ ███████ ███████ ██  ██████  ██   ████ ███████ 
##################################################################################################################
   public function noPermissions()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('role-manage'), 403);

      $roles = Role::whereDoesntHave('permissions')->get();

      return view('admin.roles.index', compact('roles'));
   }


##################################################################################################################
#  █████  ██████  ██████       █████  ██      ██          ██████  ███████ ██████  ███    ███ ███████
# ██   ██ ██   ██ ██   ██     ██   ██ ██      ██          ██   ██ ██      ██   ██ ████  ████ ██     
# ███████ ██   ██ ██   ██     ███████ ██      ██          ██████  █████   ██████  ██ ████ ██ ███████
# ██   ██ ██   ██ ██   ██     ██   ██ ██      ██          ██      ██      ██   ██ ██  ██  ██      ██
# ██   ██ ██████  ██████      ██   ██ ███████ ███████     ██      ███████ ██   ██ ██      ██ ███████
##################################################################################################################
   public function addAllPerms(Role $role)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('role-manage'), 403);
      
      // Get all permissions
      $permissions = Permission::all();

      // Add all permissions to this role
      $role->permissions()->sync($permissions);

      $notification = [
            'message' => 'All permissions added to the role successfully!', 
            'alert-type' => 'success'
         ];
      
      // return redirect()->route('admin.roles.index')->with($notification);
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████  ███████ ███    ███  ██████  ██    ██ ███████      █████  ██      ██          ██████  ███████ ██████  ███    ███ ███████ 
# ██   ██ ██      ████  ████ ██    ██ ██    ██ ██          ██   ██ ██      ██          ██   ██ ██      ██   ██ ████  ████ ██      
# ██████  █████   ██ ████ ██ ██    ██ ██    ██ █████       ███████ ██      ██          ██████  █████   ██████  ██ ████ ██ ███████ 
# ██   ██ ██      ██  ██  ██ ██    ██  ██  ██  ██          ██   ██ ██      ██          ██      ██      ██   ██ ██  ██  ██      ██ 
# ██   ██ ███████ ██      ██  ██████    ████   ███████     ██   ██ ███████ ███████     ██      ███████ ██   ██ ██      ██ ███████ 
##################################################################################################################
   public function removeAllPerms(Role $role)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('role-manage'), 403);
      
      // remove the role's permissions from the permission_role table
      $role->permissions()->detach();
      
      $notification = [
            'message' => 'All permissions added to the role successfully!', 
            'alert-type' => 'success'
         ];
      
      // return redirect()->route('admin.roles.index')->with($notification);
      return redirect()->back()->with($notification);
   }


}
