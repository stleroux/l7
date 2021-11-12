<?php

namespace App\Http\Controllers\Admin\Invoicer;

use App\Http\Controllers\Controller;
use App\Mail\Invoicer\ActivityRemovedPDFMail;
use App\Mail\Invoicer\PaidPDFMail;
use App\Mail\Invoicer\ReceivedPaymentPDFMail;
use App\Models\InvoicerActivity;
use App\Models\InvoicerInvoice;
use App\Models\User;
use App\Notifications\Invoicer\DepositAddNotification;
use App\Notifications\Invoicer\DepositRemoveNotification;

use App\Notifications\Invoicer\DiscountAddNotification;
use App\Notifications\Invoicer\DiscountRemoveNotification;

use App\Notifications\Invoicer\PaymentAddNotification;
use App\Notifications\Invoicer\PaymentRemoveNotification;

use Carbon\Carbon;
use Config;
use DB;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use PDF;
use Session;

class ActivitiesController extends Controller
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
   public function create($inv_id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-invoice'), 403);

      $activity = New invoicerActivity();
      $invoice = InvoicerInvoice::findOrFail($inv_id);

      $current_deposits_add = InvoicerActivity::where('invoice_id',$inv_id)->where('activity','depositAdd')->sum('amount');
      $current_discounts_add = InvoicerActivity::where('invoice_id',$inv_id)->where('activity','discountAdd')->sum('amount');
      $current_payments_add = InvoicerActivity::where('invoice_id',$inv_id)->where('activity','paymentAdd')->sum('amount');

      $current_deposits_remove = InvoicerActivity::where('invoice_id',$inv_id)->where('activity','depositRemove')->sum('amount');
      $current_discounts_remove = InvoicerActivity::where('invoice_id',$inv_id)->where('activity','discountRemove')->sum('amount');
      $current_payments_remove = InvoicerActivity::where('invoice_id',$inv_id)->where('activity','paymentRemove')->sum('amount');

      $current_deposits = $current_deposits_add - $current_deposits_remove;
      $current_discounts = $current_discounts_add - $current_discounts_remove;
      $current_payments = $current_payments_add - $current_payments_remove;

      return view('admin.invoicer.activities.create.create', compact('invoice', 'activity','current_deposits','current_discounts','current_payments'));
   }


##################################################################################################################
# DESTROY
# Remove the specified resource from storage
##################################################################################################################
   // public function destroy($id)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $activity = InvoicerActivity::find($id);
   //    // dd($activity);
   //    $activity->id = $activity->activity_id;
   //    $activity->delete();

   //    // update invoice with totals
   //    $this::invUpdate($activity->invoice_id);


   //    $invoice = InvoicerInvoice::with('client')->findOrFail($activity->invoice_id);
   //    // dd($invoice);
   //    // if($request->activity == 'payment') {
   //       // dd('Activity is payment');
   //       // Create PDF file and store it
   //       $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
   //       $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
   //       // dd('PDF generated. Ready to send email');
   //       // send email based on activity
 //         Mail::to($invoice->client->email)->send(new ActivityRemovedPDFMail($invoice));
 //         // dd('Email sent');
   //    // }

   //    // set a flash message to be displayed on screen
   //    $notification = [
   //       'message' => 'The billable item was deleted successfully.',
   //       'alert-type' => 'danger'
   //    ];

   //    // redirect to another page
   //    return redirect()->route('admin.invoicer.invoices.edit', $activity->invoice_id )->with($notification);
   // }


##################################################################################################################
# EDIT
# Show the form for editing the specified resource
##################################################################################################################
   // public function edit($id)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);

   //    $activity = InvoicerActivity::find($id);
   //    // $products = InvoicerProduct::orderBy('code', 'asc')->get();
   //    // ->pluck('code','id');
      
   //    return view('admin.invoicer.activities.edit.edit', compact('activity'));
   // }


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
         'activity' => 'required|min:0|not_in:0',
         'amount' => 'required',
         'comment' => 'required_if:activity,paymentRemove,discountRemove,depositRemove'
         // 'comment' => 'required'
      ]);

      $activity = new InvoicerActivity;
         $activity->invoice_id = $request->invoice_id;
         $activity->activity = $request->activity;
         $activity->amount = $request->amount;
         $activity->comment = $request->comment;
      $activity->save();

      $invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);

      // Update invoice with totals
      // $this::invUpdate($request->invoice_id);
      calculateInvoiceAmounts($request->invoice_id);

      // Need to requery the invoice to get the updated total
      $invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);

      // Create PDF file and store it
      $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
      $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      if($request->activity == 'paymentAdd')
      {
         
         if($invoice->total > 0)
         {
            // send email based on activity
            Mail::to($invoice->client->email)->send(new ReceivedPaymentPDFMail($invoice));
            
            // Notify admins
            $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
            Notification::send($users, new PaymentAddNotification($activity, $invoice));
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
            
            // Notify admins
            $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
            Notification::send($users, new PaymentAddNotification($activity, $invoice));
         }

         // Create PDF file and store it
         $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
         $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
      }

      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      if($request->activity == 'paymentRemove')
      {
         
         if($invoice->total > 0)
         {
            // send email based on activity
            Mail::to($invoice->client->email)->send(new ReceivedPaymentPDFMail($invoice));
            
            // Notify admins
            $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
            Notification::send($users, new PaymentRemoveNotification($activity, $invoice));
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
            
            // Notify admins
            $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
            Notification::send($users, new PaymentRemoveNotification($activity, $invoice));;
         }

         // Create PDF file and store it
         $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
         $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
      }

      /////////////////////////////////////////////////////////////////////////////////////////////////////////
      if($request->activity == 'discountAdd')
      {
         // Create PDF file and store it
         $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
         $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

         // Notify admins
         $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
         Notification::send($users, new DiscountAddNotification($activity, $invoice));

      }

      if($request->activity == 'discountRemove')
      {
         // Create PDF file and store it
         $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
         $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

         // Notify admins
         $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
         Notification::send($users, new DiscountRemoveNotification($activity, $invoice));
      }

      /////////////////////////////////////////////////////////////////////////////////////////////////////////
      if($request->activity == 'depositAdd')
      {
         // Create PDF file and store it
         $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
         $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

         // Notify admins
         $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
         Notification::send($users, new DepositAddNotification($activity, $invoice));
      }

      if($request->activity == 'depositRemove')
      {
         // Create PDF file and store it
         $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
         $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');

         // Notify admins
         $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
         Notification::send($users, new DepositRemoveNotification($activity, $invoice));
      }

      // set a flash message to be displayed on screen
      // Session::flash('success','');
      $notification = [
         'message' => 'The activity was successfully added!',
         'alert-type' => 'success'
      ];

      // return redirect()->route('admin.invoicer.invoices.edit', $activity->invoice_id)->with($notification);
      // if($invoice->status == "quote"){
      //    return redirect()->route('admin.invoicer.quotes.edit', $activity->invoice_id)->with($notification);
      // }
      // elseif($invoice->status == "estimate"){
      //    return redirect()->route('admin.invoicer.estimates.edit', $activity->invoice_id)->with($notification);
      // }
      // elseif($invoice->status == "invoiced"){
      //    return redirect()->route('admin.invoicer.invoices.edit', $activity->invoice_id)->with($notification);
      // }
      return redirect()->route('admin.invoicer.invoices.edit', $activity->invoice_id)->with($notification);

   }


##################################################################################################################
# UPDATE
# Update the specified resource in storage
##################################################################################################################
   // public function update(Request $request, $id)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('invoicer-invoice'), 403);
      
   //    // validate the data
   //    $this->validate($request, [
   //       'activity' => 'required|min:0|not_in:0',
   //       'amount' => 'required',
   //    ]);

   //    $invoice = InvoicerInvoice::with('client')->findOrFail($request->invoice_id);

   //    $activity = new InvoicerActivity;
   //       $activity->invoice_id = $request->invoice_id;
   //       $activity->activity = $request->activity;
   //       $activity->amount = $request->amount;
   //    $activity->save();

   //    // update invoice with totals
   //    $this::invUpdate($request->invoice_id);

   //    if($request->activity == 'payment') {
   //       // dd('Activity is payment');
   //       // Create PDF file and store it
   //       $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
   //       $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
   //       // dd('PDF generated. Ready to send email');
   //       // send email based on activity
 //         Mail::to($invoice->client->email)->send(new UpdatedPaymentPDFMail($invoice));
 //         // dd('Email sent');

 //         // Notify admins
 //         // $user = User::where('id',2)->get();
 //         // Notification::send($user, new PaymentUpdatedNotification($activity, $invoice));
   //    }

   //    if($request->activity == 'discount' || $request->activity == 'deposit') {
   //       // dd('Activity is payment');
   //       // Create PDF file and store it
   //       $pdf = PDF::loadView('admin.invoicer.invoices.invoicedPDF', ['invoice'=>$invoice]);
   //       $pdf->save(public_path().'/_invoices/'. $invoice->id . '.pdf');
   //       // dd('PDF generated. Ready to send email');
   //       // send email based on activity
 //         // Mail::to($invoice->client->email)->send(new ReceivedPaymentPDFMail($invoice));
 //         // dd('Email sent');
   //    }

   //    // set a flash message to be displayed on screen
   //    $notification = [
   //       'message' => 'The activity item was updated successfully!',
   //       'alert-type' => 'success'
   //    ];

   //    // redirect to another page
   //    return redirect()->route('admin.invoicer.invoices.edit', $activity->invoice_id)->with($notification);
   // }


##################################################################################################################
# INVOICE UPDATE
##################################################################################################################
//    public function invUpdate($invID, $activity = null)
//    {
//       // dd($invID);
//       // Check if user has required permission
//       abort_unless(Gate::allows('invoicer-invoice'), 403);

//       // update invoice with totals
//       $invoice = InvoicerInvoice::find($invID);
//           // Perform required calculations
//          $inv_amount_charged = DB::table('invoicer__invoice_items')->where('invoice_id', '=', $invoice->id)->sum('total');
//          $inv_hst = $inv_amount_charged * Config::get('invoicer.hstRate');
         
//          $inv_depositsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','depositAdd')->sum('amount');
//          $inv_depositsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','depositRemove')->sum('amount');
         
//          $inv_discountsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','discountAdd')->sum('amount');
//          $inv_discountsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','discountRemove')->sum('amount');

//          $inv_paymentsAdd = InvoicerActivity::where('invoice_id',$invID)->where('activity','paymentAdd')->sum('amount');
//          $inv_paymentsRemove = InvoicerActivity::where('invoice_id',$invID)->where('activity','paymentRemove')->sum('amount');

//          $inv_sub_total = $inv_amount_charged + $inv_hst;

//          $inv_wsib = $inv_amount_charged * Config::get('invoicer.wsibRate');
//          $inv_income_taxes = $inv_amount_charged * Config::get('invoicer.incomeTaxRate');
//          $inv_total_deductions = $inv_wsib + $inv_income_taxes;

//          $inv_total = $inv_sub_total - $inv_total_deductions - $inv_depositsAdd + $inv_depositsRemove - $inv_discountsAdd + $inv_discountsRemove - $inv_paymentsAdd + $inv_paymentsRemove;
         
// // dd(
// //    "Amount Charged : " . $inv_amount_charged . " == " .
// //    "HST : " . $inv_hst . " == " .
// //    "Deposits Plus :" . $inv_depositsAdd . " == " .
// //    "Deposits Minus : " . $inv_depositsRemove . " == " .
// //    "Discounts Plus : " . $inv_discountsAdd . " == " .
// //    "Discounts Minus : " . $inv_discountsRemove . " == " .
// //    "Payments Plus : " . $inv_paymentsAdd . " == " .
// //    "Payments Minus : " . $inv_paymentsRemove . " == " .
// //    "Sub Total : " . $inv_sub_total . " == " .
// //    "WSIB : " . $inv_wsib . " == " .
// //    "Income Tax : " . $inv_income_taxes . " == " .
// //    "Total Deductions : " . $inv_total_deductions . " == " .
// //    "Total : " . $inv_total
// // );


//          // Set the values to be updated
//          $invoice->amount_charged = $inv_amount_charged;
//          $invoice->hst = $inv_hst;
//          $invoice->sub_total = $inv_sub_total;

//          $invoice->deposits = $inv_depositsAdd - $inv_depositsRemove;
//          $invoice->discounts = $inv_discountsAdd - $inv_discountsRemove;
//          $invoice->payments = $inv_paymentsAdd - $inv_paymentsRemove;

//          $invoice->wsib = $inv_wsib;
//          $invoice->income_taxes = $inv_income_taxes;
//          $invoice->total_deductions = $inv_total_deductions;

//          $invoice->total = $inv_total;
         
//       $invoice->save();

//       return $invoice;
//    }


}
