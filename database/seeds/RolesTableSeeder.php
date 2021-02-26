<?php

// // namespace Database\Seeders;

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
                'created_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2020-09-22 09:41:06',
            ),
            1 => 
            array (
                'created_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 2,
                'name' => 'author',
                'updated_at' => '2021-01-25 21:55:28',
            ),
            2 => 
            array (
                'created_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 3,
                'name' => 'user',
                'updated_at' => '2021-01-25 21:55:28',
            ),
            3 => 
            array (
                'created_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 4,
                'name' => 'registered',
                'updated_at' => '2020-10-19 08:12:07',
            ),
            4 => 
            array (
                'created_at' => '2020-09-28 14:34:38',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 5,
                'name' => 'hayness',
                'updated_at' => '2020-10-09 23:40:34',
            ),
        ));
        
        
    }
}