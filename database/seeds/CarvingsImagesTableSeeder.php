<?php

// namespace Database\Seeders;

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
                'carving_id' => 51,
                'created_at' => '2020-12-31 08:51:55',
                'deleted_at' => NULL,
                'description' => 'dfdfdfd',
                'display_name' => 'dfdfd',
                'id' => 69,
                'main_image' => 0,
                'mine_type' => NULL,
                'name' => '1609422714.jpeg',
                'path' => NULL,
                'size' => NULL,
                'updated_at' => '2020-12-31 08:51:55',
            ),
        ));
        
        
    }
}