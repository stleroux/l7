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

      if($id){
         $client = User::findOrFail($id);
         return view('admin.invoicer.invoices.create', compact('products','clients','client'));
      }

      $products = InvoicerProduct::all();
      
      $clients = User::where('invoicer_client',1)->where('account_status',1)->orderBy('last_name')->orderBy('first_name')->get();

      return view('admin.invoicer.invoices.create', compact('products','clients'));
      
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
      
      $clients = User::where('invoicer_client',1)->where('account_status',1)->orderBy('last_name')->orderBy('first_name')->get();

      return view('admin.invoicer.invoices.edit', compact('invoice','clients'));
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
   public function index($type = null) // All invoices
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $type = rtrim($type, "s");

      if($type){
         $invoices = InvoicerInvoice::with('client')
            ->where('status', $type)
            ->orderBy('id', 'desc')
            ->paginate(Config::get('settings.rowsPerPage'));
      } else {
         $invoices = InvoicerInvoice::with('client')
            ->orderBy('id','desc')
            ->paginate(Config::get('settings.rowsPerPage'));
      }

      return view('admin.invoicer.invoices.index', compact('invoices'));
   }


##################################################################################################################
#  ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗ 
#  ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗
#  ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║
#  ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║
#  ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝
#  ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝ 
##################################################################################################################
   // public function quotes()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $invoices = InvoicerInvoice::
   //       // sortable()
   //       where('status','=','quote')
   //       ->orderBy('id','desc')
   //       ->paginate(Config::get('settings.rowsPerPage'));

   //    return view('admin.invoicer.invoices.index', compact('invoices'));
   // }

##################################################################################################################
#  ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗ 
#  ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗
#  ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║
#  ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║
#  ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝
#  ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝ 
##################################################################################################################
   // public function invoiced()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $invoices = InvoicerInvoice::
   //       // sortable()
   //       where('status','=','invoiced')
   //       ->orderBy('id','desc')
   //       ->paginate(Config::get('settings.rowsPerPage'));

   //    return view('admin.invoicer.invoices.index', compact('invoices'));
   // }


##################################################################################################################
#  ███████╗███████╗████████╗██╗███╗   ███╗ █████╗ ████████╗███████╗███████╗
#  ██╔════╝██╔════╝╚══██╔══╝██║████╗ ████║██╔══██╗╚══██╔══╝██╔════╝██╔════╝
#  █████╗  ███████╗   ██║   ██║██╔████╔██║███████║   ██║   █████╗  ███████╗
#  ██╔══╝  ╚════██║   ██║   ██║██║╚██╔╝██║██╔══██║   ██║   ██╔══╝  ╚════██║
#  ███████╗███████║   ██║   ██║██║ ╚═╝ ██║██║  ██║   ██║   ███████╗███████║
#  ╚══════╝╚══════╝   ╚═╝   ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝   ╚═╝   ╚══════╝╚══════╝
##################################################################################################################
   // public function estimates()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $invoices = InvoicerInvoice::
   //       // sortable()
   //       where('status','=','estimate')
   //       ->orderBy('id','desc')
   //       ->paginate(Config::get('settings.rowsPerPage'));
         
   //    return view('admin.invoicer.invoices.index', compact('invoices'));
   // }


##################################################################################################################
#  ██╗      ██████╗  ██████╗  ██████╗ ███████╗██████╗ 
#  ██║     ██╔═══██╗██╔════╝ ██╔════╝ ██╔════╝██╔══██╗
#  ██║     ██║   ██║██║  ███╗██║  ███╗█████╗  ██║  ██║
#  ██║     ██║   ██║██║   ██║██║   ██║██╔══╝  ██║  ██║
#  ███████╗╚██████╔╝╚██████╔╝╚██████╔╝███████╗██████╔╝
#  ╚══════╝ ╚═════╝  ╚═════╝  ╚═════╝ ╚══════╝╚═════╝ 
##################################################################################################################
   // public function logged()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $invoices = InvoicerInvoice::sortable()
   //       ->where('status','=','logged')
   //       ->orderBy('id','desc')
   //       ->paginate(Config::get('settings.rowsPerPage'));
         
   //    return view('admin.invoicer.invoices.index.index', compact('invoices'));
   // }


##################################################################################################################
#  ██████╗  █████╗ ██╗██████╗ 
#  ██╔══██╗██╔══██╗██║██╔══██╗
#  ██████╔╝███████║██║██║  ██║
#  ██╔═══╝ ██╔══██║██║██║  ██║
#  ██║     ██║  ██║██║██████╔╝
#  ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝ 
##################################################################################################################
   // public function paid()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $invoices = InvoicerInvoice::
   //       // sortable()
   //       where('status','=','paid')
   //       ->orderBy('id','desc')
   //       ->paginate(Config::get('settings.rowsPerPage'));

   //    return view('admin.invoicer.invoices.index', compact('invoices'));
   // }


##################################################################################################################
#  ██╗   ██╗███╗   ██╗██████╗  █████╗ ██╗██████╗ 
#  ██║   ██║████╗  ██║██╔══██╗██╔══██╗██║██╔══██╗
#  ██║   ██║██╔██╗ ██║██████╔╝███████║██║██║  ██║
#  ██║   ██║██║╚██╗██║██╔═══╝ ██╔══██║██║██║  ██║
#  ╚██████╔╝██║ ╚████║██║     ██║  ██║██║██████╔╝
#   ╚═════╝ ╚═╝  ╚═══╝╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝ 
##################################################################################################################
   // public function unpaid()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $invoices = InvoicerInvoice::sortable()
   //       ->where('status','!=','paid')
   //       ->where('status','!=','estimate')
   //       ->orderBy('id','desc')
   //       ->paginate(Config::get('settings.rowsPerPage'));

   //    return view('admin.invoicer.invoices.index.index', compact('invoices'));
   // }


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
      // dd($invoice);

      // Get all associated Audits
      $audits = $invoice->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.invoicer.invoices.show', compact('invoice','audits'));
   }


##################################################################################################################
##################################################################################################################
   public function status_quoted($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'quote';
         $invoice->quoted_at = Carbon::now();
         if(isset($invoice->invoiced_at))
         {
            $invoice->invoiced_at = null;
         }
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'This invoice was successfully downgraded to a quote',
         'alert-type' => 'success'
      ];

      // Redirect
      return redirect()->route('admin.invoicer.invoices', 'estimates')->with($notification);
   }


##################################################################################################################
##################################################################################################################
   public function status_estimated($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'estimate';
         $invoice->estimated_at = Carbon::now();
         if(isset($invoice->invoiced_at))
         {
            $invoice->invoiced_at = null;
         }
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'This quote was successfully updated to an estimate',
         'alert-type' => 'success'
      ];

      // Redirect
      return redirect()->route('admin.invoicer.invoices', 'estimates')->with($notification);
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
         if(isset($invoice->paid_at))
         {
            $invoice->paid_at = null;
         }
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
      return redirect()->route('admin.invoicer.invoices', 'invoiced')->with($notification);
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
         if(isset($invoice->workOrdered_at))
         {
            $invoice->workOrdered_at = null;
         }
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
      return redirect()->route('admin.invoicer.invoices', 'paid')->with($notification);
   }


##################################################################################################################
##################################################################################################################
   public function status_workOrdered($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'workOrder';
         $invoice->workOrder_at = Carbon::now();
         if(isset($invoice->completed_at))
         {
            $invoice->completed_at = null;
         }
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'The invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices', 'workOrders')->with($notification);
   }


##################################################################################################################
##################################################################################################################
   public function status_completed($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'completed';
         $invoice->completed_at = Carbon::now();
         if(isset($invoice->shipped_at))
         {
            $invoice->shipped_at = null;
         }
         if(isset($invoice->pickedUp_at))
         {
            $invoice->pickedUp_at = null;
         }
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'The invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices', 'completed')->with($notification);
   }


##################################################################################################################
##################################################################################################################
   public function status_shipped($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'shipped';
         $invoice->shipped_at = Carbon::now();
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'The invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices', 'shipped')->with($notification);
   }


##################################################################################################################
##################################################################################################################
   public function status_pickedUp($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'pickedUp';
         $invoice->pickedUp_at = Carbon::now();
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'The invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices', 'pickedUp')->with($notification);
   }


##################################################################################################################
##################################################################################################################
   public function status_canceled($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoice = InvoicerInvoice::findOrFail($id);
         $invoice->status = 'canceled';
         $invoice->canceled_at = Carbon::now();
      $invoice->save();

      // Set flash data with success message
      $notification = [
         'message' => 'The invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      // Redirect to posts.show
      return redirect()->route('admin.invoicer.invoices', 'pickedUp')->with($notification);
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
   // public function status_logged($id)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    // $invoices = InvoicerInvoice::where('status', '=', 'estimate')->get();
         
   //    //    foreach($invoices as $invoice) {
   //    //       $invoice->status = 'logged';
   //    //       $invoice->paid_at = Carbon::now();
   //    //       $invoice->save();
   //    //    }

   //    $invoice = InvoicerInvoice::findOrFail($id);
   //       $invoice->status = 'logged';
   //       $invoice->logged_at = Carbon::now();
   //    $invoice->save();

   //    // Set flash data with success message
   //    $notification = [
   //       'message' => 'All estimates have successfully been marked as logged!', 
   //       'alert-type' => 'success'
   //    ];

   //    // Redirect to posts.show
   //    return redirect()->route('admin.invoicer.invoices.estimates')->with($notification);
   // }


##################################################################################################################
#  ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██╗      ██████╗  ██████╗  ██████╗ ███████╗██████╗      █████╗ ██╗     ██╗     
#  ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██║     ██╔═══██╗██╔════╝ ██╔════╝ ██╔════╝██╔══██╗    ██╔══██╗██║     ██║     
#  ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██║     ██║   ██║██║  ███╗██║  ███╗█████╗  ██║  ██║    ███████║██║     ██║     
#  ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██║     ██║   ██║██║   ██║██║   ██║██╔══╝  ██║  ██║    ██╔══██║██║     ██║     
#  ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ███████╗╚██████╔╝╚██████╔╝╚██████╔╝███████╗██████╔╝    ██║  ██║███████╗███████╗
#  ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚══════╝ ╚═════╝  ╚═════╝  ╚═════╝ ╚══════╝╚═════╝     ╚═╝  ╚═╝╚══════╝╚══════╝
##################################################################################################################
   // public function status_logged_all()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $invoices = InvoicerInvoice::where('status', '=', 'estimate')->get();
         
   //       foreach($invoices as $invoice) {
   //          $invoice->status = 'logged';
   //          $invoice->paid_at = Carbon::now();
   //          $invoice->save();
   //       }

   //    // Set flash data with success message
   //    $notification = [
   //       'message' => 'All estimates have successfully been marked as logged!', 
   //       'alert-type' => 'success'
   //    ];

   //    // Redirect to posts.show
   //    return redirect()->route('admin.invoicer.invoices.estimates')->with($notification);
   // }




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
         if($request->status == 'estimate')
         {
            $invoice->estimated_at = Carbon::now();
         }
      $invoice->save();

      // Admins to notify
      $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
      Notification::send($users, new InvoiceCreatedNotification($invoice));

      // set a flash message to be displayed on screen
      $notification = [
         'message' => 'The '. Str::lower($request->status) .' was successfully saved!', 
         'alert-type' => 'success'
      ];

      return redirect()->route('admin.invoicer.invoices', 'estimates')->with($notification);
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
   public function update(Request $request, InvoicerInvoice $invoice)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      // validate the data
      $this->validate($request,
         [
            'client_id'    => 'required',
            'status'       => 'required',
         ]);

      // Status changed from QUOTE to ESTIMATE
      if($invoice->status == 'quote' && $request->status == 'estimate') {
         $invoice->estimated_at = $request->estimated_at ? $request->estimated_at : Carbon::now();
      }

      // Status changed from ESTIMATE to INVOICED
      if($invoice->status == 'estimate' && $request->status == 'invoiced') {
         $invoice->invoiced_at = $request->invoiced_at ? $request->invoiced_at : Carbon::now();
      }
      // Status changed from INVOICED to ESTIMATE
      if($invoice->status == 'invoiced' && $request->status == 'estimate') {
         $invoice->invoiced_at = null;
      }
      
      // Status changed from INVOICED to PAID
      if($invoice->status == 'invoiced' && $request->status == 'paid') {
         $invoice->paid_at = $request->paid_at ? $request->paid_at : Carbon::now();
      }
      // Status changed from PAID to INVOICED
      if($invoice->status == 'paid' && $request->status == 'invoiced') {
         $invoice->invoiced_at = null;
      }

      // Status changed from PAID to WORKORDER
      if($invoice->status == 'paid' && $request->status == 'workOrder') {
         $invoice->workOrder_at = $request->workOrder_at ? $request->workOrder_at : Carbon::now();
      }









      // Status changed from WORKORDER to COMPLETED
      if($invoice->status == 'workOrder' && $request->status == 'completed') {
         $invoice->completed_at = $request->completed_at ? $request->completed_at : Carbon::now();
      }

      // Status changed from COMPLETED to SHIPPED
      if($invoice->status == 'completed' && $request->status == 'shipped') {
         $invoice->shipped_at = $request->shipped_at ? $request->shipped_at : Carbon::now();
      }

      // Status changed from COMPLETED to PICKEDUP
      if($invoice->status == 'completed' && $request->status == 'pickedUp')  {
         $invoice->pickedUp_at = $request->pickedUp_at ? $request->pickedUp_at : Carbon::now();
      }

      // Status changed to CANCELED
      if($request->status == 'canceled') {
         $invoice->canceled_at = $request->canceled_at ? $request->canceled_at : Carbon::now();
      }
   
      $invoice->status = $request->status;
      $invoice->client_id = $request->client_id;
      $invoice->notes = $request->notes;
      $invoice->save();

      // update invoice with totals
      calculateInvoiceAmounts($invoice->id);

      // Set flash data with success message
      $notification = [
         'message' => 'This invoice was successfully updated!', 
         'alert-type' => 'success'
      ];

      if($invoice->status == 'quote') {
         $invoice->status = 'quotes';
      }elseif($invoice->status == 'estimate') {
         $invoice->status = 'estimates';
      }elseif($invoice->status == 'workOrder') {
         $invoice->status = 'workOrders';
      }

      // Redirect to invoices.index
      return redirect()->route('admin.invoicer.invoices', $invoice->status)->with($notification);
   }


##################################################################################################################
#
#
#
#
#
#
# Update the specified resource in storage
##################################################################################################################
   public function refreshData(Request $request, InvoicerInvoice $invoice)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      // update invoice with totals
      calculateInvoiceAmounts($invoice->id);

      // Set flash data with success message
      $notification = [
         'message' => 'This invoice data was successfully refreshed!', 
         'alert-type' => 'success'
      ];

      if($invoice->status == 'quote') {
         $invoice->status = 'quotes';
      }elseif($invoice->status == 'estimate') {
         $invoice->status = 'estimates';
      }elseif($invoice->status == 'workOrder') {
         $invoice->status = 'workOrders';
      }

      // Redirect to invoices.index
      return redirect()->route('admin.invoicer.invoices', $invoice->status)->with($notification);
   }


}
