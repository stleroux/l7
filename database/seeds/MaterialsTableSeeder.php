<?php

namespace Database\Seeders;

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
                'id' => 1,
                'name' => 'Ash',
                'type' => NULL,
                'notes' => NULL,
                'manufacturer' => 'Nature',
                'UPC' => NULL,
                'created_at' => '2019-06-30 09:16:22',
                'updated_at' => '2021-02-03 06:02:46',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Oak',
                'type' => 'Hardwood',
                'notes' => 'Best ever',
                'manufacturer' => NULL,
                'UPC' => NULL,
                'created_at' => '2021-02-11 16:35:06',
                'updated_at' => '2020-12-31 08:57:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Maple',
                'type' => 'Hardwood',
                'notes' => 'Very nice to work with',
                'manufacturer' => NULL,
                'UPC' => NULL,
                'created_at' => '2021-02-11 16:35:06',
                'updated_at' => '2020-12-31 08:58:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Curly Maple',
                'type' => 'Hardwood',
                'notes' => 'No notes for this product again',
                'manufacturer' => 'ABC Company',
                'UPC' => '123123123123',
                'created_at' => '2019-07-07 01:00:05',
                'updated_at' => '2019-07-07 01:16:33',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Zebra Wood',
                'type' => NULL,
                'notes' => NULL,
                'manufacturer' => 'NA',
                'UPC' => NULL,
                'created_at' => '2019-07-12 01:04:29',
                'updated_at' => '2021-01-19 14:16:15',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'fdsfdsfdsf',
                'type' => 'dsdsadsada',
                'notes' => NULL,
                'manufacturer' => NULL,
                'UPC' => NULL,
                'created_at' => '2021-02-18 06:39:57',
                'updated_at' => '2021-02-18 06:40:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}