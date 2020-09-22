<?php

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
                'updated_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'description' => NULL,
                'created_at' => '2020-09-22 09:41:06',
                'updated_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'registered',
                'description' => NULL,
                'created_at' => '2020-09-22 09:41:06',
                'updated_at' => '2020-09-22 09:41:06',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}