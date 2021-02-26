<?php

namespace App\Http\Controllers\Admin\Invoicer;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceItemRequest;
use App\Models\Carving;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use App\Models\InvoicerProduct;
use App\Models\User;
use App\Notifications\Invoicer\BillableAddNotification;
use App\Notifications\Invoicer\BillableRemoveNotification;
use App\Notifications\Invoicer\BillableUpdateNotification;
use Config;
use DB;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rule;
use Session;

class InvoiceItemsController extends Controller
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

		$invoice = InvoicerInvoice::findOrFail($inv_id);
		$products = InvoicerProduct::orderBy('code', 'asc')->get();
		$carvings = Carving::all();

		return view('admin.invoicer.invoiceItems.create.create', compact('invoice', 'products','carvings'));
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
	public function destroy(Request $request, $id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		$item = InvoicerInvoiceItem::find($id);
		// dd($item);
		$invoice_id = $item->invoice_id;
		$item->delete();

		// update invoice with totals
		$this::invUpdate($invoice_id);

		// Need to requery the invoice to get the updated total
		$invoice = InvoicerInvoice::with('client')->findOrFail($item->invoice_id);

		// Notify admins
		$users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
		Notification::send($users, new BillableRemoveNotification($item, $invoice));

		// set a flash message to be displayed on screen
		$notification = [
			'message' => 'The billable item was deleted successfully.',
			'alert-type' => 'danger'
		];

		// redirect to another page
		return redirect()->route('admin.invoicer.invoices.edit', $item->invoice_id )->with($notification);
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

		$item = InvoicerInvoiceItem::find($id);
		$products = InvoicerProduct::orderBy('code', 'asc')->get();
		
		return view('admin.invoicer.invoiceItems.edit.edit', compact('item','products'));
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
	public function store(InvoiceItemRequest $request)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		if($request->carving)
		{
			$product = $request->carving;
		}
		if($request->product)
		{
			$product = $request->product;
		}
		if($request->item)
		{
			$product = $request->item;
		}

		$item = new InvoicerInvoiceItem;
			$item->invoice_id = $request->invoice_id;
			$item->product = $product;
			$item->notes = $request->notes;
			$item->work_date = $request->work_date;
			$item->quantity = $request->quantity;
			$item->price = $request->price;
			$item->total = $request->quantity * $request->price;
		$item->save();

		// // update invoice with totals
		$this::invUpdate($request->invoice_id);

		// Need to requery the invoice to get the updated total
		$invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);

		// Notify admins
		$users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
		Notification::send($users, new BillableAddNotification($item, $invoice));

		$notification = [
			'message' => 'The billable item was successfully added!',
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
	public function update(InvoiceItemRequest $request, $id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);
		
		$item = InvoicerInvoiceItem::find($id);
			$item->invoice_id = $request->invoice_id;
			$item->product = $request->product;
			$item->notes = $request->notes;
			$item->work_date = $request->work_date;
			$item->quantity = $request->quantity;
			$item->price = $request->price;
			$item->total = $request->quantity * $request->price;
		$item->save();

		// update invoice with totals
		$this::invUpdate($request->invoice_id);

		// Need to requery the invoice to get the updated total
		$invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);
		
		// Notify admins
		$users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
		Notification::send($users, new BillableUpdateNotification($item, $invoice));

		// set a flash message to be displayed on screen
		$notification = [
			'message' => 'The billable item was updated successfully!',
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
	public function invUpdate($invID)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-invoice'), 403);

		// update invoice with totals
		$invoice = InvoicerInvoice::find($invID);
			 // Perform required calculations
			$inv_amount_charged = DB::table('invoicer__invoice_items')->where('invoice_id', '=', $invoice->id)->sum('total');
			$inv_hst = $inv_amount_charged * Config::get('invoicer.hstRate');
			$inv_sub_total = $inv_amount_charged + $inv_hst;
			$inv_wsib = $inv_amount_charged * Config::get('invoicer.wsibRate');
			$inv_income_taxes = $inv_amount_charged * Config::get('invoicer.incomeTaxRate');
			$inv_total_deductions = $inv_wsib + $inv_income_taxes;
			$inv_total = $inv_amount_charged - $inv_total_deductions;
			
			// Set the values to be updated
			$invoice->amount_charged = $inv_amount_charged;
			$invoice->hst = $inv_hst;
			$invoice->sub_total = $inv_sub_total;
			$invoice->wsib = $inv_wsib;
			$invoice->income_taxes = $inv_income_taxes;
			$invoice->total_deductions = $inv_total_deductions;
			$invoice->total = $inv_total;
		$invoice->save();
	}


}
