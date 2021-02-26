<?php

// namespace Database\Seeders;

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
                'category' => '1',
                'created_at' => '2020-12-24 11:40:57',
                'deleted_at' => NULL,
                'id' => 11,
                'name' => 'X-Mas',
                'updated_at' => '2020-12-24 11:40:57',
            ),
            1 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-24 11:41:06',
                'deleted_at' => '2020-12-25 07:23:41',
                'id' => 12,
                'name' => 'Trays',
                'updated_at' => '2020-12-25 07:23:41',
            ),
            2 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-24 11:41:12',
                'deleted_at' => '2020-12-25 07:23:41',
                'id' => 13,
                'name' => 'Signs',
                'updated_at' => '2020-12-25 07:23:41',
            ),
            3 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-25 07:14:40',
                'deleted_at' => NULL,
                'id' => 17,
                'name' => 'Halloween',
                'updated_at' => '2020-12-25 07:14:40',
            ),
            4 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-25 07:14:49',
                'deleted_at' => NULL,
                'id' => 18,
                'name' => 'Easter',
                'updated_at' => '2020-12-25 07:14:49',
            ),
            5 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-25 07:15:57',
                'deleted_at' => NULL,
                'id' => 19,
                'name' => 'Heart',
                'updated_at' => '2020-12-25 07:15:57',
            ),
            6 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-25 07:23:57',
                'deleted_at' => NULL,
                'id' => 20,
                'name' => 'Puppy',
                'updated_at' => '2020-12-25 07:23:57',
            ),
            7 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-25 07:24:06',
                'deleted_at' => NULL,
                'id' => 21,
                'name' => 'Snowman',
                'updated_at' => '2020-12-25 07:24:06',
            ),
            8 => 
            array (
                'category' => '1',
                'created_at' => '2020-12-30 14:11:51',
                'deleted_at' => '2021-01-26 06:52:57',
                'id' => 22,
                'name' => 'Testing',
                'updated_at' => '2021-01-26 06:52:57',
            ),
            9 => 
            array (
                'category' => '3',
                'created_at' => '2020-12-30 22:59:34',
                'deleted_at' => '2021-01-26 06:52:45',
                'id' => 23,
                'name' => 'Test',
                'updated_at' => '2021-01-26 06:52:45',
            ),
            10 => 
            array (
                'category' => '2',
                'created_at' => '2021-01-21 12:19:07',
                'deleted_at' => '2021-01-26 06:52:45',
                'id' => 24,
                'name' => 'Test',
                'updated_at' => '2021-01-26 06:52:45',
            ),
            11 => 
            array (
                'category' => '1',
                'created_at' => '2021-01-26 06:59:56',
                'deleted_at' => NULL,
                'id' => 25,
                'name' => 'qwerty',
                'updated_at' => '2021-01-26 06:59:56',
            ),
        ));
        
        
    }
}