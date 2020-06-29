<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionSingleRequest;
use App\Http\Requests\PermissionMultipleRequest;
use App\Permission;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionsController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      // if(Gate::denies('permission-manage'))
      // {
      //    // return redirect()->route('home');
      //    abort(403);
      // }
      abort_unless(Gate::any(['permission-manage', 'permission-create']), 403);

      $permissions = Permission::all();
      return view('admin.permissions.index', compact('permissions'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      if(Gate::denies('permission-create'))
      {
         return redirect()->route('home');
      }

      return view('admin.permissions.create');
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
   public function storeSingle(PermissionSingleRequest $request, Permission $permission)
   {
      // assign values from form fields
      $permission->name = strtolower($request->name);
      $permission->group = explode("-", $request->name);
      $permission->group = strtolower($permission->group[0]);
      $permission->description = $request->description;
      
      // Save the data
      if($permission->save())
      {
         $notification = array(
            'message' => 'The permission has been created successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error creating the permission.',
            'alert-type' => 'error'
         );
      }

      return redirect()->route('admin.permissions.index')->with($notification);
   }


   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
   public function storeMultiple(PermissionMultipleRequest $request, Permission $permission)
   {
      $count = count($request->permName);

      $permission = new Permission;

      for ($i=0; $i<$count; $i++)
      {
         $data[] = array(
            'name' => strtolower($request->input('modelName') . '-' . $request->input('permName')[$i]),
            'group' => strtolower($request->input('modelName')),
            'description' => $request->input('permDescription')[$i],
            'created_at' => now(),
            'updated_at' => now()
         );
      }

      if(DB::table('permissions') -> insert($data))
         {
            $notification = array(
               'message' => 'The permissions have been created successfully!', 
               'alert-type' => 'success'
            );
         } else {
            $notification = array(
               'message' => 'There was an error creating the permissions.',
               'alert-type' => 'error'
            );
         }

      return redirect()->route('admin.permissions.index')->with($notification);
   }


   /**
   * Display the specified resource.
   *
   * @param  \App\Permission $permission
   * @return \Illuminate\Http\Response
   */
   public function show(Permission $permission)
   {
      //
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Permission $permission
   * @return \Illuminate\Http\Response
   */
   public function edit(Permission $permission)
   {
      if(Gate::denies('permission-edit'))
      {
         return redirect()->route('admin.permissions.index');
      }

      return view('admin.permissions.edit', compact('permission'));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \App\Permission $permission
   * @return \Illuminate\Http\Response
   */
   public function update(PermissionRequest $request, Permission $permission)
   {
      // assign values from form fields
      $permission->name = $request->name;
      $permission->group = explode("-", $request->name);
      $permission->group = $permission->group[0];
      $permission->description = $request->description;
      
      if($permission->save()){
         $notification = array(
            'message' => 'The permission has been updated successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error updating the permission.',
            'alert-type' => 'error'
         );
      }

      if ($request->submit == 'continue') {
         $notification = array(
            'message' => 'The permission has been updated successfully!', 
            'alert-type' => 'success'
         );

         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.permissions.index')->with($notification);
   }


   /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Permission $permission
   * @return \Illuminate\Http\Response
   */
   public function destroy(Permission $permission)
   {
      if(Gate::denies('permission-delete'))
      {
         return redirect()->route('admin.permissions.index');
      }

      // delete the permission
      if($permission->delete())
      {
         $notification = array(
            'message' => 'The permission has been deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the permission.',
            'alert-type' => 'error'
         );
      }

      return redirect()->route('admin.permissions.index')->with($notification);
   }


   public function massDestroy(Request $request)
   {
      $permissions = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($permissions as $permission_id) {
            $permission = Permission::findOrFail($permission_id);
            $permission->delete();
         }

         $notification = array(
            'message' => 'The selected permissions have been deleted successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }

}
