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
                'created_at' => '2020-05-25 19:38:16',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'user',
                'id' => 1,
                'name' => 'user-manage',
                'updated_at' => '2020-06-04 05:45:53',
            ),
            1 => 
            array (
                'created_at' => '2020-05-25 19:38:27',
                'deleted_at' => NULL,
                'description' => 'Allow user to edit users',
                'group' => 'user',
                'id' => 2,
                'name' => 'user-edit',
                'updated_at' => '2020-06-26 05:51:37',
            ),
            2 => 
            array (
                'created_at' => '2020-05-25 19:38:39',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'user',
                'id' => 3,
                'name' => 'user-delete',
                'updated_at' => '2020-05-25 19:38:39',
            ),
            3 => 
            array (
                'created_at' => '2020-05-25 20:53:57',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'user',
                'id' => 4,
                'name' => 'user-create',
                'updated_at' => '2020-05-25 20:53:57',
            ),
            4 => 
            array (
                'created_at' => '2020-06-04 01:28:40',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'permission',
                'id' => 5,
                'name' => 'permission-manage',
                'updated_at' => '2020-06-04 01:28:40',
            ),
            5 => 
            array (
                'created_at' => '2020-06-04 01:28:49',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'permission',
                'id' => 6,
                'name' => 'permission-create',
                'updated_at' => '2020-06-04 01:28:49',
            ),
            6 => 
            array (
                'created_at' => '2020-06-04 01:28:57',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'permission',
                'id' => 7,
                'name' => 'permission-edit',
                'updated_at' => '2020-06-04 01:28:57',
            ),
            7 => 
            array (
                'created_at' => '2020-06-04 01:29:15',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'permission',
                'id' => 8,
                'name' => 'permission-delete',
                'updated_at' => '2020-06-04 01:29:15',
            ),
            8 => 
            array (
                'created_at' => '2020-06-04 01:36:55',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'role',
                'id' => 9,
                'name' => 'role-manage',
                'updated_at' => '2020-06-04 01:36:55',
            ),
            9 => 
            array (
                'created_at' => '2020-06-04 01:37:03',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'role',
                'id' => 10,
                'name' => 'role-create',
                'updated_at' => '2020-06-04 01:37:03',
            ),
            10 => 
            array (
                'created_at' => '2020-06-04 01:37:10',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'role',
                'id' => 11,
                'name' => 'role-edit',
                'updated_at' => '2020-06-04 01:37:10',
            ),
            11 => 
            array (
                'created_at' => '2020-06-04 01:37:17',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'role',
                'id' => 12,
                'name' => 'role-delete',
                'updated_at' => '2020-06-04 01:37:17',
            ),
            12 => 
            array (
                'created_at' => '2020-06-22 17:51:46',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'category',
                'id' => 50,
                'name' => 'category-manage',
                'updated_at' => '2020-06-22 17:51:46',
            ),
            13 => 
            array (
                'created_at' => '2020-06-22 17:52:01',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'category',
                'id' => 51,
                'name' => 'category-edit',
                'updated_at' => '2020-06-22 17:52:01',
            ),
            14 => 
            array (
                'created_at' => '2020-06-22 17:52:11',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'category',
                'id' => 52,
                'name' => 'category-create',
                'updated_at' => '2020-06-22 17:52:11',
            ),
            15 => 
            array (
                'created_at' => '2020-06-22 17:52:18',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'category',
                'id' => 53,
                'name' => 'category-delete',
                'updated_at' => '2020-06-22 17:52:18',
            ),
            16 => 
            array (
                'created_at' => '2020-06-27 16:36:30',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project',
                'id' => 55,
                'name' => 'project-manage',
                'updated_at' => '2020-06-27 16:36:30',
            ),
            17 => 
            array (
                'created_at' => '2020-07-06 22:27:01',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project',
                'id' => 95,
                'name' => 'project-create',
                'updated_at' => '2020-07-06 22:27:01',
            ),
            18 => 
            array (
                'created_at' => '2020-07-07 14:26:17',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_materials',
                'id' => 97,
                'name' => 'project_materials-manage',
                'updated_at' => '2020-07-07 14:34:01',
            ),
            19 => 
            array (
                'created_at' => '2020-07-07 14:37:25',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_finishes',
                'id' => 98,
                'name' => 'project_finishes-manage',
                'updated_at' => '2020-07-07 14:56:06',
            ),
            20 => 
            array (
                'created_at' => '2020-07-16 13:36:00',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project',
                'id' => 99,
                'name' => 'project-edit',
                'updated_at' => '2020-07-16 13:36:00',
            ),
            21 => 
            array (
                'created_at' => '2020-07-16 13:36:00',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project',
                'id' => 100,
                'name' => 'project-delete',
                'updated_at' => '2020-07-16 13:36:00',
            ),
            22 => 
            array (
                'created_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_finishes',
                'id' => 101,
                'name' => 'project_finishes-create',
                'updated_at' => '2020-07-16 13:36:22',
            ),
            23 => 
            array (
                'created_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_finishes',
                'id' => 102,
                'name' => 'project_finishes-edit',
                'updated_at' => '2020-07-16 13:36:22',
            ),
            24 => 
            array (
                'created_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_finishes',
                'id' => 103,
                'name' => 'project_finishes-delete',
                'updated_at' => '2020-07-16 13:36:22',
            ),
            25 => 
            array (
                'created_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_materials',
                'id' => 104,
                'name' => 'project_materials-create',
                'updated_at' => '2020-07-16 13:36:50',
            ),
            26 => 
            array (
                'created_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_materials',
                'id' => 105,
                'name' => 'project_materials-edit',
                'updated_at' => '2020-07-16 13:36:50',
            ),
            27 => 
            array (
                'created_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'project_materials',
                'id' => 106,
                'name' => 'project_materials-delete',
                'updated_at' => '2020-07-16 13:36:50',
            ),
        ));
        
        
    }
}