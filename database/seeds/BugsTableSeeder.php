<?php

namespace Database\Seeders;

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
                'id' => 54,
                'title' => 'Test bug',
                'page_url' => 'test url',
                'description' => '<p>Test description</p>',
                'resolution' => NULL,
                'status' => 1,
                'user_id' => 2,
                'created_at' => '2021-01-23 09:42:41',
                'updated_at' => '2021-02-17 11:39:29',
                'deleted_at' => '2021-02-17 11:39:29',
            ),
            1 => 
            array (
                'id' => 55,
                'title' => 'Newly reported bug',
                'page_url' => 'this and that qwerty',
                'description' => '<p>Description of newly reported bug</p>',
                'resolution' => '<p>sdsadsadsadsa</p>',
                'status' => 2,
                'user_id' => 2,
                'created_at' => '2021-01-26 11:49:38',
                'updated_at' => '2021-06-09 09:59:48',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 56,
                'title' => 'New title for Test bug',
                'page_url' => NULL,
                'description' => '<p>Test bug</p>',
                'resolution' => NULL,
                'status' => 2,
                'user_id' => 3,
                'created_at' => '2021-01-31 07:17:49',
                'updated_at' => '2021-02-14 08:16:40',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 57,
                'title' => 'Test bug 123 456',
                'page_url' => 'Page URL test not valid',
                'description' => '<p>Description of bug goes here.</p>
<p>More data can be added here</p>',
                'resolution' => NULL,
                'status' => 4,
                'user_id' => 2,
                'created_at' => '2021-02-02 12:29:44',
                'updated_at' => '2021-06-09 09:59:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 59,
                'title' => 'My new bug report',
                'page_url' => 'asasasasa',
                'description' => '<p>sasa as as a&nbsp;</p>',
                'resolution' => NULL,
                'status' => 1,
                'user_id' => 2,
                'created_at' => '2021-02-13 23:06:52',
                'updated_at' => '2021-02-13 23:06:52',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 60,
                'title' => 'ssdsadsa',
                'page_url' => NULL,
                'description' => '<p>sadsadsadsad</p>',
                'resolution' => NULL,
                'status' => 1,
                'user_id' => 2,
                'created_at' => '2021-02-14 09:35:30',
                'updated_at' => '2021-02-17 10:10:17',
                'deleted_at' => '2021-02-17 10:10:17',
            ),
            6 => 
            array (
                'id' => 61,
                'title' => 'sadsadsad',
                'page_url' => NULL,
                'description' => '<p>dasdsadsadsadsad</p>',
                'resolution' => '<p>sdsa sad asd sdsad sad sad d</p>',
                'status' => 10,
                'user_id' => 2,
                'created_at' => '2021-02-17 11:43:34',
                'updated_at' => '2021-02-17 11:43:49',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 63,
                'title' => 'sadadadsa',
                'page_url' => NULL,
                'description' => '<p>sdsadsadsadsad</p>',
                'resolution' => NULL,
                'status' => 1,
                'user_id' => 3,
                'created_at' => '2021-06-16 10:13:56',
                'updated_at' => '2021-06-16 10:13:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}