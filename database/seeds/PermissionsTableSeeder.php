<?php

namespace Database\Seeders;

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
                'updated_at' => '2021-06-02 22:02:09',
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
                'name' => 'material-manage',
                'group' => 'material',
                'description' => NULL,
                'created_at' => '2020-07-07 14:26:17',
                'updated_at' => '2020-12-22 06:43:43',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 98,
                'name' => 'finish-manage',
                'group' => 'finish',
                'description' => NULL,
                'created_at' => '2020-07-07 14:37:25',
                'updated_at' => '2020-12-22 06:42:56',
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
                'name' => 'finish-create',
                'group' => 'finish',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:22',
                'updated_at' => '2020-12-22 06:43:07',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 102,
                'name' => 'finish-edit',
                'group' => 'finish',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:22',
                'updated_at' => '2020-12-22 06:43:17',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 103,
                'name' => 'finish-delete',
                'group' => 'finish',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:22',
                'updated_at' => '2020-12-22 06:43:27',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 104,
                'name' => 'material-create',
                'group' => 'material',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:50',
                'updated_at' => '2020-12-22 06:44:51',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 105,
                'name' => 'material-edit',
                'group' => 'material',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:50',
                'updated_at' => '2020-12-22 06:45:01',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 106,
                'name' => 'material-delete',
                'group' => 'material',
                'description' => NULL,
                'created_at' => '2020-07-16 13:36:50',
                'updated_at' => '2020-12-22 06:45:12',
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
            33 => 
            array (
                'id' => 112,
                'name' => 'admin-dashboard',
                'group' => 'admin',
                'description' => NULL,
                'created_at' => '2020-09-22 09:41:43',
                'updated_at' => '2020-09-22 09:41:43',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 113,
                'name' => 'dart-access',
                'group' => 'dart',
                'description' => NULL,
                'created_at' => '2020-09-22 09:44:37',
                'updated_at' => '2020-09-22 09:44:37',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 114,
                'name' => 'dart-delete',
                'group' => 'dart',
                'description' => NULL,
                'created_at' => '2020-09-22 09:44:37',
                'updated_at' => '2020-09-22 09:44:37',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 115,
                'name' => 'invoicer-invoice',
                'group' => 'invoicer',
                'description' => 'Access to the Invoicer Invoices module',
                'created_at' => '2020-09-22 10:36:05',
                'updated_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 116,
                'name' => 'invoicer-dashboard',
                'group' => 'invoicer',
                'description' => 'Access to the Invoicer dashboard',
                'created_at' => '2020-09-22 10:36:05',
                'updated_at' => '2020-11-09 21:28:39',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 117,
                'name' => 'invoicer-client',
                'group' => 'invoicer',
                'description' => 'Access to the Invoicer Clients module',
                'created_at' => '2020-09-22 10:36:05',
                'updated_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 118,
                'name' => 'invoicer-product',
                'group' => 'invoicer',
                'description' => 'Access to the Invoicer Producs module',
                'created_at' => '2020-09-22 10:36:05',
                'updated_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 119,
                'name' => 'invoicer-ledger',
                'group' => 'invoicer',
                'description' => 'Access to the Invoicer Ledger module',
                'created_at' => '2020-09-22 10:36:05',
                'updated_at' => '2020-09-22 10:36:05',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 120,
                'name' => 'invoicer-access',
                'group' => 'invoicer',
                'description' => 'Access Invoicer module menu',
                'created_at' => '2020-09-22 10:38:39',
                'updated_at' => '2020-09-22 10:38:39',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 121,
                'name' => 'recipe-manage',
                'group' => 'recipe',
                'description' => NULL,
                'created_at' => '2020-09-28 08:34:28',
                'updated_at' => '2020-09-28 08:34:28',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 122,
                'name' => 'movie-manage',
                'group' => 'movie',
                'description' => NULL,
                'created_at' => '2020-09-28 12:58:08',
                'updated_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 123,
                'name' => 'movie-list',
                'group' => 'movie',
                'description' => NULL,
                'created_at' => '2020-09-28 12:58:08',
                'updated_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 124,
                'name' => 'movie-create',
                'group' => 'movie',
                'description' => NULL,
                'created_at' => '2020-09-28 12:58:08',
                'updated_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 125,
                'name' => 'movie-edit',
                'group' => 'movie',
                'description' => NULL,
                'created_at' => '2020-09-28 12:58:08',
                'updated_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 126,
                'name' => 'movie-delete',
                'group' => 'movie',
                'description' => NULL,
                'created_at' => '2020-09-28 12:58:08',
                'updated_at' => '2020-09-28 12:58:08',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 127,
                'name' => 'bug-manage',
                'group' => 'bug',
                'description' => NULL,
                'created_at' => '2020-09-29 22:07:47',
                'updated_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 128,
                'name' => 'bug-edit',
                'group' => 'bug',
                'description' => NULL,
                'created_at' => '2020-09-29 22:07:47',
                'updated_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 129,
                'name' => 'bug-delete',
                'group' => 'bug',
                'description' => NULL,
                'created_at' => '2020-09-29 22:07:47',
                'updated_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 130,
                'name' => 'bug-list',
                'group' => 'bug',
                'description' => NULL,
                'created_at' => '2020-09-29 22:07:47',
                'updated_at' => '2020-09-29 22:07:47',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 131,
                'name' => 'feature-manage',
                'group' => 'feature',
                'description' => NULL,
                'created_at' => '2020-09-29 22:08:12',
                'updated_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 132,
                'name' => 'feature-edit',
                'group' => 'feature',
                'description' => NULL,
                'created_at' => '2020-09-29 22:08:12',
                'updated_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 133,
                'name' => 'feature-delete',
                'group' => 'feature',
                'description' => NULL,
                'created_at' => '2020-09-29 22:08:12',
                'updated_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 134,
                'name' => 'feature-list',
                'group' => 'feature',
                'description' => NULL,
                'created_at' => '2020-09-29 22:08:12',
                'updated_at' => '2020-09-29 22:08:12',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 135,
                'name' => 'bug-show',
                'group' => 'bug',
                'description' => NULL,
                'created_at' => '2020-10-02 10:10:05',
                'updated_at' => '2020-10-02 10:10:05',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 136,
                'name' => 'bug-create',
                'group' => 'bug',
                'description' => NULL,
                'created_at' => '2020-10-04 08:10:22',
                'updated_at' => '2020-10-04 08:10:22',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 137,
                'name' => 'feature-create',
                'group' => 'feature',
                'description' => NULL,
                'created_at' => '2020-10-05 14:08:36',
                'updated_at' => '2020-10-05 14:08:36',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 138,
                'name' => 'feature-show',
                'group' => 'feature',
                'description' => NULL,
                'created_at' => '2020-10-09 07:35:13',
                'updated_at' => '2020-10-09 07:35:13',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 146,
                'name' => 'admin-settings',
                'group' => 'admin',
                'description' => NULL,
                'created_at' => '2020-10-25 19:28:52',
                'updated_at' => '2020-10-25 19:28:52',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 147,
                'name' => 'post-manage',
                'group' => 'post',
                'description' => NULL,
                'created_at' => '2020-12-17 21:09:04',
                'updated_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 148,
                'name' => 'post-create',
                'group' => 'post',
                'description' => NULL,
                'created_at' => '2020-12-17 21:09:04',
                'updated_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 149,
                'name' => 'post-edit',
                'group' => 'post',
                'description' => NULL,
                'created_at' => '2020-12-17 21:09:04',
                'updated_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 150,
                'name' => 'post-delete',
                'group' => 'post',
                'description' => NULL,
                'created_at' => '2020-12-17 21:09:04',
                'updated_at' => '2020-12-17 21:09:04',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 151,
                'name' => 'carving-manage',
                'group' => 'carving',
                'description' => NULL,
                'created_at' => '2020-12-22 06:46:04',
                'updated_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 152,
                'name' => 'carving-create',
                'group' => 'carving',
                'description' => NULL,
                'created_at' => '2020-12-22 06:46:04',
                'updated_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 153,
                'name' => 'carving-edit',
                'group' => 'carving',
                'description' => NULL,
                'created_at' => '2020-12-22 06:46:04',
                'updated_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 154,
                'name' => 'carving-delete',
                'group' => 'carving',
                'description' => NULL,
                'created_at' => '2020-12-22 06:46:04',
                'updated_at' => '2020-12-22 06:46:04',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 155,
                'name' => 'tag-manage',
                'group' => 'tag',
                'description' => NULL,
                'created_at' => '2020-12-23 13:29:38',
                'updated_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 156,
                'name' => 'tag-create',
                'group' => 'tag',
                'description' => NULL,
                'created_at' => '2020-12-23 13:29:38',
                'updated_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 157,
                'name' => 'tag-edit',
                'group' => 'tag',
                'description' => NULL,
                'created_at' => '2020-12-23 13:29:38',
                'updated_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 158,
                'name' => 'tag-delete',
                'group' => 'tag',
                'description' => NULL,
                'created_at' => '2020-12-23 13:29:38',
                'updated_at' => '2020-12-23 13:29:38',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 159,
                'name' => 'faq-manage',
                'group' => 'faq',
                'description' => NULL,
                'created_at' => '2021-01-04 07:34:21',
                'updated_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 160,
                'name' => 'faq-create',
                'group' => 'faq',
                'description' => NULL,
                'created_at' => '2021-01-04 07:34:21',
                'updated_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 161,
                'name' => 'faq-edit',
                'group' => 'faq',
                'description' => NULL,
                'created_at' => '2021-01-04 07:34:21',
                'updated_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 162,
                'name' => 'faq-delete',
                'group' => 'faq',
                'description' => NULL,
                'created_at' => '2021-01-04 07:34:21',
                'updated_at' => '2021-01-04 07:34:21',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 163,
                'name' => 'admin-frontend',
                'group' => 'admin',
                'description' => NULL,
                'created_at' => '2021-01-21 22:22:40',
                'updated_at' => '2021-06-17 12:04:44',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 164,
                'name' => 'admin-audits',
                'group' => 'admin',
                'description' => NULL,
                'created_at' => '2021-02-02 21:34:05',
                'updated_at' => '2021-02-04 13:17:02',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 165,
                'name' => 'admin-notifications',
                'group' => 'admin',
                'description' => NULL,
                'created_at' => '2021-02-04 13:17:34',
                'updated_at' => '2021-02-04 13:17:34',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 179,
                'name' => 'admin-logreader',
                'group' => 'admin',
                'description' => NULL,
                'created_at' => '2021-06-14 12:17:35',
                'updated_at' => '2021-06-14 12:17:35',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 180,
                'name' => 'block-create',
                'group' => 'block',
                'description' => NULL,
                'created_at' => '2021-06-17 13:42:05',
                'updated_at' => '2021-06-17 13:42:05',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 181,
                'name' => 'block-show',
                'group' => 'show',
                'description' => NULL,
                'created_at' => '2021-06-17 13:42:05',
                'updated_at' => '2021-06-17 13:42:05',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 182,
                'name' => 'block-edit',
                'group' => 'block',
                'description' => NULL,
                'created_at' => '2021-06-17 13:42:05',
                'updated_at' => '2021-06-17 14:04:20',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 183,
                'name' => 'block-delete',
                'group' => 'block',
                'description' => NULL,
                'created_at' => '2021-06-17 13:42:05',
                'updated_at' => '2021-06-17 13:42:05',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 184,
                'name' => 'block-manage',
                'group' => 'block',
                'description' => NULL,
                'created_at' => '2021-06-17 13:42:28',
                'updated_at' => '2021-06-17 13:42:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}