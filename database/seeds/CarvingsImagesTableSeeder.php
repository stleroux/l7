<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarvingsImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carvings_images')->delete();
        
        \DB::table('carvings_images')->insert(array (
            0 => 
            array (
                'id' => 69,
                'carving_id' => 51,
                'name' => '1609422714.jpeg',
                'display_name' => 'dfdfd',
                'description' => 'dfdfdfd',
                'mine_type' => NULL,
                'size' => NULL,
                'path' => NULL,
                'main_image' => 0,
                'created_at' => '2020-12-31 08:51:55',
                'updated_at' => '2020-12-31 08:51:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 70,
                'carving_id' => 55,
                'name' => '1613580719.jpg',
                'display_name' => 'ddsdsa sad sd',
                'description' => 'd sd sdsad sd',
                'mine_type' => NULL,
                'size' => NULL,
                'path' => NULL,
                'main_image' => 0,
                'created_at' => '2021-02-17 11:52:00',
                'updated_at' => '2021-02-17 11:53:05',
                'deleted_at' => '2021-02-17 11:53:05',
            ),
        ));
        
        
    }
}