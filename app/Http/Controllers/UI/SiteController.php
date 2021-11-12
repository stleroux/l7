<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\InvoicerInvoice;
use App\Models\Post;
use Auth;
use Config;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Route;
use Session;

class SiteController extends Controller
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
      // $this->middleware('auth');
   }


##################################################################################################################
#  ███████╗ █████╗  ██████╗ 
#  ██╔════╝██╔══██╗██╔═══██╗
#  █████╗  ███████║██║   ██║
#  ██╔══╝  ██╔══██║██║▄▄ ██║
#  ██║     ██║  ██║╚██████╔╝
#  ╚═╝     ╚═╝  ╚═╝ ╚══▀▀═╝ 
// Display a list of resources
##################################################################################################################
   // public function index($filter = null, $tag = null)
   public function faq()
   {
      // Check if user has required permission


      // Set the session to the current page route
      Session::put('fromPage', url()->full());

      $faqs = FAQ::orderBy('question')->get();

      // dd($faqs);

      return view('UI.faqs', compact('faqs'));

   }


##################################################################################################################
# ██╗  ██╗ ██████╗ ███╗   ███╗███████╗██████╗  █████╗  ██████╗ ███████╗
# ██║  ██║██╔═══██╗████╗ ████║██╔════╝██╔══██╗██╔══██╗██╔════╝ ██╔════╝
# ███████║██║   ██║██╔████╔██║█████╗  ██████╔╝███████║██║  ███╗█████╗  
# ██╔══██║██║   ██║██║╚██╔╝██║██╔══╝  ██╔═══╝ ██╔══██║██║   ██║██╔══╝  
# ██║  ██║╚██████╔╝██║ ╚═╝ ██║███████╗██║     ██║  ██║╚██████╔╝███████╗
# ╚═╝  ╚═╝ ╚═════╝ ╚═╝     ╚═╝╚══════╝╚═╝     ╚═╝  ╚═╝ ╚═════╝ ╚══════╝
##################################################################################################################
   public function index()
   {
      // Set the session to the current page route
      Session::put('fromPage', url()->full());

      // Homepage blocks
      $posts      = Post::published()->with('user')->orderBy('id','desc')->take(Config::get('settings.homepage_blog_count'))->get();
      $greeting   = DB::table('blocks')->where('name', '=', 'greeting')->first();
      $newUser    = DB::table('blocks')->where('name', '=', 'newUser')->first();
      $carvings   = DB::table('blocks')->where('name', '=', 'carvings')->first();
      $projects   = DB::table('blocks')->where('name', '=', 'projects')->first();
      $recipes    = DB::table('blocks')->where('name', '=', 'recipes')->first();
      $blog       = DB::table('blocks')->where('name', '=', 'blog')->first();
      $nonRegistered = DB::table('blocks')->where('name', '=', 'nonRegistered')->first();

      return view('UI.homepage', compact('posts','greeting','newUser','carvings','projects','recipes','blog','nonRegistered'));
   }


##################################################################################################################
#  █████╗ ██████╗  ██████╗ ██╗   ██╗████████╗
# ██╔══██╗██╔══██╗██╔═══██╗██║   ██║╚══██╔══╝
# ███████║██████╔╝██║   ██║██║   ██║   ██║   
# ██╔══██║██╔══██╗██║   ██║██║   ██║   ██║   
# ██║  ██║██████╔╝╚██████╔╝╚██████╔╝   ██║   
# ╚═╝  ╚═╝╚═════╝  ╚═════╝  ╚═════╝    ╚═╝  
##################################################################################################################
   public function about()
   {
      // About page blocks
      $aboutUs    = DB::table('blocks')->where('name', '=', 'aboutUs')->first();
      $stephane   = DB::table('blocks')->where('name', '=', 'stephane')->first();
      $stacie     = DB::table('blocks')->where('name', '=', 'stacie')->first();

      return view('UI.about', compact('aboutUs','stephane','stacie'));
   }


##################################################################################################################
# ████████╗███████╗██████╗ ███╗   ███╗███████╗
# ╚══██╔══╝██╔════╝██╔══██╗████╗ ████║██╔════╝
#    ██║   █████╗  ██████╔╝██╔████╔██║███████╗
#    ██║   ██╔══╝  ██╔══██╗██║╚██╔╝██║╚════██║
#    ██║   ███████╗██║  ██║██║ ╚═╝ ██║███████║
#    ╚═╝   ╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝
##################################################################################################################
   public function terms()
   {
      return view('UI.termsAndConditions');
   }


##################################################################################################################
# ██████╗ ██████╗ ██╗██╗   ██╗ █████╗  ██████╗██╗   ██╗
# ██╔══██╗██╔══██╗██║██║   ██║██╔══██╗██╔════╝╚██╗ ██╔╝
# ██████╔╝██████╔╝██║██║   ██║███████║██║      ╚████╔╝ 
# ██╔═══╝ ██╔══██╗██║╚██╗ ██╔╝██╔══██║██║       ╚██╔╝  
# ██║     ██║  ██║██║ ╚████╔╝ ██║  ██║╚██████╗   ██║   
# ╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝  ╚═╝  ╚═╝ ╚═════╝   ╚═╝   
##################################################################################################################
   public function privacy()
   {
      return view('UI.privacyPolicy');
   }


   public function myInvoices()
   {
      $invoices = InvoicerInvoice::where('client_id', Auth()->id())->paginate(10);
      // dd($invoices);

      return view('UI.invoices.index', compact('invoices'));
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
   public function viewInvoice(InvoicerInvoice $invoice)
   {
      // Check if user has required permission
      abort_if($invoice->client_id != Auth::user()->id, 403);
      
      return view('UI.invoices.show', compact('invoice'));
   }

   // public function viewInvoice()
   // {

   // }

   public function downloadPDFInvoice(InvoicerInvoice $invoice)
   {
      // Check if user has required permission
      abort_if($invoice->client_id != Auth::user()->id, 403);

      // $invoice = InvoicerInvoice::find($id);
      $pdf = PDF::loadView('UI.invoices.invoicedPDF', compact('invoice'));
      
      if($invoice->status == "estimate")
      {
         return $pdf->download('Estimate '.$invoice->id.'.pdf');
      } else {
         return $pdf->download('Invoice '.$invoice->id.'.pdf');
      }

   }

}
