<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoicerProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invoicer__products')->delete();
        
        \DB::table('invoicer__products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'H/W',
                'details' => 'Hardware for 2',
                'created_at' => '2018-10-30 16:40:56',
                'updated_at' => '2021-02-03 06:01:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'Labour',
                'details' => 'Hourly labour rate',
                'created_at' => '2018-10-30 16:41:39',
                'updated_at' => '2018-10-30 16:41:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'Trim',
                'details' => 'Trim',
                'created_at' => '2018-10-30 16:41:52',
                'updated_at' => '2018-10-30 16:41:52',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'cnc-fc-1-3',
                'details' => 'CNC Flat clamps - 1 x 3 inches',
                'created_at' => '2021-05-19 14:18:10',
                'updated_at' => '2021-05-19 14:18:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}