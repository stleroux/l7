<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinishesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('finishes')->delete();
        
        \DB::table('finishes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Polyurethane',
                'type' => NULL,
                'color_name' => NULL,
                'color_code' => NULL,
                'sheen' => '1',
                'manufacturer' => NULL,
                'upc' => NULL,
                'notes' => NULL,
                'created_at' => '2021-02-11 16:31:18',
                'updated_at' => '2019-09-15 13:34:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Varnish',
                'type' => '',
                'color_name' => '',
                'color_code' => '',
                'sheen' => '3',
                'manufacturer' => '',
                'upc' => '',
                'notes' => '',
                'created_at' => '2021-02-11 16:31:18',
                'updated_at' => '2021-02-11 16:31:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Shellac',
                'type' => '',
                'color_name' => '',
                'color_code' => '',
                'sheen' => '4',
                'manufacturer' => '',
                'upc' => '',
                'notes' => '',
                'created_at' => '2021-02-11 16:31:18',
                'updated_at' => '2021-02-11 16:31:29',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dark Brown Stain',
                'type' => 'Stain',
                'color_name' => 'Dark Brown',
                'color_code' => NULL,
                'sheen' => '0',
                'manufacturer' => NULL,
                'upc' => NULL,
                'notes' => NULL,
                'created_at' => '2020-03-13 01:41:10',
                'updated_at' => '2020-03-13 01:41:10',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Teak Oil',
                'type' => 'Oil',
                'color_name' => NULL,
                'color_code' => NULL,
                'sheen' => '2',
                'manufacturer' => NULL,
                'upc' => NULL,
                'notes' => NULL,
                'created_at' => '2020-12-13 21:18:28',
                'updated_at' => '2020-12-13 21:18:28',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Tung Oil',
                'type' => 'Oil',
                'color_name' => NULL,
                'color_code' => NULL,
                'sheen' => '2',
                'manufacturer' => NULL,
                'upc' => NULL,
                'notes' => NULL,
                'created_at' => '2020-12-13 21:18:41',
                'updated_at' => '2020-12-13 21:18:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}