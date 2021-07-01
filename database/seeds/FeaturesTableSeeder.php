<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'sadsdadsadsad 123 456',
                'description' => '<p>sdsadsad sad sd sdad</p>',
                'resolution' => NULL,
                'status' => 3,
                'user_id' => 2,
                'created_at' => '2021-01-31 08:24:46',
                'updated_at' => '2021-06-09 09:59:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'title' => 'New feature requested',
                'description' => '<p>lkajs lksajd ljd ljlkasj dskljd a</p>',
                'resolution' => NULL,
                'status' => 5,
                'user_id' => 3,
                'created_at' => '2021-06-09 09:41:48',
                'updated_at' => '2021-06-09 09:59:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'title' => 'blah blah blah',
                'description' => '<p>blah blah blah</p>',
                'resolution' => NULL,
                'status' => 1,
                'user_id' => 3,
                'created_at' => '2021-06-16 10:30:18',
                'updated_at' => '2021-06-16 10:30:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}