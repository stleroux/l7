<?php

namespace App\Http\Controllers\Admin\Invoicer;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\InvoicerInvoice;
use Config;
use DB;
use Gate;

class LedgerController extends Controller
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
		abort_unless(Gate::allows('invoicer-ledger'), 403);	  

		$invoices = InvoicerInvoice::sortable()->with('user')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
		$totalAmountCharged = DB::table('invoicer__invoices')->sum('amount_charged');
		$totalHST = DB::table('invoicer__invoices')->sum('hst');
		$totalSubTotal = DB::table('invoicer__invoices')->sum('sub_total');
		$totalWSIB = DB::table('invoicer__invoices')->sum('wsib');
		$totalIncomeTaxes = DB::table('invoicer__invoices')->sum('income_taxes');
		$totalTotalDeductions = DB::table('invoicer__invoices')->sum('total_deductions');
		$totalTotal = DB::table('invoicer__invoices')->sum('total');

		return view('admin.invoicer.ledger.index', compact('invoices','totalHST','totalAmountCharged','totalSubTotal', 'totalWSIB', 'totalIncomeTaxes','totalTotalDeductions', 'totalTotal'));
      // return view('invoicer.ledger.index', compact('invoices'));
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
		abort_unless(Gate::allows('invoicer-ledger'), 403);	  

		$invoices = InvoicerInvoice::sortable()->where('status','=','invoiced')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
		$totalAmountCharged = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('amount_charged');
		$totalHST = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('hst');
		$totalSubTotal = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('sub_total');
		$totalWSIB = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('wsib');
		$totalIncomeTaxes = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('income_taxes');
		$totalTotalDeductions = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('total_deductions');
		$totalTotal = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('total');

		return view('admin.invoicer.ledger.index', compact('invoices','totalHST','totalAmountCharged','totalSubTotal', 'totalWSIB', 'totalIncomeTaxes','totalTotalDeductions', 'totalTotal'));
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
		abort_unless(Gate::allows('invoicer-ledger'), 403);	  
	  
		$invoices = InvoicerInvoice::sortable()->where('status','=','logged')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
		$totalAmountCharged = DB::table('invoicer__invoices')->where('status','=','logged')->sum('amount_charged');
		$totalHST = DB::table('invoicer__invoices')->where('status','=','logged')->sum('hst');
		$totalSubTotal = DB::table('invoicer__invoices')->where('status','=','logged')->sum('sub_total');
		$totalWSIB = DB::table('invoicer__invoices')->where('status','=','logged')->sum('wsib');
		$totalIncomeTaxes = DB::table('invoicer__invoices')->where('status','=','logged')->sum('income_taxes');
		$totalTotalDeductions = DB::table('invoicer__invoices')->where('status','=','logged')->sum('total_deductions');
		$totalTotal = DB::table('invoicer__invoices')->where('status','=','logged')->sum('total');

		return view('admin.invoicer.ledger.index', compact('invoices','totalHST','totalAmountCharged','totalSubTotal', 'totalWSIB', 'totalIncomeTaxes','totalTotalDeductions', 'totalTotal'));
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
		abort_unless(Gate::allows('invoicer-ledger'), 403);	  

		$invoices = InvoicerInvoice::sortable()->where('status','=','paid')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
		$totalAmountCharged = DB::table('invoicer__invoices')->where('status','=','paid')->sum('amount_charged');
		$totalHST = DB::table('invoicer__invoices')->where('status','=','paid')->sum('hst');
		$totalSubTotal = DB::table('invoicer__invoices')->where('status','=','paid')->sum('sub_total');
		$totalWSIB = DB::table('invoicer__invoices')->where('status','=','paid')->sum('wsib');
		$totalIncomeTaxes = DB::table('invoicer__invoices')->where('status','=','paid')->sum('income_taxes');
		$totalTotalDeductions = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total_deductions');
		$totalTotal = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total');

		return view('admin.invoicer.ledger.index', compact('invoices','totalHST','totalAmountCharged','totalSubTotal', 'totalWSIB', 'totalIncomeTaxes','totalTotalDeductions', 'totalTotal'));
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
		abort_unless(Gate::allows('invoicer-ledger'), 403);     

      $invoices = InvoicerInvoice::sortable()->where('status','!=','paid')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
      $totalAmountCharged = DB::table('invoicer__invoices')->where('status','=','paid')->sum('amount_charged');
      $totalHST = DB::table('invoicer__invoices')->where('status','=','paid')->sum('hst');
      $totalSubTotal = DB::table('invoicer__invoices')->where('status','=','paid')->sum('sub_total');
      $totalWSIB = DB::table('invoicer__invoices')->where('status','=','paid')->sum('wsib');
      $totalIncomeTaxes = DB::table('invoicer__invoices')->where('status','=','paid')->sum('income_taxes');
      $totalTotalDeductions = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total_deductions');
      $totalTotal = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total');

      return view('admin.invoicer.ledger.index', compact('invoices','totalHST','totalAmountCharged','totalSubTotal', 'totalWSIB', 'totalIncomeTaxes','totalTotalDeductions', 'totalTotal'));
   }


}
