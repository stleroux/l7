<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Role;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
      
      if(Gate::denies('user-manage'))
      {
         return redirect()->route('admin.users.index');
      }
   }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      if(Gate::denies('user-manage'))
      {
         return redirect()->route('home');
      }

      $users = User::All();
      return view('admin.users.index', compact('users'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      if(Gate::denies('user-create'))
      {
         return redirect()->route('home');
      }

      $roles = Role::all();

      return view('admin.users.create', compact('roles'));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(UserRequest $request, User $user)
   {
      // assign values from form fields
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make('password');

      // Save the data
      if($user->save())
      {
         $user->roles()->attach($request->roles);
         
         $notification = array(
            'message' => 'The user has been created successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error creating the user.',
            'alert-type' => 'error'
         );
      }

      if ($request->submit == 'new')
      {
         $notification = array(
            'message' => 'The user has been updated successfully!', 
            'alert-type' => 'success'
         );

         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.users.index')->with($notification);
   }

   /**
   * Display the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
   public function show(User $user)
   {
      //
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
   public function edit(User $user)
   {
      if(Gate::denies('user-edit'))
      {
         return redirect()->route('admin.users.index');
      }

      $roles = Role::all();

      return view('admin.users.edit', compact('user', 'roles'));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
   public function update(UserRequest $request, User $user)
   {
      // assign values from form fields
      $user->name = $request->name;
      $user->email = $request->email;
      
      // Save the data
      if($user->save())
      {
         if($user->roles()->sync($request->roles))
         {
            $notification = array(
               'message' => 'The user has been updated successfully!', 
               'alert-type' => 'success'
            );
         }
      } else {
         $notification = array(
            'message' => 'There was an error updating the user.',
            'alert-type' => 'error'
         );
      }

      if ($request->submit == 'continue') {
         $notification = array(
            'message' => 'The user has been updated successfully!', 
            'alert-type' => 'success'
         );

         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.users.index')->with($notification);
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
   public function destroy(Request $request, User $user)
   {
      if(Gate::denies('user-delete'))
      {
         return redirect()->route('admin.users.index');
      }

      // delete the user
      if($user->delete())
      {
         $notification = array(
            'message' => 'The user was deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the user.',
            'alert-type' => 'error'
         );
      }

      return redirect()->route('admin.users.index')->with($notification);
   }


   public function massDestroy(Request $request)
   {
      $users = explode(',', $request->input('mass_destroy_pass_checkedvalue'));

      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($users as $user_id) {
            $user = User::findOrFail($user_id);
            $user->delete();
         }

         $notification = array(
            'message' => 'The selected users have been deleted successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


   public function delete($id)
   {
      if(Gate::denies('user-delete'))
      {
         return redirect()->route('admin.users.index');
      }

      $user = User::onlyTrashed()->findOrFail($id);
      
      // delete the user
      if($user->forceDelete())
      {
         // remove the user's roles from the role_user table
         $user->roles()->detach();

         $notification = array(
            'message' => 'The user was deleted successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error deleting the user.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


   public function restore($id)
   {
      if(Gate::denies('user-delete'))
      {
         return redirect()->route('admin.users.index');
      }

      $user = User::onlyTrashed()->findOrFail($id);
      
      // restore the user
      if($user->restore())
      {
         $notification = array(
            'message' => 'The user was restored successfully!', 
            'alert-type' => 'success'
         );
      } else {
         $notification = array(
            'message' => 'There was an error restoring the user.',
            'alert-type' => 'error'
         );
      }

      return redirect()->back()->with($notification);
   }


   public function massRestore(Request $request)
   {
      $users = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($users as $user_id) {
            $user = User::onlyTrashed()->findOrFail($user_id);
            $user->restore();
         }

         $notification = array(
            'message' => 'The selected users have been restored successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


   public function massDelete(Request $request)
   {
      $users = explode(',', $request->input('mass_delete_pass_checkedvalue'));

      if(!$request->input('mass_delete_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($users as $user_id) {
            $user = User::onlyTrashed()->findOrFail($user_id);
            $user->forceDelete();
            $user->roles()->detach();
         }

         $notification = array(
            'message' => 'The selected users have been permanently deleted!',
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


   public function trashed()
   {
      if(Gate::denies('user-manage'))
      {
         return redirect()->route('home');
      }

      $users = User::onlyTrashed()->get();
      return view('admin.users.index', compact('users'));
   }


   public function noRoles()
   {
      if(Gate::denies('user-manage'))
      {
         return redirect()->route('home');
      }

      $users = User::whereDoesntHave('roles')->get();

      return view('admin.users.index', compact('users'));
   }


}
