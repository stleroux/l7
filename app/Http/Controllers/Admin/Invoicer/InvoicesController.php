<?php

namespace App\Http\Controllers\Admin\Invoicer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\InvoicerClient;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use App\Models\InvoicerProduct;
use App\Models\User;

use App\Mail\Invoicer\InvoicedPDFMail;

use carbon\Carbon;
use Config;
use DB;
use Gate;
use PDF;
use Session;
use Storage;

class InvoicesController extends Controller
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
#  ██████╗██████╗ ███████╗ █████╗ ████████╗███████╗
# ██╔════╝██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██╔════╝
# ██║     ██████╔╝█████╗  ███████║   ██║   █████╗  
# ██║     ██╔══██╗██╔══╝  ██╔══██║   ██║   ██╔══╝  
# ╚██████╗██║  ██║███████╗██║  ██║   ██║   ███████╗
#  ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
// Show the form for creating a new resource
##################################################################################################################
	public function create($id = null)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);


		$products = InvoicerProduct::all();
		// $clients = Client::orderBy('company_name','asc')->pluck('company_name','id');
		// $clients = User::where('company_name', '!=', NULL)->orderBy('company_name','asc')->pluck('company_name','id');
		$clients = User::where('company_name', '<>', '')->orderBy('company_name')->get();
		// dd($clients);

		if($id){
			// $client = Client::where('id',$id)->pluck('company_name','id');
			$client = User::findOrFail($id);
			// dd($client);
			return view('admin.invoicer.invoices.create.create', compact('products','clients','client'));
		}

		return view('admin.invoicer.invoices.create.create', compact('products','clients'));
		
	}


##################################################################################################################
# ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
# ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
# ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
# ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
# ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
# ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
// Remove the specified resource from storage
// Used in the index page and trashAll action to soft delete multiple records
##################################################################################################################
	public function destroy($id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		$invoice = InvoicerInvoice::find($id)->delete();
		// dd($invoice);
		$invoice_items = InvoicerInvoiceItem::where('invoice_id', $id)->delete();
		// dd($invoice_items);
		// $invoice->delete();

		$notification = [
			'message' => 'The invoice and related invoice items were deleted successfully.',
			'alert-type' => 'success'
		];

		return redirect()->route('admin.invoicer.invoices')->with($notification);
	}


##################################################################################################################
# ██████╗  ██████╗ ██╗    ██╗███╗   ██╗██╗      ██████╗  █████╗ ██████╗     ██████╗ ██████╗ ███████╗
# ██╔══██╗██╔═══██╗██║    ██║████╗  ██║██║     ██╔═══██╗██╔══██╗██╔══██╗    ██╔══██╗██╔══██╗██╔════╝
# ██║  ██║██║   ██║██║ █╗ ██║██╔██╗ ██║██║     ██║   ██║███████║██║  ██║    ██████╔╝██║  ██║█████╗  
# ██║  ██║██║   ██║██║███╗██║██║╚██╗██║██║     ██║   ██║██╔══██║██║  ██║    ██╔═══╝ ██║  ██║██╔══╝  
# ██████╔╝╚██████╔╝╚███╔███╔╝██║ ╚████║███████╗╚██████╔╝██║  ██║██████╔╝    ██║     ██████╔╝██║     
# ╚═════╝  ╚═════╝  ╚══╝╚══╝ ╚═╝  ╚═══╝╚══════╝ ╚═════╝ ╚═╝  ╚═╝╚═════╝     ╚═╝     ╚═════╝ ╚═╝     
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
# ██████╗  ██████╗ ██╗    ██╗███╗   ██╗██╗      ██████╗  █████╗ ██████╗     ██████╗ ██████╗ ███████╗
# ██╔══██╗██╔═══██╗██║    ██║████╗  ██║██║     ██╔═══██╗██╔══██╗██╔══██╗    ██╔══██╗██╔══██╗██╔════╝
# ██║  ██║██║   ██║██║ █╗ ██║██╔██╗ ██║██║     ██║   ██║███████║██║  ██║    ██████╔╝██║  ██║█████╗  
# ██║  ██║██║   ██║██║███╗██║██║╚██╗██║██║     ██║   ██║██╔══██║██║  ██║    ██╔═══╝ ██║  ██║██╔══╝  
# ██████╔╝╚██████╔╝╚███╔███╔╝██║ ╚████║███████╗╚██████╔╝██║  ██║██████╔╝    ██║     ██████╔╝██║     
# ╚═════╝  ╚═════╝  ╚══╝╚══╝ ╚═╝  ╚═══╝╚══════╝ ╚═════╝ ╚═╝  ╚═╝╚═════╝     ╚═╝     ╚═════╝ ╚═╝     
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
# ███████╗██████╗ ██╗████████╗
# ██╔════╝██╔══██╗██║╚══██╔══╝
# █████╗  ██║  ██║██║   ██║   
# ██╔══╝  ██║  ██║██║   ██║   
# ███████╗██████╔╝██║   ██║   
# ╚══════╝╚═════╝ ╚═╝   ╚═╝   
// Show the form for editing the specified resource
##################################################################################################################
	public function edit($id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		$invoice = InvoicerInvoice::with('InvoiceItems')->find($id);
		// dd($invoice);
		// $clients = Client::orderBy('company_name','asc')->pluck('company_name','id');
		// $clients = User::orderBy('company_name','asc')->pluck('company_name','id');
		$clients = User::where('company_name', '<>', '')->get();
		//$invoiceitems = InvoiceItem::where('invoice_id', $invoice->id);
		//dd($invoiceitems);
		// dd($clients);

		return view('admin.invoicer.invoices.edit.edit', compact('invoice','clients'));
	}


##################################################################################################################
# ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
# ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
# ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
# ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
# ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
# ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
// Display a list of resources
##################################################################################################################
	public function index()
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		$invoices = InvoicerInvoice::sortable()->with('user')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));

		return view('admin.invoicer.invoices.index.index', compact('invoices'));
	}


##################################################################################################################
# ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗ 
# ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗
# ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║
# ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║
# ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝
# ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝ 
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
# ██╗      ██████╗  ██████╗  ██████╗ ███████╗██████╗ 
# ██║     ██╔═══██╗██╔════╝ ██╔════╝ ██╔════╝██╔══██╗
# ██║     ██║   ██║██║  ███╗██║  ███╗█████╗  ██║  ██║
# ██║     ██║   ██║██║   ██║██║   ██║██╔══╝  ██║  ██║
# ███████╗╚██████╔╝╚██████╔╝╚██████╔╝███████╗██████╔╝
# ╚══════╝ ╚═════╝  ╚═════╝  ╚═════╝ ╚══════╝╚═════╝
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
# ██████╗  █████╗ ██╗██████╗ 
# ██╔══██╗██╔══██╗██║██╔══██╗
# ██████╔╝███████║██║██║  ██║
# ██╔═══╝ ██╔══██║██║██║  ██║
# ██║     ██║  ██║██║██████╔╝
# ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝ 
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
# ██╗   ██╗ ███╗   ██╗  ██████╗  █████╗ ██╗██████╗ 
# ██╗   ██╗ ████╗  ██║ ██╔══██╗██╔══██╗██║██╔══██╗
# ██╗   ██╗ ██╔██╗ ██║ ██████╔╝███████║██║██║  ██║
# ██╗   ██╗ ██║╚██╗██║ ██╔═══╝ ██╔══██║██║██║  ██║
# ╚██████╔╝ ██║ ╚████║ ██║     ██║  ██║██║██████╔╝
#  ╚═════╝  ╚═╝  ╚═══╝ ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝ 
##################################################################################################################
   public function unpaid()
   {
      // Check if user has required permission
   	abort_unless(Gate::allows('invoicer-invoice'), 403);

      $invoices = InvoicerInvoice::sortable()
         ->where('status','!=','paid')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      return view('admin.invoicer.invoices.index.index', compact('invoices'));
   }


##################################################################################################################
# ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
# ██╔════╝██║  ██║██╔═══██╗██║    ██║
# ███████╗███████║██║   ██║██║ █╗ ██║
# ╚════██║██╔══██║██║   ██║██║███╗██║
# ███████║██║  ██║╚██████╔╝╚███╔███╔╝
# ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
// Display the specified resource
##################################################################################################################
	public function show($id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		$invoice = InvoicerInvoice::with('invoiceItems')->find($id);
		// $invoice = InvoicerInvoice::findOrFail($id);
		// dd($invoice);

		return view('admin.invoicer.invoices.show.show', compact('invoice'));
	}


##################################################################################################################
# ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗ 
# ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗
# ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║
# ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║
# ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝
# ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝ 
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

		// Send email
      // Mail::to('stephaneandstacie@gmail.com')->send(new InvoicedPDFMail($invoice));

      // Email PDF to client's email
      Mail::to($invoice->user->email)->send(new InvoicedPDFMail($invoice));

		// Set flash data with success message
		$notification = [
			'message' => 'This invoice was successfully updated and emailed to the client!', 
			'alert-type' => 'success'
		];

		// Redirect
		return redirect()->route('admin.invoicer.invoices')->with($notification);
	}


##################################################################################################################
# ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗██████╗      █████╗ ██╗     ██╗     
# ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝██╔══██╗    ██╔══██╗██║     ██║     
# ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗  ██║  ██║    ███████║██║     ██║     
# ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝  ██║  ██║    ██╔══██║██║     ██║     
# ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██████╔╝    ██║  ██║███████╗███████╗
# ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═════╝     ╚═╝  ╚═╝╚══════╝╚══════╝
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
				$pdf->save(public_path().'/invoices/'. $invoice->id . '.pdf');

				// Send email
		      // Mail::to('stephaneandstacie@gmail.com')->send(new InvoicedPDFMail($invoice));

		      // Email PDF to client's email
		      Mail::to($invoice->user->email)->send(new InvoicedPDFMail($invoice));
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
# ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██████╗  █████╗ ██╗██████╗ 
# ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██╔══██╗██╔══██╗██║██╔══██╗
# ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██████╔╝███████║██║██║  ██║
# ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██╔═══╝ ██╔══██║██║██║  ██║
# ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║     ██║  ██║██║██████╔╝
# ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝
##################################################################################################################
	public function status_paid($id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		$invoice = InvoicerInvoice::findOrFail($id);
			$invoice->status = 'paid';
			$invoice->paid_at = Carbon::now();
		$invoice->save();

		// Set flash data with success message
		$notification = [
			'message' => 'This invoice was successfully updated!', 
			'alert-type' => 'success'
		];

		// Redirect to posts.show
		return redirect()->route('admin.invoicer.invoices')->with($notification);
	}


##################################################################################################################
# ███████╗████████╗ █████╗ ████████╗██╗   ██╗███████╗    ██████╗  █████╗ ██╗██████╗      █████╗ ██╗     ██╗     
# ██╔════╝╚══██╔══╝██╔══██╗╚══██╔══╝██║   ██║██╔════╝    ██╔══██╗██╔══██╗██║██╔══██╗    ██╔══██╗██║     ██║     
# ███████╗   ██║   ███████║   ██║   ██║   ██║███████╗    ██████╔╝███████║██║██║  ██║    ███████║██║     ██║     
# ╚════██║   ██║   ██╔══██║   ██║   ██║   ██║╚════██║    ██╔═══╝ ██╔══██║██║██║  ██║    ██╔══██║██║     ██║     
# ███████║   ██║   ██║  ██║   ██║   ╚██████╔╝███████║    ██║     ██║  ██║██║██████╔╝    ██║  ██║███████╗███████╗
# ╚══════╝   ╚═╝   ╚═╝  ╚═╝   ╚═╝    ╚═════╝ ╚══════╝    ╚═╝     ╚═╝  ╚═╝╚═╝╚═════╝     ╚═╝  ╚═╝╚══════╝╚══════╝
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
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		// validate the data
		$this->validate($request, [
			'client_id' => 'required',
			// 'work_date' => 'required',
			'status' => 'required'
		]);

		// save the data in the database
		$invoice = new InvoicerInvoice;
			// $invoice->work_date = $request->work_date;
			// $invoice->client_id = $request->client_id;
			$invoice->user_id = $request->client_id;
			$invoice->notes = $request->notes;
			$invoice->status = $request->status;
			if($request->status == 'invoiced')
			{
				$invoice->invoiced_at = Carbon::now();
			}
		$invoice->save();

		// Add items to InvoiceItem table
		if($request->invoiceItem) {
			foreach($request->invoiceItem as $data)
			{
				$item = new InvoiceItem($data);
					$item->invoice_id = $invoice->id;
				$item->save();
			}
		}

		// set a flash message to be displayed on screen
		$notification = [
			'message' => 'The invoice was successfully saved!', 
			'alert-type' => 'success'
		];

		// redirect to another page
	   return redirect()->route('admin.invoicer.invoices')->with($notification);
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
	public function update(Request $request, $id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		// validate the data
		$this->validate($request,
			[
				'user_id'		=> 'required',
				'status'			=> 'required',
				'paid_at'		=> 'required_if:status,==,paid',
				'invoiced_at'	=> 'required_if:status,==,invoiced',
			]);

		$invoice = InvoicerInvoice::find($id);
		
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

			// If status is changed from Invoiced to Logged
			}elseif($ori_status == 'invoiced' && $request->status == 'logged' ){
				// Clear the value of the invoiced_at field
				$invoice->invoiced_at = null;

			// If status is cahnged form Logged to Invoiced
			}elseif($ori_status == 'logged' && $request->status == 'invoiced' ){
				// Set the value of invoiced_at to the value passed from the form
				$invoice->invoiced_at = $request->invoiced_at;

			// If status is changed from Invoiced to Paid
			}elseif($ori_status == 'invoiced' && $request->status == 'paid' ){
				// Set the value of paid_at to the value passed from the form
				$invoice->paid_at = $request->paid_at;
			}

			// Update the rest of the fields
			// $invoice->client_id = $request->client_id;
			$invoice->user_id = $request->user_id;
			$invoice->notes = $request->notes;
			$invoice->status = $request->status;

		// Update the invoice
		$invoice->save();

		// Set flash data with success message
		$notification = [
			'message' => 'This invoice was successfully updated!', 
			'alert-type' => 'success'
		];

		// Redirect to invoices.index
		return redirect()->route('admin.invoicer.invoices')->with($notification);
	}


}
