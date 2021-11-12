<?php

namespace App\Http\Controllers\UI;

use carbon\Carbon;
use App\Models\User;
use App\Models\Role;
use App\Models\Carving;
use Illuminate\Http\Request;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Notifications\Admin\NewUserNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Invoicer\InvoiceCreatedNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
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
      // $this->middleware('auth', ['only' => 'createQuote']);
      // $this->middleware('auth');
   }

   public function index()
   {
      // return Cart::content();
      return view('UI.cart', compact(Cart::content()));
   }

   public function store(Request $request, Carving $carving)
   {
      // dd($carving);
      // id, name, quantity, price and weight
      // Cart::add($carving->id, $carving->name, $request->quantity, $carving->price, 0);
      // Cart::add($carving, $request->quantity, 0)->associate('Carving');
      Cart::add($carving, $request->quantity, 0);

      $notification = [
         'message' => 'Item added to quote request successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->route('carvings.index')->with($notification);
   }

   public function update(Request $request, $rowId)
   {
      Cart::update($rowId, $request->quantity);

      $notification = [
         'message' => 'Quote request item updated successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }

   // Remove item from cart
   public function remove($rowId)
   {
      Cart::remove($rowId);

      $notification = [
         'message' => 'Quote request item removed successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }

   // Delete / Clear the whole cart
   public function destroy()
   {
      Cart::destroy();

      $notification = [
         'message' => 'The quote request was emptied successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


// User is not logged in or does not have an account
// Get the needed info from user
// public function getRequestQuote()
// {
//    return view();
// }

public function requestQuote(CartRequest $request)
{
   // Create the user's account
   $user = User::create([
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'email' => $request->email,
      'telephone' => $request->phone,
      'company_name' => $request->company_name,
      'address_1' => $request->address_1,
      'city' => $request->city,
      'province' => $request->province,
      'postal_code' => $request->postal_code,
      'password' => Hash::make($request->password),
      'reasonToRegister' => 'Cart Request',
      'account_status' => '1'
   ]);

   $role = Role::select('id')->where('name','registered')->first();

   $user->roles()->attach($role);

// dd($user);

   // getlist of administrators on the site
   $administrators = User::whereHas('roles', function($q) {
      $q->where('name', 'admin');
   })->get();
   // dd($administrators);

   //
   foreach ($administrators as $adminitrator){
      $adminitrator->notify(new NewUserNotification($user));
   }

   // create a new invoice
   $invoice = new InvoicerInvoice;
      $invoice->client_id = $user->id;
      $invoice->notes = "Submitted using shopping cart.";
      $invoice->notes = $invoice->notes . '<br />' . $request->comment;
      $invoice->status = "quote";
      $invoice->quoted_at = Carbon::now();
   $invoice->save();

   // add the billable items from the cart to the invoice
   foreach(Cart::content() as $row)
   {
      $item = new InvoicerInvoiceItem;
         $item->invoice_id = $invoice->id;
         $item->product = $row->name;
         $item->quantity = $row->qty;
         $item->price = $row->price;
         $item->total = $row->qty * $row->price;
      // dd($item);
      $item->save();
   }
         // $item->notes = $request->notes;
         // $item->work_date = $request->work_date;
         // $item->hst = $request->quantity * $request->price * 0.07;
         // $item->total = ($request->quantity * $request->price) + ($request->quantity * $request->price * 0.07);
         // $item->total = ($request->quantity * $request->price);


   // notify site admins (notification and/or email)
   $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
   Notification::send($users, new InvoiceCreatedNotification($invoice));

   // email user
   // clear the cart
   Cart::destroy();

   $notification = [
      'message' => 'Your quote request has been received. Someone will contact you shortly.', 
      'alert-type' => 'success'
   ];

   return view('UI.cart.thankyou')->with($notification);
   // return redirect()->back()->with($notification);
}


// User is logged in already
   public function createQuote()
   {
      // create a new invoice
      $invoice = new InvoicerInvoice;
         $invoice->client_id = Auth::user()->id;
         $invoice->notes = "Submitted using shopping cart.";
         $invoice->status = "quote";
         $invoice->quoted_at = Carbon::now();
      // dd($invoice);
      $invoice->save();

      // add the billable items from the cart to the invoice
      foreach(Cart::content() as $row)
      {
         $item = new InvoicerInvoiceItem;
            $item->invoice_id = $invoice->id;
            $item->product = $row->name;
            $item->quantity = $row->qty;
            $item->price = $row->price;
            $item->total = $row->qty * $row->price;
         // dd($item);
         $item->save();
      }
            // $item->notes = $request->notes;
            // $item->work_date = $request->work_date;
            // $item->hst = $request->quantity * $request->price * 0.07;
            // $item->total = ($request->quantity * $request->price) + ($request->quantity * $request->price * 0.07);
            // $item->total = ($request->quantity * $request->price);


      // notify site admins (notification and/or email)
      $users = User::whereIn('id', explode(',', Config::get('invoicer.usersToNotify')))->get();
      Notification::send($users, new InvoiceCreatedNotification($invoice));

      // email user
      // clear the cart
      Cart::destroy();

      $notification = [
         'message' => 'Your quote request has been received. Someone will contact you shortly.', 
         'alert-type' => 'success'
      ];

      return view('UI.cart.thankyou')->with($notification);
      // return redirect()->back()->with($notification);
   }


}
