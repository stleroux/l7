<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
// use App\Http\Requests\FaqRequest;
use App\Models\Faq;
// use App\Models\Comment;
use Illuminate\Http\Request;
// use Auth;
// use DB;
// use File;
// use Gate;
// use Image as Img;
// use Route;
// use Session;
// use URL;


class FaqsController extends Controller
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
#  ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
#  ██╔════╝██║  ██║██╔═══██╗██║    ██║
#  ███████╗███████║██║   ██║██║ █╗ ██║
#  ╚════██║██╔══██║██║   ██║██║███╗██║
#  ███████║██║  ██║╚██████╔╝╚███╔███╔╝
#  ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
# Display the specified resource
##################################################################################################################
   public function show(Faq $faq, Request $request)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('faq-manage'), 403);

      // get previous Carving
      // $previous = Faq::where('question', '<', $faq->question)->orderBy('question','asc')->max('question');
      
      // if($previous){
      //    $p = Faq::where('question', $previous)->get();
      //    $previous = $p[0]->id;
      // }

      // // get next Carving
      // $next = Faq::where('question', '>', $faq->question)->orderBy('question','desc')->min('question');

      // if($next){
      //    $n = Faq::where('question', $next)->get();
      //    $next = $n[0]->id;
      // }

      // Get all associated Audits
      // $audits = $faq->audits()->with('user')->orderBy('id','desc')->get();

      // Increase the view count since this is viewed from the frontend
      // $expiresAt = now()->addHours(3);
      // views($faq)->cooldown($expiresAt)->record();

      return view('UI.faqs.show', compact('faq'));
   }


}
