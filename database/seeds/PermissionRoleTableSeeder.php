<?php

// namespace Database\Seeders;

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
                'id' => 88,
                'permission_id' => 7,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            13 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 89,
                'permission_id' => 50,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            14 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 90,
                'permission_id' => 52,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            15 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 93,
                'permission_id' => 95,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            16 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 94,
                'permission_id' => 55,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            17 => 
            array (
                'created_at' => '2020-07-08 11:19:23',
                'id' => 95,
                'permission_id' => 97,
                'role_id' => 1,
                'updated_at' => '2020-07-08 11:19:23',
            ),
            18 => 
            array (
                'created_at' => NULL,
                'id' => 96,
                'permission_id' => 99,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'id' => 97,
                'permission_id' => 100,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'id' => 98,
                'permission_id' => 104,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'id' => 99,
                'permission_id' => 105,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'id' => 100,
                'permission_id' => 106,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'id' => 101,
                'permission_id' => 98,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'id' => 102,
                'permission_id' => 101,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'id' => 103,
                'permission_id' => 102,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'id' => 104,
                'permission_id' => 103,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'id' => 105,
                'permission_id' => 107,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'created_at' => NULL,
                'id' => 106,
                'permission_id' => 108,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'created_at' => NULL,
                'id' => 107,
                'permission_id' => 109,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'created_at' => NULL,
                'id' => 108,
                'permission_id' => 110,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'created_at' => NULL,
                'id' => 109,
                'permission_id' => 111,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'created_at' => NULL,
                'id' => 110,
                'permission_id' => 112,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'created_at' => NULL,
                'id' => 111,
                'permission_id' => 113,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'created_at' => NULL,
                'id' => 112,
                'permission_id' => 114,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'created_at' => NULL,
                'id' => 113,
                'permission_id' => 115,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'created_at' => NULL,
                'id' => 114,
                'permission_id' => 116,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'created_at' => NULL,
                'id' => 115,
                'permission_id' => 117,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'created_at' => NULL,
                'id' => 116,
                'permission_id' => 118,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'created_at' => NULL,
                'id' => 117,
                'permission_id' => 119,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'created_at' => NULL,
                'id' => 118,
                'permission_id' => 120,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'created_at' => NULL,
                'id' => 119,
                'permission_id' => 121,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'created_at' => NULL,
                'id' => 120,
                'permission_id' => 124,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'created_at' => NULL,
                'id' => 121,
                'permission_id' => 126,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'created_at' => NULL,
                'id' => 122,
                'permission_id' => 125,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'created_at' => NULL,
                'id' => 123,
                'permission_id' => 123,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'created_at' => NULL,
                'id' => 124,
                'permission_id' => 122,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'created_at' => NULL,
                'id' => 125,
                'permission_id' => 112,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'created_at' => NULL,
                'id' => 126,
                'permission_id' => 52,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'created_at' => NULL,
                'id' => 127,
                'permission_id' => 53,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'created_at' => NULL,
                'id' => 128,
                'permission_id' => 51,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'created_at' => NULL,
                'id' => 129,
                'permission_id' => 50,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'created_at' => NULL,
                'id' => 130,
                'permission_id' => 113,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'created_at' => NULL,
                'id' => 131,
                'permission_id' => 114,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'created_at' => NULL,
                'id' => 132,
                'permission_id' => 120,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'created_at' => NULL,
                'id' => 133,
                'permission_id' => 117,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'created_at' => NULL,
                'id' => 134,
                'permission_id' => 116,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'created_at' => NULL,
                'id' => 135,
                'permission_id' => 115,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'created_at' => NULL,
                'id' => 136,
                'permission_id' => 119,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'created_at' => NULL,
                'id' => 137,
                'permission_id' => 118,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'created_at' => NULL,
                'id' => 147,
                'permission_id' => 95,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'created_at' => NULL,
                'id' => 148,
                'permission_id' => 100,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'created_at' => NULL,
                'id' => 149,
                'permission_id' => 99,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'created_at' => NULL,
                'id' => 150,
                'permission_id' => 55,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'created_at' => NULL,
                'id' => 151,
                'permission_id' => 101,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'created_at' => NULL,
                'id' => 152,
                'permission_id' => 103,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'created_at' => NULL,
                'id' => 153,
                'permission_id' => 102,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'created_at' => NULL,
                'id' => 154,
                'permission_id' => 98,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'created_at' => NULL,
                'id' => 155,
                'permission_id' => 104,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'created_at' => NULL,
                'id' => 156,
                'permission_id' => 106,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'created_at' => NULL,
                'id' => 157,
                'permission_id' => 105,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'created_at' => NULL,
                'id' => 158,
                'permission_id' => 97,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'created_at' => NULL,
                'id' => 159,
                'permission_id' => 107,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'created_at' => NULL,
                'id' => 160,
                'permission_id' => 110,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'created_at' => NULL,
                'id' => 162,
                'permission_id' => 109,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'created_at' => NULL,
                'id' => 163,
                'permission_id' => 121,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'created_at' => NULL,
                'id' => 164,
                'permission_id' => 111,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'created_at' => NULL,
                'id' => 173,
                'permission_id' => 129,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'created_at' => NULL,
                'id' => 174,
                'permission_id' => 128,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'created_at' => NULL,
                'id' => 175,
                'permission_id' => 130,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'created_at' => NULL,
                'id' => 176,
                'permission_id' => 127,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'created_at' => NULL,
                'id' => 177,
                'permission_id' => 133,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'created_at' => NULL,
                'id' => 178,
                'permission_id' => 132,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'created_at' => NULL,
                'id' => 179,
                'permission_id' => 134,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'created_at' => NULL,
                'id' => 180,
                'permission_id' => 131,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'created_at' => NULL,
                'id' => 181,
                'permission_id' => 135,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'created_at' => NULL,
                'id' => 182,
                'permission_id' => 136,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'created_at' => NULL,
                'id' => 183,
                'permission_id' => 137,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'created_at' => NULL,
                'id' => 184,
                'permission_id' => 138,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'created_at' => NULL,
                'id' => 245,
                'permission_id' => 6,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'created_at' => NULL,
                'id' => 246,
                'permission_id' => 146,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'created_at' => NULL,
                'id' => 247,
                'permission_id' => 108,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'created_at' => '2020-11-10 02:15:25',
                'id' => 248,
                'permission_id' => 108,
                'role_id' => 3,
                'updated_at' => '2020-11-10 02:15:25',
            ),
            93 => 
            array (
                'created_at' => NULL,
                'id' => 249,
                'permission_id' => 148,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'created_at' => NULL,
                'id' => 250,
                'permission_id' => 150,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'created_at' => NULL,
                'id' => 251,
                'permission_id' => 149,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'created_at' => NULL,
                'id' => 252,
                'permission_id' => 147,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'created_at' => NULL,
                'id' => 253,
                'permission_id' => 152,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'created_at' => NULL,
                'id' => 254,
                'permission_id' => 154,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'created_at' => NULL,
                'id' => 255,
                'permission_id' => 153,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'created_at' => NULL,
                'id' => 256,
                'permission_id' => 151,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'created_at' => NULL,
                'id' => 257,
                'permission_id' => 156,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'created_at' => NULL,
                'id' => 258,
                'permission_id' => 158,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'created_at' => NULL,
                'id' => 259,
                'permission_id' => 157,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'created_at' => NULL,
                'id' => 260,
                'permission_id' => 155,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'created_at' => NULL,
                'id' => 261,
                'permission_id' => 160,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'created_at' => NULL,
                'id' => 262,
                'permission_id' => 162,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'created_at' => NULL,
                'id' => 263,
                'permission_id' => 161,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'created_at' => NULL,
                'id' => 264,
                'permission_id' => 159,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'created_at' => NULL,
                'id' => 265,
                'permission_id' => 152,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'created_at' => NULL,
                'id' => 266,
                'permission_id' => 154,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'created_at' => NULL,
                'id' => 267,
                'permission_id' => 153,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'created_at' => NULL,
                'id' => 268,
                'permission_id' => 151,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'created_at' => NULL,
                'id' => 269,
                'permission_id' => 160,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'created_at' => NULL,
                'id' => 270,
                'permission_id' => 162,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'created_at' => NULL,
                'id' => 271,
                'permission_id' => 161,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'created_at' => NULL,
                'id' => 272,
                'permission_id' => 159,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'created_at' => NULL,
                'id' => 273,
                'permission_id' => 156,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'created_at' => NULL,
                'id' => 274,
                'permission_id' => 158,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'created_at' => NULL,
                'id' => 275,
                'permission_id' => 157,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'created_at' => NULL,
                'id' => 276,
                'permission_id' => 155,
                'role_id' => 5,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'created_at' => NULL,
                'id' => 277,
                'permission_id' => 163,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}