<?php

namespace App\Http\Controllers\UI;

use App\Models\Carving;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use App\Models\User;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Invoicer\InvoiceCreatedNotification;
use carbon\Carbon;

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
      $this->middleware('auth', ['only' => 'createQuote']);
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
         'message' => 'Item added to cart successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->route('carvings.index')->with($notification);
   }

   public function update(Request $request, $rowId)
   {
      Cart::update($rowId, $request->quantity);

      $notification = [
         'message' => 'Cart item updated successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }

   // Remove item from cart
   public function remove($rowId)
   {
      Cart::remove($rowId);

      $notification = [
         'message' => 'Cart item removed successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }

   // Delete / Clear the whole cart
   public function destroy()
   {
      Cart::destroy();

      $notification = [
         'message' => 'The cart was emptied successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }



   public function createQuote()
   {
      // if(Auth::check())
      // {
      //    // Store cart to DB with logged in user's username
      //    // Cart::store(Auth::user()->username);

      // }

      // return Cart::content();
      // get the logged in user id

      // create a new invoice
      $invoice = new InvoicerInvoice;
         $invoice->client_id = Auth::user()->id;
         $invoice->notes = "Submitted using shopping cart.";
         $invoice->status = "quote";
         $invoice->logged_at = Carbon::now();
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

      // return view('UI.cart.thankyou')->with($notification)
      return redirect()->back()->with($notification);
   }


}
