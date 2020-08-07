<?php

use Illuminate\Database\Seeder;

class ProjectsFinishesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects__finishes')->delete();
        
        \DB::table('projects__finishes')->insert(array (
            0 => 
            array (
                'color_code' => NULL,
                'color_name' => NULL,
                'created_at' => NULL,
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
                'id' => 4,
                'manufacturer' => NULL,
                'name' => 'Dark Brown Stain',
                'notes' => NULL,
                'sheen' => '0',
                'type' => 'Stain',
                'upc' => NULL,
                'updated_at' => '2020-03-13 01:41:10',
            ),
        ));
        
        
    }
}