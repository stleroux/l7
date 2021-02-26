<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('materials')->delete();
        
        \DB::table('materials')->insert(array (
            0 => 
            array (
                'created_at' => '2019-06-30 09:16:22',
                'deleted_at' => NULL,
                'id' => 1,
                'manufacturer' => '',
                'name' => 'Ash',
                'notes' => '',
                'type' => '',
                'UPC' => '',
                'updated_at' => '2019-06-30 09:16:22',
            ),
            1 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 2,
                'manufacturer' => NULL,
                'name' => 'Oak',
                'notes' => 'Best ever',
                'type' => 'Hardwood',
                'UPC' => NULL,
                'updated_at' => '2020-12-31 08:57:56',
            ),
            2 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'manufacturer' => NULL,
                'name' => 'Maple',
                'notes' => 'Very nice to work with',
                'type' => 'Hardwood',
                'UPC' => NULL,
                'updated_at' => '2020-12-31 08:58:57',
            ),
            3 => 
            array (
                'created_at' => '2019-07-07 01:00:05',
                'deleted_at' => NULL,
                'id' => 5,
                'manufacturer' => 'ABC Company',
                'name' => 'Curly Maple',
                'notes' => 'No notes for this product again',
                'type' => 'Hardwood',
                'UPC' => '123123123123',
                'updated_at' => '2019-07-07 01:16:33',
            ),
            4 => 
            array (
                'created_at' => '2019-07-12 01:04:29',
                'deleted_at' => NULL,
                'id' => 6,
                'manufacturer' => 'NA',
                'name' => 'Zebra Wood',
                'notes' => NULL,
                'type' => NULL,
                'UPC' => NULL,
                'updated_at' => '2021-01-19 14:16:15',
            ),
        ));
        
        
    }
}