<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('favorites')->delete();
        
        \DB::table('favorites')->insert(array (
            0 => 
            array (
                'user_id' => 2,
                'favoriteable_type' => 'App\\Models\\Articles\\Article',
                'favoriteable_id' => 7,
                'created_at' => '2019-10-25 21:43:47',
                'updated_at' => '2019-10-25 21:43:47',
            ),
            1 => 
            array (
                'user_id' => 2,
                'favoriteable_type' => 'App\\Models\\Recipes\\Recipe',
                'favoriteable_id' => 27,
                'created_at' => '2019-11-15 08:58:42',
                'updated_at' => '2019-11-15 08:58:42',
            ),
            2 => 
            array (
                'user_id' => 2,
                'favoriteable_type' => 'App\\Models\\Recipe',
                'favoriteable_id' => 34,
                'created_at' => '2021-06-11 10:31:36',
                'updated_at' => '2021-06-11 10:31:36',
            ),
        ));
        
        
    }
}