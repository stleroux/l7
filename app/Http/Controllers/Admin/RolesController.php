<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Role;
use App\Permission;
use Gate;
use Illuminate\Http\Request;



class RolesController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');

      if(Gate::denies('role-manage'))
      {
         return redirect()->route('admin.roles.index');
      }
   }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      if(Gate::denies('role-manage'))
      {
         return redirect()->route('home');
      }

      $roles = Role::All();
      return view('admin.roles.index', compact('roles'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      if(Gate::denies('role-create'))
      {
         return redirect()->route('home');
      }

      $permissions = Permission::all()->groupBy('group');

      return view('admin.roles.create', compact('permissions'));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(RoleRequest $request, Role $role)
   {
      // assign values from form fields
      $role->name = $request->name;
      $role->description = $request->description;


      // Save the data
      if($role->save())
      {
         $role->permissions()->attach($request->permissions);

         $notification = array(
            'message' => 'The role has been created successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error creating the role.',
            'alert-type' => 'error'
         );
      }

      if ($request->submit == 'new')
      {
         $notification = array(
            'message' => 'The role has been updated successfully!', 
            'alert-type' => 'success'
         );

         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.roles.index')->with($notification);
   }

   /**
   * Display the specified resource.
   *
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
   public function show(Role $role)
   {
      //
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
   public function edit(Role $role)
   {
      if(Gate::denies('role-edit'))
      {
         return redirect()->route('admin.roles.index');
      }

      $permissions = Permission::all()->groupBy('group');

      return view('admin.roles.edit', compact('role','permissions'));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
   public function update(RoleRequest $request, Role $role)
   {
      // assign values from form fields
      $role->name = $request->name;
      $role->description = $request->description;
      
      // Save the data
      if($role->save())
      {
         if($role->permissions()->sync($request->permissions))
         {
            $notification = array(
               'message' => 'The role has been updated successfully!', 
               'alert-type' => 'success'
            );
         }
      } else {
         $notification = array(
            'message' => 'There was an error updating the role.',
            'alert-type' => 'error'
         );
      }

      if ($request->submit == 'continue') {
         $notification = array(
            'message' => 'The role has been updated successfully!', 
            'alert-type' => 'success'
         );

         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.roles.index')->with($notification);
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
   public function destroy(Request $request, Role $role)
   {
      // dd($role);

      if(Gate::denies('role-delete'))
      {
         return redirect()->route('admin.roles.index');
      }

      // delete the role
      if($role->delete())
      {
         $notification = array(
            'message' => 'The role was deleted successfully.',
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the role.',
            'alert-type' => 'error'
         );
      }

      return redirect()->route('admin.roles.index')->with($notification);
   }


   public function massDestroy(Request $request)
   {
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


   public function delete($id)
   {
      if(Gate::denies('role-delete'))
      {
         return redirect()->route('admin.roles.index');
      }

      $role = Role::onlyTrashed()->findOrFail($id);
      
      // delete the user
      if($role->forceDelete())
      {
         // remove the role's permissions from the permission_role table
         $role->permissions()->detach();

         $notification = array(
            'message' => 'The role was deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the role.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


   public function massDelete(Request $request)
   {
      $roles = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($roles as $role_id) {
            $role = Role::onlyTrashed()->findOrFail($role_id);
            $role->forceDelete();
            $role->permissions()->detach();
         }

         $notification = array(
            'message' => 'The selected roles have been permanently deleted!',
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


   public function restore($id)
   {
      if(Gate::denies('role-delete'))
      {
         return redirect()->route('admin.roles.index');
      }

      $role = Role::onlyTrashed()->findOrFail($id);
      
      // delete the user
      if($role->restore())
      {
         $notification = array(
            'message' => 'The role was restored successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error restoring the role.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


   public function massRestore(Request $request)
   {
      $roles = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($roles as $role_id) {
            $role = Role::onlyTrashed()->findOrFail($role_id);
            $role->restore();
         }

         $notification = array(
            'message' => 'The selected roles have been restored successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


   public function trashed()
   {
      if(Gate::denies('role-manage'))
      {
         return redirect()->route('home');
      }

      $roles = Role::onlyTrashed()->get();
      return view('admin.roles.index', compact('roles'));
   }


   public function noPermissions()
   {
      if(Gate::denies('role-manage'))
      {
         return redirect()->route('home');
      }

      $roles = Role::whereDoesntHave('permissions')->get();

      return view('admin.roles.index', compact('roles'));
   }
}
