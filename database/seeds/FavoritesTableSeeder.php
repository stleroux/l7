<?php

// namespace Database\Seeders;

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
                'created_at' => '2019-10-25 21:43:47',
                'favoriteable_id' => 7,
                'favoriteable_type' => 'App\\Models\\Articles\\Article',
                'updated_at' => '2019-10-25 21:43:47',
                'user_id' => 2,
            ),
            1 => 
            array (
                'created_at' => '2019-11-15 08:58:42',
                'favoriteable_id' => 27,
                'favoriteable_type' => 'App\\Models\\Recipes\\Recipe',
                'updated_at' => '2019-11-15 08:58:42',
                'user_id' => 2,
            ),
        ));
        
        
    }
}