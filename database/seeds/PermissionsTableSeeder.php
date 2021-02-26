<?php

// namespace Database\Seeders;

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
                'group' => 'material',
                'id' => 97,
                'name' => 'material-manage',
                'updated_at' => '2020-12-22 06:43:43',
            ),
            19 => 
            array (
                'created_at' => '2020-07-07 14:37:25',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'finish',
                'id' => 98,
                'name' => 'finish-manage',
                'updated_at' => '2020-12-22 06:42:56',
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
                'group' => 'finish',
                'id' => 101,
                'name' => 'finish-create',
                'updated_at' => '2020-12-22 06:43:07',
            ),
            23 => 
            array (
                'created_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'finish',
                'id' => 102,
                'name' => 'finish-edit',
                'updated_at' => '2020-12-22 06:43:17',
            ),
            24 => 
            array (
                'created_at' => '2020-07-16 13:36:22',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'finish',
                'id' => 103,
                'name' => 'finish-delete',
                'updated_at' => '2020-12-22 06:43:27',
            ),
            25 => 
            array (
                'created_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'material',
                'id' => 104,
                'name' => 'material-create',
                'updated_at' => '2020-12-22 06:44:51',
            ),
            26 => 
            array (
                'created_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'material',
                'id' => 105,
                'name' => 'material-edit',
                'updated_at' => '2020-12-22 06:45:01',
            ),
            27 => 
            array (
                'created_at' => '2020-07-16 13:36:50',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'material',
                'id' => 106,
                'name' => 'material-delete',
                'updated_at' => '2020-12-22 06:45:12',
            ),
            28 => 
            array (
                'created_at' => '2020-08-06 21:48:09',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'recipe',
                'id' => 107,
                'name' => 'recipe-create',
                'updated_at' => '2020-08-06 21:48:09',
            ),
            29 => 
            array (
                'created_at' => '2020-08-06 21:48:09',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'recipe',
                'id' => 108,
                'name' => 'recipe-edit',
                'updated_at' => '2020-08-06 21:48:09',
            ),
            30 => 
            array (
                'created_at' => '2020-08-06 21:48:09',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'recipe',
                'id' => 109,
                'name' => 'recipe-list',
                'updated_at' => '2020-08-25 21:53:24',
            ),
            31 => 
            array (
                'created_at' => '2020-08-06 21:48:09',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'recipe',
                'id' => 110,
                'name' => 'recipe-delete',
                'updated_at' => '2020-08-06 21:48:09',
            ),
            32 => 
            array (
                'created_at' => '2020-08-25 21:25:40',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'recipe',
                'id' => 111,
                'name' => 'recipe-publish',
                'updated_at' => '2020-08-25 21:25:40',
            ),
            33 => 
            array (
                'created_at' => '2020-09-22 09:41:43',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'admin',
                'id' => 112,
                'name' => 'admin-dashboard',
                'updated_at' => '2020-09-22 09:41:43',
            ),
            34 => 
            array (
                'created_at' => '2020-09-22 09:44:37',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'dart',
                'id' => 113,
                'name' => 'dart-access',
                'updated_at' => '2020-09-22 09:44:37',
            ),
            35 => 
            array (
                'created_at' => '2020-09-22 09:44:37',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'dart',
                'id' => 114,
                'name' => 'dart-delete',
                'updated_at' => '2020-09-22 09:44:37',
            ),
            36 => 
            array (
                'created_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
                'description' => 'Access to the Invoicer Invoices module',
                'group' => 'invoicer',
                'id' => 115,
                'name' => 'invoicer-invoice',
                'updated_at' => '2020-09-22 10:36:05',
            ),
            37 => 
            array (
                'created_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
                'description' => 'Access to the Invoicer dashboard',
                'group' => 'invoicer',
                'id' => 116,
                'name' => 'invoicer-dashboard',
                'updated_at' => '2020-11-09 21:28:39',
            ),
            38 => 
            array (
                'created_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
                'description' => 'Access to the Invoicer Clients module',
                'group' => 'invoicer',
                'id' => 117,
                'name' => 'invoicer-client',
                'updated_at' => '2020-09-22 10:36:05',
            ),
            39 => 
            array (
                'created_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
                'description' => 'Access to the Invoicer Producs module',
                'group' => 'invoicer',
                'id' => 118,
                'name' => 'invoicer-product',
                'updated_at' => '2020-09-22 10:36:05',
            ),
            40 => 
            array (
                'created_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
                'description' => 'Access to the Invoicer Ledger module',
                'group' => 'invoicer',
                'id' => 119,
                'name' => 'invoicer-ledger',
                'updated_at' => '2020-09-22 10:36:05',
            ),
            41 => 
            array (
                'created_at' => '2020-09-22 10:38:39',
                'deleted_at' => NULL,
                'description' => 'Access Invoicer module menu',
                'group' => 'invoicer',
                'id' => 120,
                'name' => 'invoicer-access',
                'updated_at' => '2020-09-22 10:38:39',
            ),
            42 => 
            array (
                'created_at' => '2020-09-28 08:34:28',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'recipe',
                'id' => 121,
                'name' => 'recipe-manage',
                'updated_at' => '2020-09-28 08:34:28',
            ),
            43 => 
            array (
                'created_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'movie',
                'id' => 122,
                'name' => 'movie-manage',
                'updated_at' => '2020-09-28 12:58:08',
            ),
            44 => 
            array (
                'created_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'movie',
                'id' => 123,
                'name' => 'movie-list',
                'updated_at' => '2020-09-28 12:58:08',
            ),
            45 => 
            array (
                'created_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'movie',
                'id' => 124,
                'name' => 'movie-create',
                'updated_at' => '2020-09-28 12:58:08',
            ),
            46 => 
            array (
                'created_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'movie',
                'id' => 125,
                'name' => 'movie-edit',
                'updated_at' => '2020-09-28 12:58:08',
            ),
            47 => 
            array (
                'created_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'movie',
                'id' => 126,
                'name' => 'movie-delete',
                'updated_at' => '2020-09-28 12:58:08',
            ),
            48 => 
            array (
                'created_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'bug',
                'id' => 127,
                'name' => 'bug-manage',
                'updated_at' => '2020-09-29 22:07:47',
            ),
            49 => 
            array (
                'created_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'bug',
                'id' => 128,
                'name' => 'bug-edit',
                'updated_at' => '2020-09-29 22:07:47',
            ),
            50 => 
            array (
                'created_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'bug',
                'id' => 129,
                'name' => 'bug-delete',
                'updated_at' => '2020-09-29 22:07:47',
            ),
            51 => 
            array (
                'created_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'bug',
                'id' => 130,
                'name' => 'bug-list',
                'updated_at' => '2020-09-29 22:07:47',
            ),
            52 => 
            array (
                'created_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'feature',
                'id' => 131,
                'name' => 'feature-manage',
                'updated_at' => '2020-09-29 22:08:12',
            ),
            53 => 
            array (
                'created_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'feature',
                'id' => 132,
                'name' => 'feature-edit',
                'updated_at' => '2020-09-29 22:08:12',
            ),
            54 => 
            array (
                'created_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'feature',
                'id' => 133,
                'name' => 'feature-delete',
                'updated_at' => '2020-09-29 22:08:12',
            ),
            55 => 
            array (
                'created_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'feature',
                'id' => 134,
                'name' => 'feature-list',
                'updated_at' => '2020-09-29 22:08:12',
            ),
            56 => 
            array (
                'created_at' => '2020-10-02 10:10:05',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'bug',
                'id' => 135,
                'name' => 'bug-show',
                'updated_at' => '2020-10-02 10:10:05',
            ),
            57 => 
            array (
                'created_at' => '2020-10-04 08:10:22',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'bug',
                'id' => 136,
                'name' => 'bug-create',
                'updated_at' => '2020-10-04 08:10:22',
            ),
            58 => 
            array (
                'created_at' => '2020-10-05 14:08:36',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'feature',
                'id' => 137,
                'name' => 'feature-create',
                'updated_at' => '2020-10-05 14:08:36',
            ),
            59 => 
            array (
                'created_at' => '2020-10-09 07:35:13',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'feature',
                'id' => 138,
                'name' => 'feature-show',
                'updated_at' => '2020-10-09 07:35:13',
            ),
            60 => 
            array (
                'created_at' => '2020-10-25 19:28:52',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'admin',
                'id' => 146,
                'name' => 'admin-settings',
                'updated_at' => '2020-10-25 19:28:52',
            ),
            61 => 
            array (
                'created_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'post',
                'id' => 147,
                'name' => 'post-manage',
                'updated_at' => '2020-12-17 21:09:04',
            ),
            62 => 
            array (
                'created_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'post',
                'id' => 148,
                'name' => 'post-create',
                'updated_at' => '2020-12-17 21:09:04',
            ),
            63 => 
            array (
                'created_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'post',
                'id' => 149,
                'name' => 'post-edit',
                'updated_at' => '2020-12-17 21:09:04',
            ),
            64 => 
            array (
                'created_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'post',
                'id' => 150,
                'name' => 'post-delete',
                'updated_at' => '2020-12-17 21:09:04',
            ),
            65 => 
            array (
                'created_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'carving',
                'id' => 151,
                'name' => 'carving-manage',
                'updated_at' => '2020-12-22 06:46:04',
            ),
            66 => 
            array (
                'created_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'carving',
                'id' => 152,
                'name' => 'carving-create',
                'updated_at' => '2020-12-22 06:46:04',
            ),
            67 => 
            array (
                'created_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'carving',
                'id' => 153,
                'name' => 'carving-edit',
                'updated_at' => '2020-12-22 06:46:04',
            ),
            68 => 
            array (
                'created_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'carving',
                'id' => 154,
                'name' => 'carving-delete',
                'updated_at' => '2020-12-22 06:46:04',
            ),
            69 => 
            array (
                'created_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'tag',
                'id' => 155,
                'name' => 'tag-manage',
                'updated_at' => '2020-12-23 13:29:38',
            ),
            70 => 
            array (
                'created_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'tag',
                'id' => 156,
                'name' => 'tag-create',
                'updated_at' => '2020-12-23 13:29:38',
            ),
            71 => 
            array (
                'created_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'tag',
                'id' => 157,
                'name' => 'tag-edit',
                'updated_at' => '2020-12-23 13:29:38',
            ),
            72 => 
            array (
                'created_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'tag',
                'id' => 158,
                'name' => 'tag-delete',
                'updated_at' => '2020-12-23 13:29:38',
            ),
            73 => 
            array (
                'created_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'faq',
                'id' => 159,
                'name' => 'faq-manage',
                'updated_at' => '2021-01-04 07:34:21',
            ),
            74 => 
            array (
                'created_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'faq',
                'id' => 160,
                'name' => 'faq-create',
                'updated_at' => '2021-01-04 07:34:21',
            ),
            75 => 
            array (
                'created_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'faq',
                'id' => 161,
                'name' => 'faq-edit',
                'updated_at' => '2021-01-04 07:34:21',
            ),
            76 => 
            array (
                'created_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'faq',
                'id' => 162,
                'name' => 'faq-delete',
                'updated_at' => '2021-01-04 07:34:21',
            ),
            77 => 
            array (
                'created_at' => '2021-01-21 22:22:40',
                'deleted_at' => NULL,
                'description' => NULL,
                'group' => 'admin',
                'id' => 163,
                'name' => 'admin-general',
                'updated_at' => '2021-01-21 22:22:40',
            ),
        ));
        
        
    }
}