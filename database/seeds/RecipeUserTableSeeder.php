<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipeUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_user')->delete();
        
        \DB::table('recipe_user')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'recipe_id' => 1,
                'updated_at' => NULL,
                'user_id' => 2,
            ),
        ));
        
        
    }
}