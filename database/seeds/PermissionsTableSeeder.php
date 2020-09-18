<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'user-manage',
                'group' => 'user',
                'description' => NULL,
                'created_at' => '2020-05-25 19:38:16',
                'updated_at' => '2020-06-04 05:45:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user-edit',
                'group' => 'user',
                'description' => 'Allow user to edit users',
                'created_at' => '2020-05-25 19:38:27',
                'updated_at' => '2020-06-26 05:51:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user-delete',
                'group' => 'user',
                'description' => NULL,
                'created_at' => '2020-05-25 19:38:39',
                'updated_at' => '2020-05-25 19:38:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'user-create',
                'group' => 'user',
                'description' => NULL,
                'created_at' => '2020-05-25 20:53:57',
                'updated_at' => '2020-05-25 20:53:57',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'permission-manage',
                'group' => 'permission',
                'description' => NULL,
                'created_at' => '2020-06-04 01:28:40',
                'updated_at' => '2020-06-04 01:28:40',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'permission-create',
                'group' => 'permission',
                'description' => NULL,
                'created_at' => '2020-06-04 01:28:49',
                'updated_at' => '2020-06-04 01:28:49',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'permission-edit',
                'group' => 'permission',
                'description' => NULL,
                'created_at' => '2020-06-04 01:28:57',
                'updated_at' => '2020-06-04 01:28:57',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'permission-delete',
                'group' => 'permission',
                'description' => NULL,
                'created_at' => '2020-06-04 01:29:15',
                'updated_at' => '2020-06-04 01:29:15',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'role-manage',
                'group' => 'role',
                'description' => NULL,
                'created_at' => '2020-06-04 01:36:55',
                'updated_at' => '2020-06-04 01:36:55',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'role-create',
                'group' => 'role',
                'description' => NULL,
                'created_at' => '2020-06-04 01:37:03',
                'updated_at' => '2020-06-04 01:37:03',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'role-edit',
                'group' => 'role',
                'description' => NULL,
                'created_at' => '2020-06-04 01:37:10',
                'updated_at' => '2020-06-04 01:37:10',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'role-delete',
                'group' => 'role',
                'description' => NULL,
                'created_at' => '2020-06-04 01:37:17',
                'updated_at' => '2020-06-04 01:37:17',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 50,
                'name' => 'category-manage',
                'group' => 'category',
                'description' => NULL,
                'created_at' => '2020-06-22 17:51:46',
                'updated_at' => '2020-06-22 17:51:46',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 51,
                'name' => 'category-edit',
                'group' => 'category',
                'description' => NULL,
                'created_at' => '2020-06-22 17:52:01',
                'updated_at' => '2020-06-22 17:52:01',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 52,
                'name' => 'category-create',
                'group' => 'category',
                'description' => NULL,
                'created_at' => '2020-06-22 17:52:11',
                'updated_at' => '2020-06-22 17:52:11',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 53,
                'name' => 'category-delete',
                'group' => 'category',
                'description' => NULL,
                'created_at' => '2020-06-22 17:52:18',
                'updated_at' => '2020-06-22 17:52:18',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 55,
                'name' => 'project-manage',
                'group' => 'project',
                'description' => NULL,
                'created_at' => '2020-06-27 16:36:30',
                'updated_at' => '2020-06-27 16:36:30',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 95,
                'name' => 'project-create',
                'group' => 'project',
                'description' => NULL,
                'created_at' => '2020-07-06 22:27:01',
                'updated_at' => '2020-07-06 22:27:01',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 97,
                'name' => 'project_materials-manage',
                'group' => 'project_materials',
                'description' => NULL,
                'created_at' => '2020-07-07 14:26:17',
                'updated_at' => '2020-07-07 14:34:01',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 98,
                'name' => 'project_finishes-manage',
                'group' => 'project_finishes',
                'description' => NULL,
                'created_at' => '2020-07-07 14:37:25',
                'updated_at' => '2020-07-07 14:56:06',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 99,
                'name' => 'project-edit',
                'group' => 'project',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:00',
                'updated_at' => '2020-07-16 13:36:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 100,
                'name' => 'project-delete',
                'group' => 'project',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:00',
                'updated_at' => '2020-07-16 13:36:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 101,
                'name' => 'project_finishes-create',
                'group' => 'project_finishes',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:22',
                'updated_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 102,
                'name' => 'project_finishes-edit',
                'group' => 'project_finishes',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:22',
                'updated_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 103,
                'name' => 'project_finishes-delete',
                'group' => 'project_finishes',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:22',
                'updated_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 104,
                'name' => 'project_materials-create',
                'group' => 'project_materials',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:50',
                'updated_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 105,
                'name' => 'project_materials-edit',
                'group' => 'project_materials',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:50',
                'updated_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 106,
                'name' => 'project_materials-delete',
                'group' => 'project_materials',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:50',
                'updated_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 107,
                'name' => 'recipe-create',
                'group' => 'recipe',
                'description' => NULL,
                'created_at' => '2020-08-06 21:48:09',
                'updated_at' => '2020-08-06 21:48:09',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 108,
                'name' => 'recipe-edit',
                'group' => 'recipe',
                'description' => NULL,
                'created_at' => '2020-08-06 21:48:09',
                'updated_at' => '2020-08-06 21:48:09',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 109,
                'name' => 'recipe-list',
                'group' => 'recipe',
                'description' => NULL,
                'created_at' => '2020-08-06 21:48:09',
                'updated_at' => '2020-08-25 21:53:24',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 110,
                'name' => 'recipe-delete',
                'group' => 'recipe',
                'description' => NULL,
                'created_at' => '2020-08-06 21:48:09',
                'updated_at' => '2020-08-06 21:48:09',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 111,
                'name' => 'recipe-publish',
                'group' => 'recipe',
                'description' => NULL,
                'created_at' => '2020-08-25 21:25:40',
                'updated_at' => '2020-08-25 21:25:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}