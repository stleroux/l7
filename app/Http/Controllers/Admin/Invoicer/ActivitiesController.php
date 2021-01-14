<?php

namespace App\Http\Controllers\Admin\Invoicer;

use App\Http\Controllers\Controller;
use App\Mail\Invoicer\ActivityRemovedPDFMail;
use App\Mail\Invoicer\PaidPDFMail;
use App\Mail\Invoicer\ReceivedPaymentPDFMail;
use App\Models\InvoicerActivity;
use App\Models\InvoicerInvoice;
use Carbon\Carbon;
use Config;
use DB;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use PDF;
use Session;

class ActivitiesController extends Controller
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
	public function create($inv_id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		$activity = New invoicerActivity();
		$invoice = InvoicerInvoice::findOrFail($inv_id);
		// $products = InvoicerProduct::orderBy('code', 'asc')->get();
		// ->pluck('code','id');
		// dd($products);
		// $products = Product::orderBy('code', 'asc')->get()->toArray();

		return view('admin.invoicer.activities.create.create', compact('invoice', 'activity'));
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

		$activity = InvoicerActivity::find($id);
		// dd($activity);
		$activity->id = $activity->activity_id;
		$activity->delete();

		// update invoice with totals
		$this::invUpdate($activity->invoice_id);


		$invoice = InvoicerInvoice::with('client')->findOrFail($activity->invoice_id);
		// dd($invoice);
		// if($request->activity == 'payment') {
			// dd('Activity is payment');
			// Create PDF file and store it
			$pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
			$pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
			// dd('PDF generated. Ready to send email');
			// send email based on activity
      	Mail::to($invoice->client->email)->send(new ActivityRemovedPDFMail($invoice));
      	// dd('Email sent');
		// }

		// set a flash message to be displayed on screen
		$notification = [
			'message' => 'The billable item was deleted successfully.',
			'alert-type' => 'danger'
		];

		// redirect to another page
		return redirect()->route('admin.invoicer.invoices.edit', $activity->invoice_id )->with($notification);
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

		$activity = InvoicerActivity::find($id);
		// $products = InvoicerProduct::orderBy('code', 'asc')->get();
		// ->pluck('code','id');
		
		return view('admin.invoicer.activities.edit.edit', compact('activity'));
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
			'activity' => 'required|min:0|not_in:0',
			'amount' => 'required',
		]);

		$item = new InvoicerActivity;
			$item->invoice_id = $request->invoice_id;
			$item->activity = $request->activity;
			$item->amount = $request->amount;
		$item->save();

		$invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);

		// Update invoice with totals
		$this::invUpdate($request->invoice_id);

		// Need to requery the invoice to get the updated total
		$invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);

		// Create PDF file and store it
		$pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
		$pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');


		if($request->activity == 'payment')
		{
			
			if($invoice->total > 0)
			{
				// send email based on activity
      		Mail::to($invoice->client->email)->send(new ReceivedPaymentPDFMail($invoice));
			}

			if ($invoice->total == 0)
			{
				// Update the invoice
				$invoice->status = 'invoiced';
				$invoice->invoiced_at = Carbon::now();
				$invoice->status = 'paid';
				$invoice->paid_at = Carbon::now();
				$invoice->save();

				// send email based on activity
      		Mail::to($invoice->client->email)->send(new PaidPDFMail($invoice));
			}

			// Create PDF file and store it
			$pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
			$pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
		}

		if($request->activity == 'discount' || $request->activity == 'deposit') {
			// Create PDF file and store it
			$pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
			$pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
		}

		// set a flash message to be displayed on screen
		Session::flash('success','');
		$notification = [
			'message' => 'The activity was successfully added!',
			'alert-type' => 'success'
		];

		// redirect to another page
	   return redirect()->route('admin.invoicer.invoices.edit', $item->invoice_id)->with($notification);
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
		$this->validate($request, [
			'activity' => 'required|min:0|not_in:0',
			'amount' => 'required',
		]);

		$invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);

		$item = new InvoicerActivity;
			$item->invoice_id = $request->invoice_id;
			$item->activity = $request->activity;
			$item->amount = $request->amount;
		$item->save();

		// update invoice with totals
		$this::invUpdate($request->invoice_id);

		if($request->activity == 'payment') {
			// dd('Activity is payment');
			// Create PDF file and store it
			$pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
			$pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
			// dd('PDF generated. Ready to send email');
			// send email based on activity
      	Mail::to($invoice->client->email)->send(new UpdatedPaymentPDFMail($invoice));
      	// dd('Email sent');
		}

		if($request->activity == 'discount' || $request->activity == 'deposit') {
			// dd('Activity is payment');
			// Create PDF file and store it
			$pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
			$pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
			// dd('PDF generated. Ready to send email');
			// send email based on activity
      	// Mail::to($invoice->client->email)->send(new ReceivedPaymentPDFMail($invoice));
      	// dd('Email sent');
		}

		// set a flash message to be displayed on screen
		$notification = [
			'message' => 'The activity item was updated successfully!',
			'alert-type' => 'success'
		];

	   // redirect to another page
	   return redirect()->route('admin.invoicer.invoices.edit', $item->invoice_id)->with($notification);
	}


##################################################################################################################
# ██╗███╗   ██╗██╗   ██╗ ██████╗ ██╗ ██████╗███████╗    ██╗   ██╗██████╗ ██████╗  █████╗ ████████╗███████╗
# ██║████╗  ██║██║   ██║██╔═══██╗██║██╔════╝██╔════╝    ██║   ██║██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝██╔════╝
# ██║██╔██╗ ██║██║   ██║██║   ██║██║██║     █████╗      ██║   ██║██████╔╝██║  ██║███████║   ██║   █████╗  
# ██║██║╚██╗██║╚██╗ ██╔╝██║   ██║██║██║     ██╔══╝      ██║   ██║██╔═══╝ ██║  ██║██╔══██║   ██║   ██╔══╝  
# ██║██║ ╚████║ ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗    ╚██████╔╝██║     ██████╔╝██║  ██║   ██║   ███████╗
# ╚═╝╚═╝  ╚═══╝  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝     ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝
##################################################################################################################
	public function invUpdate($invID, $activity = null)
	{
		// dd($invID);
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		// update invoice with totals
		$invoice = InvoicerInvoice::find($invID);
			 // Perform required calculations
			$inv_amount_charged = DB::table('invoicer__invoice_items')->where('invoice_id', '=', $invoice->id)->sum('total');
			$inv_hst = $inv_amount_charged * Config::get('invoicer.hstRate');
			
			$inv_deposits = InvoicerActivity::where('invoice_id',$invID)->where('activity','deposit')->sum('amount');
			$inv_discounts = InvoicerActivity::where('invoice_id',$invID)->where('activity','discount')->sum('amount');
			$inv_payments = InvoicerActivity::where('invoice_id',$invID)->where('activity','payment')->sum('amount');

			$inv_sub_total = $inv_amount_charged + $inv_hst;

			$inv_wsib = $inv_amount_charged * Config::get('invoicer.wsibRate');
			$inv_income_taxes = $inv_amount_charged * Config::get('invoicer.incomeTaxRate');
			$inv_total_deductions = $inv_wsib + $inv_income_taxes;

			$inv_total = $inv_amount_charged - $inv_total_deductions - $inv_deposits - $inv_discounts - $inv_payments;
			
			// Set the values to be updated
			$invoice->amount_charged = $inv_amount_charged;
			$invoice->hst = $inv_hst;
			$invoice->sub_total = $inv_sub_total;

			$invoice->deposits = $inv_deposits;
			$invoice->discounts = $inv_discounts;
			$invoice->payments = $inv_payments;

			$invoice->wsib = $inv_wsib;
			$invoice->income_taxes = $inv_income_taxes;
			$invoice->total_deductions = $inv_total_deductions;

			$invoice->total = $inv_total;
		$invoice->save();

		// if($activity == 'payment') {
		// 	// Create PDF file and store it
		// 	$pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
		// 	$pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
		// 	// send email based on activity
  //     	Mail::to($invoice->client->email)->send(new ReceivedPaymentPDFMail($invoice));
		// }
		return $invoice;
	}


}
