<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoicerInvoiceItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invoicer__invoice_items')->delete();
        
        
        
    }
}