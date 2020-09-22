<?php

// Used in the frontend for user's to reset their own password

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Auth;
use Session;
use App\Models\User;

class ResetPasswordController extends Controller
{

##################################################################################################################
#  ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
# ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
# ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
# ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
# ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#  ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct()
   {
      $this->middleware('auth');
   }


##################################################################################################################
#  ██████╗██╗  ██╗ █████╗ ███╗   ██╗ ██████╗ ███████╗    ██████╗ ██╗    ██╗██████╗ 
# ██╔════╝██║  ██║██╔══██╗████╗  ██║██╔════╝ ██╔════╝    ██╔══██╗██║    ██║██╔══██╗
# ██║     ███████║███████║██╔██╗ ██║██║  ███╗█████╗      ██████╔╝██║ █╗ ██║██║  ██║
# ██║     ██╔══██║██╔══██║██║╚██╗██║██║   ██║██╔══╝      ██╔═══╝ ██║███╗██║██║  ██║
# ╚██████╗██║  ██║██║  ██║██║ ╚████║╚██████╔╝███████╗    ██║     ╚███╔███╔╝██████╔╝
#  ╚═════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝ ╚═════╝ ╚══════╝    ╚═╝      ╚══╝╚══╝ ╚═════╝ 
##################################################################################################################
   public function edit()
   {
      // Check if user has required permission


      $user = User::findOrFail(Auth::user()->id);
      return view('UI.profile.resetPassword', compact('user'));
   }


##################################################################################################################
# ██╗   ██╗██████╗ ██████╗  █████╗ ████████╗███████╗
# ██║   ██║██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝██╔════╝
# ██║   ██║██████╔╝██║  ██║███████║   ██║   █████╗  
# ██║   ██║██╔═══╝ ██║  ██║██╔══██║   ██║   ██╔══╝  
# ╚██████╔╝██║     ██████╔╝██║  ██║   ██║   ███████╗
#  ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝
// UPDATE :: Update the specified resource in storage
##################################################################################################################
   public function update(Request $request)
   {
      // Check if user has required permission


         // $rules = [
         //    'current-password' => 
         //    [
         //       'required',
         //       'string',
         //       'min:10',             // must be at least 10 characters in length
         //       'regex:/[a-z]/',      // must contain at least one lowercase letter
         //       'regex:/[A-Z]/',      // must contain at least one uppercase letter
         //       'regex:/[0-9]/',      // must contain at least one digit
         //       'regex:/[@$!%*#?&]/', // must contain a special character,
         //    ]
         // ];

         // $customMessages = [
         //    'current-password' => 'Required',
         // ];

         // $this->validate($request, $rules, $customMessages);


      // The current password does not match the one provided
      if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
         // dd('HERE');
         Session::flash ('danger', 'Your current password does not match the password you provided. Please try again.');
         // $notification = [
         //    'message' => 'Your current password does not match the password you provided. Please try again.', 
         //    'alert-type' => 'error'
         // ];
         return redirect()->back();
         // ->with($notification);;
      }

      // Current password and new password are the same
      if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
         Session::flash ('danger', 'The new password cannot be the same as your current password. Please choose a different password.');
         // $notification = [
         //    'message' => 'The new password cannot be the same as your current password. Please choose a different password.', 
         //    'alert-type' => 'danger'
         // ];
         return redirect()->back();
         // ->with($notification);;
      }

      // The new apssword field is blank
      if($request->get('new-password') == "")
      {
         Session::flash ('danger', 'The new password cannot be blank.');
         // $notification = [
         //    'message' => 'The new password cannot be blank.', 
         //    'alert-type' => 'danger'
         // ];
         return redirect()->back();
         // ->with($notification);;
      }

      // Current password and new password are the same
      if($request->get('new-password') != $request->get('new-password_confirmation'))
      {
         Session::flash ('danger', 'The new passwords do not match.');
         // $notification = [
         //    'message' => 'The new passwords do not match.', 
         //    'alert-type' => 'danger'
         // ];
         return redirect()->back();
         // ->with($notification);;
      }

      //Change Password
      $user = Auth::user();
          $user->password = bcrypt($request->get('new-password'));
      $user->save();
      
      Session::flash ('success', 'Password changed successfully!');
      // $notification = [
      //       'message' => 'Password changed successfully!', 
      //       'alert-type' => 'success'
      //    ];
      return redirect()->route('profile.show', $user->id);
      // ->with($notification);
   }


}
