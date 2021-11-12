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
      abort_unless(Gate::allows('invoicer-ledger'), 403);     

      $invoices = InvoicerInvoice::with('client')
         ->with('activities')
         ->where('status', '!=', 'estimate')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      $estimates = InvoicerInvoice::with('client')
         ->with('activities')
         ->where('status', 'estimate')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      $amountCharged = DB::table('invoicer__invoices')->sum('amount_charged');
      $hst = DB::table('invoicer__invoices')->sum('hst');
      $subTotal = DB::table('invoicer__invoices')->sum('sub_total');
      $wsib = DB::table('invoicer__invoices')->sum('wsib');
      $incomeTaxes = DB::table('invoicer__invoices')->sum('income_taxes');
      $deductions = DB::table('invoicer__invoices')->sum('total_deductions');
      
      $depositsAdd = DB::table('invoicer__activities')->where('activity','depositAdd')->sum('amount');
      $depositsRemove = DB::table('invoicer__activities')->where('activity','depositRemove')->sum('amount');
      $deposits = $depositsAdd - $depositsRemove;

      $discountsAdd = DB::table('invoicer__activities')->where('activity','discountAdd')->sum('amount');
      $discountsRemove = DB::table('invoicer__activities')->where('activity','discountRemove')->sum('amount');
      $discounts = $discountsAdd - $discountsRemove;

      $paymentsAdd = DB::table('invoicer__activities')->where('activity','paymentAdd')->sum('amount');
      $paymentsRemove = DB::table('invoicer__activities')->where('activity','paymentRemove')->sum('amount');
      $payments = $paymentsAdd - $paymentsRemove;

      $total = DB::table('invoicer__invoices')->sum('total');

      return view('admin.invoicer.ledger.index', compact('invoices','estimates','amountCharged','hst','subTotal', 'wsib', 'incomeTaxes','deductions', 'deposits', 'discounts', 'payments', 'total'));
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
      abort_unless(Gate::allows('invoicer-ledger'), 403);
     
      $invoices = InvoicerInvoice::where('status','=','estimate')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      $amountCharged = DB::table('invoicer__invoices')->where('status','=','estimate')->sum('amount_charged');
      $hst = DB::table('invoicer__invoices')->where('status','=','estimate')->sum('hst');
      $subTotal = DB::table('invoicer__invoices')->where('status','=','estimate')->sum('sub_total');
      $wsib = DB::table('invoicer__invoices')->where('status','=','estimate')->sum('wsib');
      $incomeTaxes = DB::table('invoicer__invoices')->where('status','=','estimate')->sum('income_taxes');
      $deductions = DB::table('invoicer__invoices')->where('status','=','estimate')->sum('total_deductions');
      $total = DB::table('invoicer__invoices')->where('status','=','estimate')->sum('total');

      $deposits = DB::table('invoicer__activities')->where('activity','deposit')->sum('amount');
      $discounts = DB::table('invoicer__activities')->where('activity','discount')->sum('amount');
      $payments = DB::table('invoicer__activities')->where('activity','payment')->sum('amount');

      return view('admin.invoicer.ledger.index', compact('invoices','amountCharged','hst','subTotal','wsib','incomeTaxes','deductions','deposits','discounts','payments','total'));
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
      abort_unless(Gate::allows('invoicer-ledger'), 403);     

      $invoices = InvoicerInvoice::where('status','=','invoiced')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
      $amountCharged = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('amount_charged');
      $hst = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('hst');
      $subTotal = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('sub_total');
      $wsib = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('wsib');
      $incomeTaxes = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('income_taxes');
      $deductions = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('total_deductions');
      $total = DB::table('invoicer__invoices')->where('status','=','invoiced')->sum('total');

      $deposits = DB::table('invoicer__activities')->where('activity','deposit')->sum('amount');
      $discounts = DB::table('invoicer__activities')->where('activity','discount')->sum('amount');
      $payments = DB::table('invoicer__activities')->where('activity','payment')->sum('amount');

      return view('admin.invoicer.ledger.index', compact('invoices','amountCharged','hst','subTotal','wsib','incomeTaxes','deductions','deposits','discounts','payments','total'));
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
      abort_unless(Gate::allows('invoicer-ledger'), 403);     
     
      $invoices = InvoicerInvoice::where('status','=','logged')
         ->orderBy('id','desc')
         ->paginate(Config::get('settings.rowsPerPage'));

      $amountCharged = DB::table('invoicer__invoices')->where('status','=','logged')->sum('amount_charged');
      $hst = DB::table('invoicer__invoices')->where('status','=','logged')->sum('hst');
      $subTotal = DB::table('invoicer__invoices')->where('status','=','logged')->sum('sub_total');
      $wsib = DB::table('invoicer__invoices')->where('status','=','logged')->sum('wsib');
      $incomeTaxes = DB::table('invoicer__invoices')->where('status','=','logged')->sum('income_taxes');
      $deductions = DB::table('invoicer__invoices')->where('status','=','logged')->sum('total_deductions');
      $total = DB::table('invoicer__invoices')->where('status','=','logged')->sum('total');

      $deposits = DB::table('invoicer__activities')->where('activity','deposit')->sum('amount');
      $discounts = DB::table('invoicer__activities')->where('activity','discount')->sum('amount');
      $payments = DB::table('invoicer__activities')->where('activity','payment')->sum('amount');

      return view('admin.invoicer.ledger.index', compact('invoices','amountCharged','hst','subTotal','wsib','incomeTaxes','deductions','deposits','discounts','payments','total'));
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
      abort_unless(Gate::allows('invoicer-ledger'), 403);     

      $invoices = InvoicerInvoice::where('status','=','paid')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
      $amountCharged = DB::table('invoicer__invoices')->where('status','=','paid')->sum('amount_charged');
      $hst = DB::table('invoicer__invoices')->where('status','=','paid')->sum('hst');
      $subTotal = DB::table('invoicer__invoices')->where('status','=','paid')->sum('sub_total');
      $wsib = DB::table('invoicer__invoices')->where('status','=','paid')->sum('wsib');
      $incomeTaxes = DB::table('invoicer__invoices')->where('status','=','paid')->sum('income_taxes');
      $deductions = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total_deductions');
      $total = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total');

      $deposits = DB::table('invoicer__activities')->where('activity','deposit')->sum('amount');
      $discounts = DB::table('invoicer__activities')->where('activity','discount')->sum('amount');
      $payments = DB::table('invoicer__activities')->where('activity','payment')->sum('amount');

      return view('admin.invoicer.ledger.index', compact('invoices','amountCharged','hst','subTotal','wsib','incomeTaxes','deductions','deposits','discounts','payments','total'));
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
      abort_unless(Gate::allows('invoicer-ledger'), 403);     

      $invoices = InvoicerInvoice::where('status','!=','paid')->orderBy('id','desc')->paginate(Config::get('settings.rowsPerPage'));
      $amountCharged = DB::table('invoicer__invoices')->where('status','=','paid')->sum('amount_charged');
      $hst = DB::table('invoicer__invoices')->where('status','=','paid')->sum('hst');
      $subTotal = DB::table('invoicer__invoices')->where('status','=','paid')->sum('sub_total');
      $wsib = DB::table('invoicer__invoices')->where('status','=','paid')->sum('wsib');
      $incomeTaxes = DB::table('invoicer__invoices')->where('status','=','paid')->sum('income_taxes');
      $deductions = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total_deductions');
      $total = DB::table('invoicer__invoices')->where('status','=','paid')->sum('total');

      $deposits = DB::table('invoicer__activities')->where('activity','deposit')->sum('amount');
      $discounts = DB::table('invoicer__activities')->where('activity','discount')->sum('amount');
      $payments = DB::table('invoicer__activities')->where('activity','payment')->sum('amount');

      return view('admin.invoicer.ledger.index', compact('invoices','amountCharged','hst','subTotal','wsib','incomeTaxes','deductions','deposits','discounts','payments','total'));
   }


}
