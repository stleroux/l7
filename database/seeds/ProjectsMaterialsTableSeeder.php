<?php

use Illuminate\Database\Seeder;

class ProjectsMaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects__materials')->delete();
        
        \DB::table('projects__materials')->insert(array (
            0 => 
            array (
                'created_at' => '2019-06-30 09:16:22',
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
                'id' => 2,
                'manufacturer' => '',
                'name' => 'Oak',
                'notes' => '',
                'type' => '',
                'UPC' => '',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 3,
                'manufacturer' => '',
                'name' => 'Maple',
                'notes' => '',
                'type' => '',
                'UPC' => '',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => '2019-07-07 01:00:05',
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
                'id' => 6,
                'manufacturer' => 'NA',
                'name' => 'Zebra Wood',
                'notes' => 'I don\'t give a crap',
                'type' => 'Fucked up wood',
                'UPC' => 'NA',
                'updated_at' => '2019-07-12 01:04:29',
            ),
            5 => 
            array (
                'created_at' => '2019-10-08 23:32:07',
                'id' => 7,
                'manufacturer' => 'wwww',
                'name' => '_test',
                'notes' => ';ldkf d;lkfd;lkf d;lskf;dslkfd;l fkl;dsfk d;slkf',
                'type' => 'qqqq',
                'UPC' => 'eeee',
                'updated_at' => '2019-10-08 23:32:07',
            ),
        ));
        
        
    }
}