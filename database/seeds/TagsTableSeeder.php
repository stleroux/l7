<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'X-Mas',
                'category' => '1',
                'created_at' => '2020-12-24 11:40:57',
                'updated_at' => '2020-12-24 11:40:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 17,
                'name' => 'Outdoor',
                'category' => '3',
                'created_at' => '2020-12-25 07:14:40',
                'updated_at' => '2021-05-28 09:51:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 18,
                'name' => 'Easter',
                'category' => '1',
                'created_at' => '2020-12-25 07:14:49',
                'updated_at' => '2020-12-25 07:14:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 19,
                'name' => 'Heart',
                'category' => '1',
                'created_at' => '2020-12-25 07:15:57',
                'updated_at' => '2020-12-25 07:15:57',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Puppy',
                'category' => '1',
                'created_at' => '2020-12-25 07:23:57',
                'updated_at' => '2020-12-25 07:23:57',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Snowman',
                'category' => '1',
                'created_at' => '2020-12-25 07:24:06',
                'updated_at' => '2020-12-25 07:24:06',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}