<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\User;
// use App\Rules\Captcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;
use Session;

class ContactFormController extends Controller
{
##################################################################################################################
#  ██████╗██████╗ ███████╗ █████╗ ████████╗███████╗
# ██╔════╝██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██╔════╝
# ██║     ██████╔╝█████╗  ███████║   ██║   █████╗  
# ██║     ██╔══██╗██╔══╝  ██╔══██║   ██║   ██╔══╝  
# ╚██████╗██║  ██║███████╗██║  ██║   ██║   ███████╗
#  ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
// Show the form for creating a new resource
##################################################################################################################
   public function create()
   {
      return view('UI.contactForm.create');
   }


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// Store a newly created resource in storage
##################################################################################################################
   public function store(Request $request)
   {

      $data = request()->validate([
         'email' => 'required|email',
         'subject' => 'required',
         'message' => 'required',
         // 'g-recaptcha-response' => new Captcha(),
      ]);

      $notification = [
         'message' => 'The role has been created successfully!', 
         'alert-type' => 'success'
      ];

      // Send email
      Mail::to('stephaneandstacie@gmail.com')->send(new ContactFormMail($data));

      return view('UI.contactForm.thankyou')->with($notification);
   }

}
