<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'created_at' => '2020-05-25 19:39:22',
                'id' => 1,
                'permission_id' => 1,
                'role_id' => 1,
                'updated_at' => '2020-05-25 19:39:22',
            ),
            1 => 
            array (
                'created_at' => '2020-05-25 19:49:28',
                'id' => 2,
                'permission_id' => 2,
                'role_id' => 1,
                'updated_at' => '2020-05-25 19:49:28',
            ),
            2 => 
            array (
                'created_at' => '2020-05-25 19:49:20',
                'id' => 3,
                'permission_id' => 3,
                'role_id' => 1,
                'updated_at' => '2020-05-25 19:49:20',
            ),
            3 => 
            array (
                'created_at' => '2020-05-25 20:54:41',
                'id' => 4,
                'permission_id' => 4,
                'role_id' => 1,
                'updated_at' => '2020-05-25 20:54:41',
            ),
            4 => 
            array (
                'created_at' => '2020-06-04 01:37:33',
                'id' => 10,
                'permission_id' => 9,
                'role_id' => 1,
                'updated_at' => '2020-06-04 01:37:33',
            ),
            5 => 
            array (
                'created_at' => '2020-06-04 01:37:40',
                'id' => 11,
                'permission_id' => 10,
                'role_id' => 1,
                'updated_at' => '2020-06-04 01:37:40',
            ),
            6 => 
            array (
                'created_at' => '2020-06-04 01:37:46',
                'id' => 12,
                'permission_id' => 11,
                'role_id' => 1,
                'updated_at' => '2020-06-04 01:37:46',
            ),
            7 => 
            array (
                'created_at' => '2020-06-04 01:37:52',
                'id' => 13,
                'permission_id' => 12,
                'role_id' => 1,
                'updated_at' => '2020-06-04 01:37:52',
            ),
            8 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 49,
                'permission_id' => 51,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            9 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 51,
                'permission_id' => 53,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            10 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 81,
                'permission_id' => 8,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            11 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 83,
                'permission_id' => 5,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            12 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 86,
                'permission_id' => 6,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            13 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 88,
                'permission_id' => 7,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            14 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 89,
                'permission_id' => 50,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            15 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 90,
                'permission_id' => 52,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            16 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 93,
                'permission_id' => 95,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            17 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 94,
                'permission_id' => 55,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            18 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 95,
                'permission_id' => 97,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            19 => 
            array (
                'created_at' => NULL,
                'id' => 96,
                'permission_id' => 99,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'id' => 97,
                'permission_id' => 100,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'id' => 98,
                'permission_id' => 104,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'id' => 99,
                'permission_id' => 105,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'id' => 100,
                'permission_id' => 106,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'id' => 101,
                'permission_id' => 98,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'id' => 102,
                'permission_id' => 101,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'id' => 103,
                'permission_id' => 102,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'id' => 104,
                'permission_id' => 103,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}