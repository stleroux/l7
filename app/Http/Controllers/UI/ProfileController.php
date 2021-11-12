<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Auth;
use File;
use Illuminate\Http\Request;
use Image;
use Session;

class ProfileController extends Controller
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
# ██████╗ ███████╗██╗     ███████╗████████╗███████╗    ██╗███╗   ███╗ █████╗  ██████╗ ███████╗
# ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝    ██║████╗ ████║██╔══██╗██╔════╝ ██╔════╝
# ██║  ██║█████╗  ██║     █████╗     ██║   █████╗      ██║██╔████╔██║███████║██║  ███╗█████╗  
# ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝      ██║██║╚██╔╝██║██╔══██║██║   ██║██╔══╝  
# ██████╔╝███████╗███████╗███████╗   ██║   ███████╗    ██║██║ ╚═╝ ██║██║  ██║╚██████╔╝███████╗
# ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝    ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝ ╚═════╝ ╚══════╝
##################################################################################################################
   public function deleteImage()
   {
      // Find the user
      $user = User::find(Auth::user()->id);

      // Delete the image from the system
      File::delete('_profiles/' . $user->image);
      
      // Update database
      $user->image = NULL;
      $user->save();

      // Set flash data with success message and return user to same tab
      $notification = array(
         'message' => 'Your profile image was successfully removed!',
         'alert-type' => 'error'
      );

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ███████╗██████╗ ██╗████████╗
# ██╔════╝██╔══██╗██║╚══██╔══╝
# █████╗  ██║  ██║██║   ██║   
# ██╔══╝  ██║  ██║██║   ██║   
# ███████╗██████╔╝██║   ██║   
# ╚══════╝╚═════╝ ╚═╝   ╚═╝   
// Show the form for editing the specified resource
##################################################################################################################
   public function edit(Request $request, User $user)
   {
      $user = Auth::user();

      return view('UI.profile.edit', compact('user'));
   }


##################################################################################################################
# ██████╗ ███████╗███████╗███████╗████████╗    ███████╗███████╗████████╗████████╗██╗███╗   ██╗ ██████╗ ███████╗
# ██╔══██╗██╔════╝██╔════╝██╔════╝╚══██╔══╝    ██╔════╝██╔════╝╚══██╔══╝╚══██╔══╝██║████╗  ██║██╔════╝ ██╔════╝
# ██████╔╝█████╗  ███████╗█████╗     ██║       ███████╗█████╗     ██║      ██║   ██║██╔██╗ ██║██║  ███╗███████╗
# ██╔══██╗██╔══╝  ╚════██║██╔══╝     ██║       ╚════██║██╔══╝     ██║      ██║   ██║██║╚██╗██║██║   ██║╚════██║
# ██║  ██║███████╗███████║███████╗   ██║       ███████║███████╗   ██║      ██║   ██║██║ ╚████║╚██████╔╝███████║
# ╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝   ╚═╝       ╚══════╝╚══════╝   ╚═╝      ╚═╝   ╚═╝╚═╝  ╚═══╝ ╚═════╝ ╚══════╝
##################################################################################################################
   // public function resetPreferences(Request $request, $id)
   // {
   //    $user = User::findOrFail($id);
   //       $user->frontendStyle = 'slate';
   //       $user->backendStyle = 'bootstrap';
   //       $user->author_format = 1;
   //       $user->alert_fade_time = 5000;
   //       $user->date_format = 1;
   //       $user->landing_page_id = 41;
   //       $user->rows_per_page = 15;
   //       $user->display_size = 'normal';
   //       $user->action_buttons = 1;
   //       $user->layout = 1;
   //    $user->save();
      
   //    Session::flash('success','Your preferences have been reset to their default values successfully.');
   //    return redirect()->back();
   // }


##################################################################################################################
# ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
# ██╔════╝██║  ██║██╔═══██╗██║    ██║
# ███████╗███████║██║   ██║██║ █╗ ██║
# ╚════██║██╔══██║██║   ██║██║███╗██║
# ███████║██║  ██║╚██████╔╝╚███╔███╔╝
# ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
// Display the specified resource
##################################################################################################################
    public function show($profile=null)
    {
      // Find the user
      if($profile){
         $user = User::findOrFail($profile);
      } else {
         $user = User::findOrFail(Auth::user()->id);
      }

      // Set the session to the current page route
      Session::put('fromPage', url()->full());

      return view('UI.profile.show', compact('user')); // ->withLandingPages($landingPages);
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
   // public function update(ProfileRequest $request, User $user)
   public function update(ProfileRequest $request, User $user)
   {
      
      $user = User::findOrFail(Auth::user()->id);

         $user->username = $request->input('username');
         $user->first_name = $request->input('first_name');
         $user->last_name = $request->input('last_name');
         $user->email = $request->input('email');
         $user->public_email = $request->input('public_email') ? true : false;
         $user->telephone = $request->input('telephone');
         $user->cell = $request->input('cell');
         $user->fax = $request->input('fax');
         $user->website = $request->input('website');
         $user->company_name = $request->input('company_name');
         $user->address_1 = $request->input('address_1');
         $user->address_2 = $request->input('address_2');
         $user->city = $request->input('city');
         $user->province = $request->input('province');
         $user->postal_code = $request->input('postal_code');
         $user->notes = $request->input('notes');
         $user->dart_doubleOut = $request->input('dart_doubleOut');
         $user->redirectAfterLogin = $request->input('redirectAfterLogin');

         // Check if a new image was submitted
         if ($request->hasFile('image')) {
            //Add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('_profiles/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
               
            // get name of old image
            $oldImageName = $user->image;
               
            // Update database
            $user->image = $filename;

            // Delete old photo
            File::delete('_profiles/' . $oldImageName);
          }

      $user->save();

      $notification = array(
         'message' => 'Your profile has been updated.',
         'alert-type' => 'success'
      );

      if($request->submit == "continue")
      {
         return redirect()->back()->with($notification);
      }
      
      return redirect()->route('profile.show', $user->id)->with($notification);
   }


}
