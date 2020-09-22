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
                'id' => 1,
                'permission_id' => 1,
                'role_id' => 1,
                'created_at' => '2020-05-25 19:39:22',
                'updated_at' => '2020-05-25 19:39:22',
            ),
            1 => 
            array (
                'id' => 2,
                'permission_id' => 2,
                'role_id' => 1,
                'created_at' => '2020-05-25 19:49:28',
                'updated_at' => '2020-05-25 19:49:28',
            ),
            2 => 
            array (
                'id' => 3,
                'permission_id' => 3,
                'role_id' => 1,
                'created_at' => '2020-05-25 19:49:20',
                'updated_at' => '2020-05-25 19:49:20',
            ),
            3 => 
            array (
                'id' => 4,
                'permission_id' => 4,
                'role_id' => 1,
                'created_at' => '2020-05-25 20:54:41',
                'updated_at' => '2020-05-25 20:54:41',
            ),
            4 => 
            array (
                'id' => 10,
                'permission_id' => 9,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:33',
                'updated_at' => '2020-06-04 01:37:33',
            ),
            5 => 
            array (
                'id' => 11,
                'permission_id' => 10,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:40',
                'updated_at' => '2020-06-04 01:37:40',
            ),
            6 => 
            array (
                'id' => 12,
                'permission_id' => 11,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:46',
                'updated_at' => '2020-06-04 01:37:46',
            ),
            7 => 
            array (
                'id' => 13,
                'permission_id' => 12,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:52',
                'updated_at' => '2020-06-04 01:37:52',
            ),
            8 => 
            array (
                'id' => 49,
                'permission_id' => 51,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            9 => 
            array (
                'id' => 51,
                'permission_id' => 53,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            10 => 
            array (
                'id' => 81,
                'permission_id' => 8,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            11 => 
            array (
                'id' => 83,
                'permission_id' => 5,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            12 => 
            array (
                'id' => 86,
                'permission_id' => 6,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            13 => 
            array (
                'id' => 88,
                'permission_id' => 7,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            14 => 
            array (
                'id' => 89,
                'permission_id' => 50,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            15 => 
            array (
                'id' => 90,
                'permission_id' => 52,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            16 => 
            array (
                'id' => 93,
                'permission_id' => 95,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            17 => 
            array (
                'id' => 94,
                'permission_id' => 55,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            18 => 
            array (
                'id' => 95,
                'permission_id' => 97,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            19 => 
            array (
                'id' => 96,
                'permission_id' => 99,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 97,
                'permission_id' => 100,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 98,
                'permission_id' => 104,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 99,
                'permission_id' => 105,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 100,
                'permission_id' => 106,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 101,
                'permission_id' => 98,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 102,
                'permission_id' => 101,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 103,
                'permission_id' => 102,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 104,
                'permission_id' => 103,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 105,
                'permission_id' => 107,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 106,
                'permission_id' => 108,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 107,
                'permission_id' => 109,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 108,
                'permission_id' => 110,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 109,
                'permission_id' => 111,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 110,
                'permission_id' => 112,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 111,
                'permission_id' => 113,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 112,
                'permission_id' => 114,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 113,
                'permission_id' => 115,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 114,
                'permission_id' => 116,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 115,
                'permission_id' => 117,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 116,
                'permission_id' => 118,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 117,
                'permission_id' => 119,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 118,
                'permission_id' => 120,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}