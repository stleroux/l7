<?php

namespace Database\Seeders;

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
                'id' => 95,
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => '2020-06-07 01:59:54',
                'updated_at' => '2020-06-07 01:59:54',
            ),
            1 => 
            array (
                'id' => 116,
                'role_id' => 1,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 120,
                'role_id' => 5,
                'user_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}