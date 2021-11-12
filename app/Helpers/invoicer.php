<?php

use App\Models\InvoicerActivity;
use App\Models\InvoicerInvoice;
use Illuminate\Support\Facades\Config;

function clearInvoiceAmounts($invID)
{
	// Check if user has required permission
	abort_unless(Gate::allows('invoicer-invoice'), 403);

	// dd($invID);
	// update invoice with totals
	$invoice = InvoicerInvoice::find($invID);
	// dd("clearInvoiceAmounts".$invoice);

	// InvoicerInvoice::where('id',$invID)->update(
	// 	[
	// 		'amount_charged' => '0.00',
	// 		'hst' => '0.00',
	// 		'sub_total' => '0.00',
	// 		'wsib' => '0.00',
	// 		'income_taxes' => '0.00',
	// 		'total_deductions' => '0.00',
	// 		'deposits' => '0.00',
	// 		'discounts' => '0.00',
	// 		'payments' => '0.00',
	// 		'total' => '0.00',
	// 	]
	// );

		$invoice->amount_charged = '0.00';
		$invoice->hst = '0.00';
		$invoice->sub_total = '0.00';
		$invoice->wsib = '0.00';
		$invoice->income_taxes = '0.00';
		$invoice->total_deductions = '0.00';
		$invoice->deposits = '0.00';
		$invoice->discounts = '0.00';
		$invoice->payments = '0.00';
		$invoice->total = '0.00';
	$invoice->save();
}

function calculateInvoiceAmounts($invID, $activity = null)
{
	// dd("calculateInvoiceAmounts".$invID);
	// Check if user has required permission
	abort_unless(Gate::allows('invoicer-invoice'), 403);

	// update invoice with totals
	$invoice = InvoicerInvoice::find($invID);
	// dd("invoice".$invoice->id);

		 // Perform required calculations
		$inv_amount_charged = DB::table('invoicer__invoice_items')->where('invoice_id', '=', $invID)->where('deleted_at',null)->sum('total');
// dd($inv_amount_charged);
		$inv_hst = $inv_amount_charged * Config::get('invoicer.hstRate');
		// $inv_hst_total = $inv_amount_charged * Config::get('invoicer.hstRate');
		// $tax_rebates = InvoicerActivity::where('invoice_id',$invID)->where('activity','taxRebate')->sum('amount');
		// $inv_hst = $inv_hst_total - $tax_rebates;

		$inv_depositsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','depositAdd')->sum('amount');
		$inv_depositsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','depositRemove')->sum('amount');
		$inv_deposits = $inv_depositsAdd - $inv_depositsRemove;
		// dd($inv_deposits);

		$inv_discountsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','discountAdd')->sum('amount');
		$inv_discountsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','discountRemove')->sum('amount');
		$inv_discounts = $inv_discountsAdd - $inv_discountsRemove;
		// dd($inv_discounts);

		$inv_paymentsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','paymentAdd')->sum('amount');
		$inv_paymentsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','paymentRemove')->sum('amount');
		$inv_payments = $inv_paymentsAdd - $inv_paymentsRemove;
		// dd($inv_payments);			

		$inv_sub_total = $inv_amount_charged + $inv_hst;

		$inv_wsib = $inv_amount_charged * Config::get('invoicer.wsibRate');
		$inv_income_taxes = $inv_amount_charged * Config::get('invoicer.incomeTaxRate');
		$inv_total_deductions = $inv_wsib + $inv_income_taxes;

		$inv_total = $inv_sub_total - $inv_total_deductions - $inv_deposits - $inv_discounts - $inv_payments;
		
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
}

