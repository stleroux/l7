<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\InvoicerClient;
use App\Models\Role;
use App\Models\User;
use App\Notifications\User\AccountApprovedNotification;
use App\Notifications\User\AccountDisabledNotification;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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
      abort_unless(Gate::allows('user-manage'), 403);

      $users = User::All();
      return view('admin.users.index', compact('users'));
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
      abort_unless(Gate::allows('user-create'), 403);

      $user = new User();
      $roles = Role::all();

      return view('admin.users.create', compact('roles','user'));
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
   public function store(UserRequest $request, User $user)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-create'), 403);

      // assign values from form fields
      $user->first_name = $request->first_name;
      $user->last_name = $request->last_name;
      $user->email = $request->email;

      if($request->password) {
         $user->password = Hash::make($request->password);
      } else {
         $user->password = Hash::make('password');
      }

      $user->account_status = User::IS_DISABLED;
      $user->public_email = 1;
      $user->telephone = $request->telephone;
      $user->cell = $request->cell;
      $user->fax = $request->fax;
      $user->website = $request->website;
      $user->company_name = $request->company_name;
      // Image
      $user->address_1 = $request->address_1;
      $user->address_2 = $request->address_2;
      $user->city = $request->city;
      $user->province = $request->province;
      $user->postal_code = $request->postal_code;
      $user->notes = $request->notes;
      $user->dart_doubleOut = $request->dart_doubleOut;
      $user->invoicer_client = (!isset($request->invoicer_client)) ? 0 : 1;


      // Save the data
      if($user->save())
      {
         $user->roles()->attach($request->roles);
         
         $notification = array(
            'message' => 'The user has been created successfully!', 
            'alert-type' => 'success'
         );


         if($user->invoicer_client){
            // save the data in the Invoicer client database table
            $client = new InvoicerClient;
               $client->company_name = $request->company_name;
               $client->contact_name = $request->first_name . ' ' . $request->last_name;
               $client->address = $request->address;
               $client->city = $request->city;
               $client->state = $request->state;
               $client->zip = $request->zip;
               $client->notes = $request->notes;
               $client->telephone = $request->telephone;
               $client->cell = $request->cell;
               $client->fax = $request->fax;
               $client->email = $request->email;
               $client->website = $request->website;
            $client->save();

         }

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.users.edit', $user)->with($notification);
         }

      } else {
         $notification = array(
            'message' => 'There was an error creating the user.',
            'alert-type' => 'error'
         );
      }

      return redirect()->route('admin.users.index')->with($notification);
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
   public function show(User $user)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $roles = Role::all();

      // Get all associated Audits
      $audits = $user->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.users.show', compact('user','roles','audits'));

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
   public function edit(User $user)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-edit'), 403);

      $roles = Role::all();

      return view('admin.users.edit', compact('user', 'roles'));
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
   public function update(UserRequest $request, User $user)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-edit'), 403);

      // used to email user is accoutn status changes
      $account_status = $user->account_status;

      // assign values from form fields
      $user->first_name = $request->first_name;
      $user->last_name = $request->last_name;
      $user->email = $request->email;
      if($request->password)
      {
         $user->password = Hash::make($request->password);
      }
      
      $user->account_status = (isset($request->account_status)) ? User::IS_DISABLED : User::IS_ENABLED ;

      $user->public_email = (!isset($request->public_email)) ? 0 : 1 ;
      $user->telephone = $request->telephone;
      $user->cell = $request->cell;
      $user->fax = $request->fax;
      $user->website = $request->website;
      $user->invoicer_client = (!isset($request->invoicer_client)) ? 0 : 1 ;
      $user->company_name = $request->company_name;
      // Image
      $user->address_1 = $request->address_1;
      $user->address_2 = $request->address_2;
      $user->city = $request->city;
      $user->province = $request->province;
      $user->postal_code = $request->postal_code;
      $user->notes = $request->notes;
      $user->dart_doubleOut = $request->dart_doubleOut;
      
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

      // account goes from disabled to active
      if($account_status == User::IS_DISABLED && $user->account_status == User::IS_ENABLED)
      {
         // notify user via email
         $user->notify(new AccountApprovedNotification($user));
      }

      // account goes from active to disabled
      if($account_status == User::IS_ENABLED && $user->account_status == User::IS_DISABLED)
      {
         // notify user via email
         $user->notify(new AccountDisabledNotification($user));
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

##################################################################################################################
#  ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
#  ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
#  ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
#  ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
#  ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
#  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
# Remove the specified resource from storage
##################################################################################################################
   
   public function destroy(Request $request, User $user)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-delete'), 403);

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
      abort_unless(Gate::allows('user-delete'), 403);

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
      abort_unless(Gate::allows('user-delete'), 403);

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
      abort_unless(Gate::allows('user-manage'), 403);

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
      abort_unless(Gate::allows('user-manage'), 403);

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
      abort_unless(Gate::allows('user-delete'), 403);

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
      abort_unless(Gate::allows('user-manage'), 403);

      $users = User::onlyTrashed()->get();
      return view('admin.users.index', compact('users'));
   }


##################################################################################################################
#  ███╗   ██╗ ██████╗     ██████╗  ██████╗ ██╗     ███████╗███████╗
#  ████╗  ██║██╔═══██╗    ██╔══██╗██╔═══██╗██║     ██╔════╝██╔════╝
#  ██╔██╗ ██║██║   ██║    ██████╔╝██║   ██║██║     █████╗  ███████╗
#  ██║╚██╗██║██║   ██║    ██╔══██╗██║   ██║██║     ██╔══╝  ╚════██║
#  ██║ ╚████║╚██████╔╝    ██║  ██║╚██████╔╝███████╗███████╗███████║
#  ╚═╝  ╚═══╝ ╚═════╝     ╚═╝  ╚═╝ ╚═════╝ ╚══════╝╚══════╝╚══════╝
##################################################################################################################
   public function noRoles()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $users = User::whereDoesntHave('roles')->get();

      return view('admin.users.index', compact('users'));
   }


##################################################################################################################
#   █████╗ ██████╗ ██████╗ ██████╗  ██████╗ ██╗   ██╗███████╗██████╗ 
#  ██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔═══██╗██║   ██║██╔════╝██╔══██╗
#  ███████║██████╔╝██████╔╝██████╔╝██║   ██║██║   ██║█████╗  ██║  ██║
#  ██╔══██║██╔═══╝ ██╔═══╝ ██╔══██╗██║   ██║╚██╗ ██╔╝██╔══╝  ██║  ██║
#  ██║  ██║██║     ██║     ██║  ██║╚██████╔╝ ╚████╔╝ ███████╗██████╔╝
#  ╚═╝  ╚═╝╚═╝     ╚═╝     ╚═╝  ╚═╝ ╚═════╝   ╚═══╝  ╚══════╝╚═════╝ 
# Lists approved users
##################################################################################################################
   public function approved()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $users = User::approved()->get();

      return view('admin.users.index', compact('users'));
   }


##################################################################################################################
#  ██████╗ ██╗███████╗ █████╗ ██████╗ ██╗     ███████╗██████╗ 
#  ██╔══██╗██║██╔════╝██╔══██╗██╔══██╗██║     ██╔════╝██╔══██╗
#  ██║  ██║██║███████╗███████║██████╔╝██║     █████╗  ██║  ██║
#  ██║  ██║██║╚════██║██╔══██║██╔══██╗██║     ██╔══╝  ██║  ██║
#  ██████╔╝██║███████║██║  ██║██████╔╝███████╗███████╗██████╔╝
#  ╚═════╝ ╚═╝╚══════╝╚═╝  ╚═╝╚═════╝ ╚══════╝╚══════╝╚═════╝ 
# Lists disabled users
##################################################################################################################
   public function disabled()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $users = User::disabled()->get();

      return view('admin.users.index', compact('users'));
   }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗     █████╗ ██████╗ ██████╗ ██████╗  ██████╗ ██╗   ██╗███████╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔═══██╗██║   ██║██╔════╝
#  ██╔████╔██║███████║███████╗███████╗    ███████║██████╔╝██████╔╝██████╔╝██║   ██║██║   ██║█████╗  
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██╔══██║██╔═══╝ ██╔═══╝ ██╔══██╗██║   ██║╚██╗ ██╔╝██╔══╝  
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██║  ██║██║     ██║     ██║  ██║╚██████╔╝ ╚████╔╝ ███████╗
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═╝  ╚═╝╚═╝     ╚═╝     ╚═╝  ╚═╝ ╚═════╝   ╚═══╝  ╚══════╝
##################################################################################################################
   public function massApprove(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $users = explode(',', $request->input('mass_approve_pass_checkedvalue'));

      if(!$request->input('mass_approve_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($users as $user_id) {

            $user = User::findOrFail($user_id);
               $user->account_status = User::IS_ENABLED;
            $user->save();

            $user->notify(new AccountApprovedNotification($user));

         }

         $notification = array(
            'message' => 'The selected users have been approved successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
#  ███╗   ███╗ █████╗ ███████╗███████╗    ██████╗ ██╗███████╗ █████╗ ██████╗ ██╗     ███████╗
#  ████╗ ████║██╔══██╗██╔════╝██╔════╝    ██╔══██╗██║██╔════╝██╔══██╗██╔══██╗██║     ██╔════╝
#  ██╔████╔██║███████║███████╗███████╗    ██║  ██║██║███████╗███████║██████╔╝██║     █████╗  
#  ██║╚██╔╝██║██╔══██║╚════██║╚════██║    ██║  ██║██║╚════██║██╔══██║██╔══██╗██║     ██╔══╝  
#  ██║ ╚═╝ ██║██║  ██║███████║███████║    ██████╔╝██║███████║██║  ██║██████╔╝███████╗███████╗
#  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═════╝ ╚═╝╚══════╝╚═╝  ╚═╝╚═════╝ ╚══════╝╚══════╝
##################################################################################################################
   public function massDisable(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $users = explode(',', $request->input('mass_disable_pass_checkedvalue'));

      if(!$request->input('mass_disable_pass_checkedvalue'))
      {
         $notification = array(
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         );
      } else {
         
         foreach ($users as $user_id) {
            $user = User::findOrFail($user_id);
               $user->account_status = User::IS_DISABLED;
            $user->save();

            $user->notify(new AccountDisabledNotification($user));
         }

         $notification = array(
            'message' => 'The selected users have been restored successfully!', 
            'alert-type' => 'success'
         );
      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
#   █████╗ ██████╗ ██████╗ ██████╗  ██████╗ ██╗   ██╗███████╗
#  ██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔═══██╗██║   ██║██╔════╝
#  ███████║██████╔╝██████╔╝██████╔╝██║   ██║██║   ██║█████╗  
#  ██╔══██║██╔═══╝ ██╔═══╝ ██╔══██╗██║   ██║╚██╗ ██╔╝██╔══╝  
#  ██║  ██║██║     ██║     ██║  ██║╚██████╔╝ ╚████╔╝ ███████╗
#  ╚═╝  ╚═╝╚═╝     ╚═╝     ╚═╝  ╚═╝ ╚═════╝   ╚═══╝  ╚══════╝
##################################################################################################################
   public function approve(UserRequest $request, User $user)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $account_status = $user->account_status;

      $user = User::findOrFail($user->id);
         $user->account_status = User::IS_ENABLED;
      $user->save();

      // if($account_status == 0 && $user->account_status == 1)
      if($account_status == User::IS_DISABLED && $user->account_status == User::IS_ENABLED)
      {
         $user->notify(new AccountApprovedNotification($user));
      }

      $notification = array(
         'message' => 'The user has been approved!',
         'alert-type' => 'success'
      );

      return redirect()->back()->with($notification);
   }

##################################################################################################################
#  ██████╗ ██╗███████╗ █████╗ ██████╗ ██╗     ███████╗
#  ██╔══██╗██║██╔════╝██╔══██╗██╔══██╗██║     ██╔════╝
#  ██║  ██║██║███████╗███████║██████╔╝██║     █████╗  
#  ██║  ██║██║╚════██║██╔══██║██╔══██╗██║     ██╔══╝  
#  ██████╔╝██║███████║██║  ██║██████╔╝███████╗███████╗
#  ╚═════╝ ╚═╝╚══════╝╚═╝  ╚═╝╚═════╝ ╚══════╝╚══════╝
##################################################################################################################
   public function disable(UserRequest $request, User $user)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('user-manage'), 403);

      $account_status = $user->account_status;

      $user = User::findOrFail($user->id);
         $user->account_status = User::IS_DISABLED;
      $user->save();

      // if($account_status == 1 && $user->account_status == 0)
      if($account_status == User::IS_ENABLED && $user->account_status == User::IS_DISABLED)
      {
         $user->notify(new AccountDisabledNotification($user));
      }


      $notification = array(
         'message' => 'The user has been disabled!',
         'alert-type' => 'success'
      );

      return redirect()->back()->with($notification);
   }

}
