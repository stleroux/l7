<?php

namespace App\Http\Controllers\Admin\Invoicer;

use App\Http\Controllers\Controller;
use App\Mail\Invoicer\InvoicedPDFMail;
use App\Mail\Invoicer\PaidPDFMail;
use App\Models\InvoicerActivity;
use App\Models\InvoicerClient;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use App\Models\InvoicerProduct;
use App\Models\User;
use App\Notifications\Invoicer\InvoiceCreatedNotification;
// use Config;
use DB;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use PDF;
use Session;
use Storage;
use carbon\Carbon;

class InvoicesController extends Controller
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
#   ██████╗██████╗ ███████╗ █████╗ ████████╗███████╗
#  ██╔════╝██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██╔════╝
#  ██║     ██████╔╝█████╗  ███████║   ██║   █████╗  
#  ██║     ██╔══██╗██╔══╝  ██╔══██║   ██║   ██╔══╝  
#  ╚██████╗██║  ██║███████╗██║  ██║   ██║   ███████╗
#   ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
# Show the form for creating a new resource
##################################################################################################################
   public function create($id = null)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $products = InvoicerProduct::all();
      $clients = InvoicerClient::orderBy('contact_name')->get();

      if($id){
         $client = InvoicerClient::findOrFail($id);
         return view('admin.invoicer.invoices.create.create', compact('products','clients','client'));
      }

      return view('admin.invoicer.invoices.create.create', compact('products','clients'));
      
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
   public function destroy($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::find($id)->delete();
      $invoice_items = InvoicerInvoiceItem::where('invoice_id', $id)->delete();
      $invoice_items = InvoicerActivity::where('invoice_id', $id)->delete();

      $notification = [
         'message' => 'The invoice and related invoice items were deleted successfully.',
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.invoicer.invoices')->with($notification);
   }


##################################################################################################################
#  ██████╗  ██████╗ ██╗    ██╗███╗   ██╗██╗      ██████╗  █████╗ ██████╗     ██████╗ ██████╗ ███████╗    ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗
#  ██╔══██╗██╔═══██╗██║    ██║████╗  ██║██║     ██╔═══██╗██╔══██╗██╔══██╗    ██╔══██╗██╔══██╗██╔════╝    ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝
#  ██║  ██║██║   ██║██║ █╗ ██║██╔██╗ ██║██║     ██║   ██║███████║██║  ██║    ██████╔╝██║  ██║█████╗      ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  
#  ██║  ██║██║   ██║██║███╗██║██║╚██╗██║██║     ██║   ██║██╔══██║██║  ██║    ██╔═══╝ ██║  ██║██╔══╝      ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  
#  ██████╔╝╚██████╔╝╚███╔███╔╝██║ ╚████║███████╗╚██████╔╝██║  ██║██████╔╝    ██║     ██████╔╝██║         ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗
#  ╚═════╝  ╚═════╝  ╚══╝╚══╝ ╚═╝  ╚═══╝╚══════╝ ╚═════╝ ╚═╝  ╚═╝╚═════╝     ╚═╝     ╚═════╝ ╚═╝         ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝
##################################################################################################################
   public function downloadPDFInvoice($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::find($id);
      $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', compact('invoice'));
      
      return $pdf->download('Invoice '.$id.'.pdf');
   }


##################################################################################################################
# PDF
##################################################################################################################
   public function PDF($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::find($id);
      $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', compact('invoice'));
      
      return $pdf->stream('Invoice '.$id.'.pdf');
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
   public function edit($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::with('InvoiceItems')->find($id);
      $clients = InvoicerClient::all();

      return view('admin.invoicer.invoices.edit.edit', compact('invoice','clients'));
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
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::sortable()
         ->with('client')
         ->where('status', '!=', 'estimate')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      return view('admin.invoicer.invoices.index.index', compact('invoices'));
   }


##################################################################################################################
#  ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗ 
#  ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗
#  ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║
#  ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║
#  ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝
#  ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝ 
##################################################################################################################
   public function invoiced()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::sortable()
         ->where('status','=','invoiced')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      return view('admin.invoicer.invoices.index.index', compact('invoices'));
   }


##################################################################################################################
#  ███████╗███████╗████████╗██╗███╗   ███╗ █████╗ ████████╗███████╗███████╗
#  ██╔════╝██╔════╝╚══██╔══╝██║████╗ ████║██╔══██╗╚══██╔══╝██╔════╝██╔════╝
#  █████╗  ███████╗   ██║   ██║██╔████╔██║███████║   ██║   █████╗  ███████╗
#  ██╔══╝  ╚════██║   ██║   ██║██║╚██╔╝██║██╔══██║   ██║   ██╔══╝  ╚════██║
#  ███████╗███████║   ██║   ██║██║ ╚═╝ ██║██║  ██║   ██║   ███████╗███████║
#  ╚══════╝╚══════╝   ╚═╝   ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝   ╚═╝   ╚══════╝╚══════╝
##################################################################################################################
   public function estimates()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::sortable()
         ->where('status','=','estimate')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));
         
      return view('admin.invoicer.invoices.index.index', compact('invoices'));
   }


##################################################################################################################
#  ██╗      ██████╗  ██████╗  ██████╗ ███████╗██████╗ 
#  ██║     ██╔═══██╗██╔════╝ ██╔════╝ ██╔════╝██╔══██╗
#  ██║     ██║   ██║██║  ███╗██║  ███╗█████╗  ██║  ██║
#  ██║     ██║   ██║██║   ██║██║   ██║██╔══╝  ██║  ██║
#  ███████╗╚██████╔╝╚██████╔╝╚██████╔╝███████╗██████╔╝
#  ╚══════╝ ╚═════╝  ╚═════╝  ╚═════╝ ╚══════╝╚═════╝ 
##################################################################################################################
   public function logged()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::sortable()
         ->where('status','=','logged')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));
         
      return view('admin.invoicer.invoices.index.index', compact('invoices'));
   }


##################################################################################################################
#  ██████╗  █████╗ ██╗██████╗ 
#  ██╔══██╗██╔══██╗██║██╔══██╗
#  ██████╔╝███████║██║██║  ██║
#  ██╔═══╝ ██╔══██║██║██║  ██║
#  ██║     ██║  ██║██║██████╔╝
#  ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝ 
##################################################################################################################
   public function paid()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::sortable()
         ->where('status','=','paid')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      return view('admin.invoicer.invoices.index.index', compact('invoices'));
   }


##################################################################################################################
#  ██╗   ██╗███╗   ██╗██████╗  █████╗ ██╗██████╗ 
#  ██║   ██║████╗  ██║██╔══██╗██╔══██╗██║██╔══██╗
#  ██║   ██║██╔██╗ ██║██████╔╝███████║██║██║  ██║
#  ██║   ██║██║╚██╗██║██╔═══╝ ██╔══██║██║██║  ██║
#  ╚██████╔╝██║ ╚████║██║     ██║  ██║██║██████╔╝
#   ╚═════╝ ╚═╝  ╚═══╝╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝ 
##################################################################################################################
   public function unpaid()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::sortable()
         ->where('status','!=','paid')
         ->where('status','!=','estimate')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      return view('admin.invoicer.invoices.index.index', compact('invoices'));
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
   public function show($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::with('invoiceItems')->find($id);

      // Get all associated Audits
      $audits = $invoice->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.invoicer.invoices.show.show', compact('invoice','audits'));
   }


##################################################################################################################
#  ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗ 
#  ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗
#  ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║
#  ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║
#  ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝
#  ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝ 
##################################################################################################################
   public function status_invoiced($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'invoiced';
         $invoice->invoiced_at = Carbon::now();
      $invoice->save();

      // Create PDF file and store it
      $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
      $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

      // Email PDF to client's email
      Mail::to($invoice->client->email)->send(new InvoicedPDFMail($invoice));

      // Set flash data with success message
      $notification = [
         'message' => 'This invoice was successfully updated and emailed to the client!', 
         'alert-type' => 'success'
      ];

      // Redirect
      return redirect()->route('admin.invoicer.invoices')->with($notification);
   }


##################################################################################################################
#  ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗      █████╗ ██╗     ██╗     
#  ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗    ██╔══██╗██║     ██║     
#  ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║    ███████║██║     ██║     
#  ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║    ██╔══██║██║     ██║     
#  ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝    ██║  ██║███████╗███████╗
#  ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝     ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function status_invoiced_all()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::where('status', '=', 'logged')->get();
         
         foreach($invoices as $invoice) {
            $invoice->status = 'invoiced';
            $invoice->invoiced_at = Carbon::now();
            $invoice->save();

            // Create PDF file and store it
            $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
            $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

            // Email PDF to client's email
            Mail::to($invoice->client->email)->send(new InvoicedPDFMail($invoice));
         }

      // Set flash data with success message
      $notification = [
         'message' => 'All logged invoices have successfully been marked as invoiced!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices')->with($notification);
   }


##################################################################################################################
#  ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██╗      ██████╗  ██████╗  ██████╗ ███████╗██████╗ 
#  ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██║     ██╔═══██╗██╔════╝ ██╔════╝ ██╔════╝██╔══██╗
#  ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██║     ██║   ██║██║  ███╗██║  ███╗█████╗  ██║  ██║
#  ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██║     ██║   ██║██║   ██║██║   ██║██╔══╝  ██║  ██║
#  ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ███████╗╚██████╔╝╚██████╔╝╚██████╔╝███████╗██████╔╝
#  ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚══════╝ ╚═════╝  ╚═════╝  ╚═════╝ ╚══════╝╚═════╝ 
##################################################################################################################
   public function status_logged($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      // $invoices = InvoicerInvoice::where('status', '=', 'estimate')->get();
         
      //    foreach($invoices as $invoice) {
      //       $invoice->status = 'logged';
      //       $invoice->paid_at = Carbon::now();
      //       $invoice->save();
      //    }

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'logged';
         $invoice->logged_at = Carbon::now();
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'All estimates have successfully been marked as logged!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices.estimates')->with($notification);
   }


##################################################################################################################
#  ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██╗      ██████╗  ██████╗  ██████╗ ███████╗██████╗      █████╗ ██╗     ██╗     
#  ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██║     ██╔═══██╗██╔════╝ ██╔════╝ ██╔════╝██╔══██╗    ██╔══██╗██║     ██║     
#  ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██║     ██║   ██║██║  ███╗██║  ███╗█████╗  ██║  ██║    ███████║██║     ██║     
#  ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██║     ██║   ██║██║   ██║██║   ██║██╔══╝  ██║  ██║    ██╔══██║██║     ██║     
#  ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ███████╗╚██████╔╝╚██████╔╝╚██████╔╝███████╗██████╔╝    ██║  ██║███████╗███████╗
#  ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚══════╝ ╚═════╝  ╚═════╝  ╚═════╝ ╚══════╝╚═════╝     ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function status_logged_all()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::where('status', '=', 'estimate')->get();
         
         foreach($invoices as $invoice) {
            $invoice->status = 'logged';
            $invoice->paid_at = Carbon::now();
            $invoice->save();
         }

      // Set flash data with success message
      $notification = [
         'message' => 'All estimates have successfully been marked as logged!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices.estimates')->with($notification);
   }


##################################################################################################################
#  ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██████╗  █████╗ ██╗██████╗ 
#  ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██╔══██╗██╔══██╗██║██╔══██╗
#  ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██████╔╝███████║██║██║  ██║
#  ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██╔═══╝ ██╔══██║██║██║  ██║
#  ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║     ██║  ██║██║██████╔╝
#  ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝ 
##################################################################################################################
   public function status_paid($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'paid';
         $invoice->paid_at = Carbon::now();
      $invoice->save();

      // Create PDF file and store it
      $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
      $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

      // Email PDF to client's email
      Mail::to($invoice->client->email)->send(new PaidPDFMail($invoice));

      // Set flash data with success message
      $notification = [
         'message' => 'This invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices')->with($notification);
   }


##################################################################################################################
#  ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██████╗  █████╗ ██╗██████╗      █████╗ ██╗     ██╗     
#  ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██╔══██╗██╔══██╗██║██╔══██╗    ██╔══██╗██║     ██║     
#  ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██████╔╝███████║██║██║  ██║    ███████║██║     ██║     
#  ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██╔═══╝ ██╔══██║██║██║  ██║    ██╔══██║██║     ██║     
#  ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║     ██║  ██║██║██████╔╝    ██║  ██║███████╗███████╗
#  ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝     ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   public function status_paid_all()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::where('status', '=', 'invoiced')->get();
         
         foreach($invoices as $invoice) {
            $invoice->status = 'paid';
            $invoice->paid_at = Carbon::now();
            $invoice->save();
         }

      // Set flash data with success message
      $notification = [
         'message' => 'All invoiced invoices have successfully been marked as paid!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices')->with($notification);
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
   public function store(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      // validate the data
      $this->validate($request, [
         'client_id' => 'required',
         'status' => 'required'
      ]);

      // save the data in the database
      $invoice = new InvoicerInvoice;
         $invoice->client_id = $request->client_id;
         $invoice->notes = $request->notes;
         $invoice->status = Str::lower($request->status);
         if($request->status == 'Logged')
         {
            $invoice->logged_at = Carbon::now();
         }
      $invoice->save();

      // Notify admins
         $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
         Notification::send($users, new InvoiceCreatedNotification($invoice));


      // redirect to another page
      if(Str::lower($request->status) == "estimate")
      {
         // set a flash message to be displayed on screen
         $notification = [
            'message' => 'The estimate was successfully saved!', 
            'alert-type' => 'success'
         ];

            return redirect()->route('admin.invoicer.invoices.estimates')->with($notification);
      }

      // set a flash message to be displayed on screen
      $notification = [
         'message' => 'The invoice was successfully saved!', 
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.invoicer.invoices')->with($notification);
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
   public function update(Request $request, $id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      // validate the data
      $this->validate($request,
         [
            'client_id'    => 'required',
            'status'       => 'required',
            // 'paid_at'      => 'required_if:status,==,paid',
            // 'invoiced_at'  => 'required_if:status,==,invoiced',
         ]);

      $invoice = InvoicerInvoice::findOrFail($id);
      
         // Get value of original Status
         $ori_status = $invoice->status;

         // If status is changed form Paid to Invoiced
         if($ori_status == 'paid' && $request->status == 'invoiced' ) {
            // Clear the value of paid_at field
            $invoice->paid_at = null;

         // If status is changed from Paid to Logged
         }elseif($ori_status == 'paid' && $request->status == 'logged' ){
            // Clear the value of the paid_at and invoiced_at fields
            $invoice->paid_at = null;
            $invoice->invoiced_at = null;

         // If status is changed from Paid to Estimate
         }elseif($ori_status == 'paid' && $request->status == 'estimate' ){
            // Clear the value of the paid_at and invoiced_at fields
            $invoice->paid_at = null;
            $invoice->invoiced_at = null;
            $invoice->logged_at = null;

         // If status is changed from Invoiced to Logged
         }elseif($ori_status == 'invoiced' && $request->status == 'logged' ){
            // Clear the value of the invoiced_at field
            $invoice->invoiced_at = null;

         // If status is changed from Invoiced to Paid
         }elseif($ori_status == 'invoiced' && $request->status == 'paid' ){
            // Set the value of paid_at to the value passed from the form
            if($request->paid_at){
               $invoice->paid_at = $request->paid_at;
            } else {
               $invoice->paid_at = Carbon::now();
            }

         // If status is changed from Invoiced to Estimate
         }elseif($ori_status == 'invoiced' && $request->status == 'estimate' ){
            // Set the value of paid_at to the value passed from the form
            $invoice->paid_at = null;
            $invoice->logged_at = null;

         // If status is cahnged form Logged to Invoiced
         }elseif($ori_status == 'logged' && $request->status == 'invoiced' ){
            // Set the value of invoiced_at to the value passed from the form
            if($request->invoiced_at) {
               $invoice->invoiced_at = $request->invoiced_at;
            } else {
               $invoice->invoiced_at = Carbon::now();
            }

         // If status is cahnged form Logged to Estimate
         }elseif($ori_status == 'logged' && $request->status == 'estimate' ){
            // Set the value of invoiced_at to the value passed from the form
            $invoice->logged_at = null;

         // If status is cahnged form Estimate to Logged
         }elseif($ori_status == 'estimate' && $request->status == 'logged' ){
            // Set the value of invoiced_at to the value passed from the form
            if($request->logged_at) {
               $invoice->logged_at = $request->logged_at;
            } else {
               $invoice->logged_at = Carbon::now();
            }

         // If status is cahnged form Estimate to Invoiced
         }elseif($ori_status == 'estimate' && $request->status == 'invoiced' ){
            // Set the value of invoiced_at to the value passed from the form
            if($request->logged_at) {
               $invoice->logged_at = $request->logged_at;
            } else {
               $invoice->logged_at = Carbon::now();
            }

            if($request->invoiced_at) {
               $invoice->invoiced_at = $request->invoiced_at;
            } else {
               $invoice->invoiced_at = Carbon::now();
            }

         // If status is cahnged form Estimate to Paid
         }elseif($ori_status == 'estimate' && $request->status == 'paid' ){
            // Set the value of invoiced_at to the value passed from the form
            if($request->logged_at) {
               $invoice->logged_at = $request->logged_at;
            } else {
               $invoice->logged_at = Carbon::now();
            }

            if($request->invoiced_at) {
               $invoice->invoiced_at = $request->invoiced_at;
            } else {
               $invoice->invoiced_at = Carbon::now();
            }

            if($request->paid_at) {
               $invoice->paid_at = $request->paid_at;
            } else {
               $invoice->paid_at = Carbon::now();
            }
         }


         // Update the rest of the fields
         $invoice->client_id = $request->client_id;
         $invoice->notes = $request->notes;
         $invoice->status = $request->status;

      // Update the invoice
      $invoice->save();

      // update invoice with totals
      // $this::invUpdate($invoice->id);
      calculateInvoiceAmounts($invoice->id);

      // Set flash data with success message
      $notification = [
         'message' => 'This invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      if(Str::lower($request->status) == "estimate")
      {
         // Redirect to invoices.index
         return redirect()->route('admin.invoicer.invoices.estimates')->with($notification); 
      }

      // Redirect to invoices.index
      return redirect()->route('admin.invoicer.invoices')->with($notification);
   }


##################################################################################################################
# INVOICE UPDATE
##################################################################################################################
   // public function invUpdate($invID, $activity = null)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    // update invoice with totals
   //    $invoice = InvoicerInvoice::find($invID);

   //        // Perform required calculations
   //       $inv_amount_charged = DB::table('invoicer__invoice_items')->where('invoice_id', '=', $invoice->id)->sum('total');

   //       $inv_hst = $inv_amount_charged * Config::get('invoicer.hstRate');

   //       // $inv_deposits = InvoicerActivity::where('invoice_id',$invID)->where('activity','deposit')->sum('amount');
   //       // $inv_discounts = InvoicerActivity::where('invoice_id',$invID)->where('activity','discount')->sum('amount');
   //       // $inv_payments = InvoicerActivity::where('invoice_id',$invID)->where('activity','payment')->sum('amount');
   //       $inv_depositsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','depositAdd')->sum('amount');
   //       $inv_depositsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','depositRemove')->sum('amount');
   //       $inv_deposits = $inv_depositsAdd - $inv_depositsRemove;
   //       // dd($inv_deposits);
   //       $inv_discountsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','discountAdd')->sum('amount');
   //       $inv_discountsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','discountRemove')->sum('amount');
   //       $inv_discounts = $inv_discountsAdd - $inv_discountsRemove;
   //       // dd($inv_discounts);
   //       $inv_paymentsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','paymentAdd')->sum('amount');
   //       $inv_paymentsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','paymentRemove')->sum('amount');
   //       $inv_payments = $inv_paymentsAdd - $inv_paymentsRemove;
   //       // dd($inv_payments);         

   //       $inv_sub_total = $inv_amount_charged + $inv_hst;

   //       $inv_wsib = $inv_amount_charged * Config::get('invoicer.wsibRate');
   //       $inv_income_taxes = $inv_amount_charged * Config::get('invoicer.incomeTaxRate');
   //       $inv_total_deductions = $inv_wsib + $inv_income_taxes;

   //       $inv_total = $inv_sub_total - $inv_total_deductions - $inv_deposits - $inv_discounts - $inv_payments;
         
   //       // Set the values to be updated
   //       $invoice->amount_charged = $inv_amount_charged;
   //       $invoice->hst = $inv_hst;
   //       $invoice->sub_total = $inv_sub_total;

   //       $invoice->deposits = $inv_deposits;
   //       $invoice->discounts = $inv_discounts;
   //       $invoice->payments = $inv_payments;

   //       $invoice->wsib = $inv_wsib;
   //       $invoice->income_taxes = $inv_income_taxes;
   //       $invoice->total_deductions = $inv_total_deductions;

   //       $invoice->total = $inv_total;

   //    $invoice->save();
   // }

   
}
