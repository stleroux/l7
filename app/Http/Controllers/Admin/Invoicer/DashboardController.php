<?php

namespace App\Http\Controllers\Admin\Invoicer;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\InvoicerClient;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use App\Models\InvoicerProduct;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
//use Auth;
//use Charts;

class DashboardController extends Controller
{

##################################################################################################################
#   ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
#  ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
#  ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
#  ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
#  ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#   ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct() {
      $this->middleware('auth');
      //Log::useFiles(storage_path().'/logs/articles.log');
      //Log::useFiles(storage_path().'/logs/audits.log');
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
      abort_unless(Gate::allows('invoicer-dashboard'), 403);

      // Get clients with remaining balances
      // $owingClients = InvoicerClient::whereHas('invoices', function ($query) {
      $owingClients = User::whereHas('invoices', function ($query) {
         return $query->where('total', '>', 0);
      })->get();

      // $bestClients = InvoicerClient::whereHas('invoices', function ($query) {
      $bestClients = User::whereHas('invoices', function ($query) {
         $query->where('payments', '>', 0);
      })->with('invoices')->get();

      $invoicesQuotes = InvoicerInvoice::where('status','quote')->get();
      $invoicesEstimates = InvoicerInvoice::where('status','estimate')->get();
      $invoicesSubTotal = InvoicerInvoice::where('status','quote')->orWhere('status','estimate')->get();

      $invoicesInvoiced = InvoicerInvoice::where('status','invoiced')->get();
      $invoicesPaid = InvoicerInvoice::where('status','paid')->get();
      $invoicesWorkOrders = InvoicerInvoice::where('status','workOrder')->get();
      $invoicesCompleted = InvoicerInvoice::where('status','completed')->get();
      $invoicesShipped = InvoicerInvoice::where('status','shipped')->get();
      $invoicesPickedUp = InvoicerInvoice::where('status','pickedUp')->get();
      $invoicesCanceled = InvoicerInvoice::where('status','canceled')->get();

      $invoicesTotal = InvoicerInvoice::where('status','!=','estimate')->get();

      $invoiceItems = InvoicerInvoiceItem::all();
      $products = InvoicerProduct::orderByRaw('RAND()')->take(10)->get();;
      $productsCount = InvoicerProduct::count();
      // $invoicesInvoiced = InvoicerInvoice::where('status','invoiced')->get();
      // $invoicesLogged = InvoicerInvoice::where('status','logged')->get();

      return view('admin.invoicer.dashboard.index',
         compact(
            'owingClients',
            'bestClients',
            'invoicesQuotes',
            'invoicesEstimates',
            'invoicesSubTotal',
            'invoicesPaid',
            'invoicesInvoiced',
            'invoicesWorkOrders',
            'invoicesCompleted',
            'invoicesShipped',
            'invoicesPickedUp',
            'invoicesCanceled',
            'invoicesTotal',
            'invoiceItems',
            'products',
            'productsCount'
         )
      );
   }

}
