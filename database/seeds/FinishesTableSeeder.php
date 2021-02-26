<?php

// namespace Database\Seeders;

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
                'color_code' => NULL,
                'color_name' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 1,
                'manufacturer' => NULL,
                'name' => 'Polyurethane',
                'notes' => NULL,
                'sheen' => '1',
                'type' => NULL,
                'upc' => NULL,
                'updated_at' => '2019-09-15 13:34:15',
            ),
            1 => 
            array (
                'color_code' => '',
                'color_name' => '',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 2,
                'manufacturer' => '',
                'name' => 'Varnish',
                'notes' => '',
                'sheen' => '3',
                'type' => '',
                'upc' => '',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'color_code' => '',
                'color_name' => '',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'manufacturer' => '',
                'name' => 'Shellac',
                'notes' => '',
                'sheen' => '4',
                'type' => '',
                'upc' => '',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'color_code' => NULL,
                'color_name' => 'Dark Brown',
                'created_at' => '2020-03-13 01:41:10',
                'deleted_at' => NULL,
                'id' => 4,
                'manufacturer' => NULL,
                'name' => 'Dark Brown Stain',
                'notes' => NULL,
                'sheen' => '0',
                'type' => 'Stain',
                'upc' => NULL,
                'updated_at' => '2020-03-13 01:41:10',
            ),
            4 => 
            array (
                'color_code' => NULL,
                'color_name' => NULL,
                'created_at' => '2020-12-13 21:18:28',
                'deleted_at' => NULL,
                'id' => 6,
                'manufacturer' => NULL,
                'name' => 'Teak Oil',
                'notes' => NULL,
                'sheen' => '2',
                'type' => 'Oil',
                'upc' => NULL,
                'updated_at' => '2020-12-13 21:18:28',
            ),
            5 => 
            array (
                'color_code' => NULL,
                'color_name' => NULL,
                'created_at' => '2020-12-13 21:18:41',
                'deleted_at' => NULL,
                'id' => 7,
                'manufacturer' => NULL,
                'name' => 'Tung Oil',
                'notes' => NULL,
                'sheen' => '2',
                'type' => 'Oil',
                'upc' => NULL,
                'updated_at' => '2020-12-13 21:18:41',
            ),
            6 => 
            array (
                'color_code' => NULL,
                'color_name' => NULL,
                'created_at' => '2020-12-22 22:37:44',
                'deleted_at' => '2021-01-19 14:15:52',
                'id' => 14,
                'manufacturer' => NULL,
                'name' => 'test',
                'notes' => NULL,
                'sheen' => '0',
                'type' => NULL,
                'upc' => NULL,
                'updated_at' => '2021-01-19 14:15:52',
            ),
            7 => 
            array (
                'color_code' => 'ghgfhfg',
                'color_name' => 'weqwewqe',
                'created_at' => '2021-01-25 08:25:38',
                'deleted_at' => NULL,
                'id' => 15,
                'manufacturer' => 'zxcxzczxc',
                'name' => 'real finish',
                'notes' => NULL,
                'sheen' => '3',
                'type' => 'ytrytrytr',
                'upc' => NULL,
                'updated_at' => '2021-01-25 08:40:27',
            ),
        ));
        
        
    }
}