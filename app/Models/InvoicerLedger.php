<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoicerLedger extends Model {

   public function totalAmountCharged()
   {
      // $totalAmountCharged = DB::table('invoicer__invoices')->sum('amount_charged');
   }

}
