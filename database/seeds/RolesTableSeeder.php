<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'description' => NULL,
                'created_at' => '2020-09-22 09:41:06',
                'updated_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'author',
                'description' => NULL,
                'created_at' => '2020-09-22 09:41:06',
                'updated_at' => '2021-01-25 21:55:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'description' => NULL,
                'created_at' => '2020-09-22 09:41:06',
                'updated_at' => '2021-01-25 21:55:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'registered',
                'description' => NULL,
                'created_at' => '2020-09-22 09:41:06',
                'updated_at' => '2020-10-19 08:12:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'hayness',
                'description' => NULL,
                'created_at' => '2020-09-28 14:34:38',
                'updated_at' => '2020-10-09 23:40:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}