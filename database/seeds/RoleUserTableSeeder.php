<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'created_at' => '2020-06-07 01:59:54',
                'id' => 95,
                'role_id' => 1,
                'updated_at' => '2020-06-07 01:59:54',
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 107,
                'role_id' => 2,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 108,
                'role_id' => 3,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 109,
                'role_id' => 4,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 116,
                'role_id' => 1,
                'updated_at' => NULL,
                'user_id' => 2,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 120,
                'role_id' => 5,
                'updated_at' => NULL,
                'user_id' => 3,
            ),
        ));
        
        
    }
}