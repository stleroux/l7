<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MylinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mylinks')->delete();
        
        \DB::table('mylinks')->insert(array (
            0 => 
            array (
                'id' => 7,
                'user_id' => 2,
                'name' => 'New invoice',
                'page_url' => '/admin/invoicer/invoices/create',
                'created_at' => '2021-05-26 10:43:31',
                'updated_at' => '2021-05-26 10:43:31',
            ),
            1 => 
            array (
                'id' => 8,
                'user_id' => 3,
                'name' => 'New invoice',
                'page_url' => '/admin/invoicer/invoices/create',
                'created_at' => '2021-05-26 10:43:31',
                'updated_at' => '2021-05-26 10:43:31',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 3,
                'name' => 'dashboard 123',
                'page_url' => '/admin/dashboard',
                'created_at' => '2021-05-24 12:07:15',
                'updated_at' => '2021-05-26 09:09:06',
            ),
        ));
        
        
    }
}