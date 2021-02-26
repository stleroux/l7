<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bugs')->delete();
        
        \DB::table('bugs')->insert(array (
            0 => 
            array (
                'created_at' => '2021-01-23 09:42:41',
                'deleted_at' => '2021-01-28 20:36:16',
                'description' => '<p>Test description</p>',
                'id' => 54,
                'page_url' => 'test url',
                'resolution' => NULL,
                'status' => 1,
                'title' => 'Test bug',
                'updated_at' => '2021-01-28 20:36:16',
                'user_id' => 2,
            ),
            1 => 
            array (
                'created_at' => '2021-01-26 11:49:38',
                'deleted_at' => '2021-01-28 20:36:16',
                'description' => '<p>Description of newly reported bug</p>',
                'id' => 55,
                'page_url' => 'this and that',
                'resolution' => NULL,
                'status' => 1,
                'title' => 'Newly reported bug',
                'updated_at' => '2021-01-28 20:36:16',
                'user_id' => 2,
            ),
        ));
        
        
    }
}