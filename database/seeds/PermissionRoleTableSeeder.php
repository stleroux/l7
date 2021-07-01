<?php

namespace Database\Seeders;

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
                'id' => 2,
                'permission_id' => 2,
                'role_id' => 1,
                'created_at' => '2020-05-25 19:49:28',
                'updated_at' => '2020-05-25 19:49:28',
            ),
            1 => 
            array (
                'id' => 3,
                'permission_id' => 3,
                'role_id' => 1,
                'created_at' => '2020-05-25 19:49:20',
                'updated_at' => '2020-05-25 19:49:20',
            ),
            2 => 
            array (
                'id' => 4,
                'permission_id' => 4,
                'role_id' => 1,
                'created_at' => '2020-05-25 20:54:41',
                'updated_at' => '2020-05-25 20:54:41',
            ),
            3 => 
            array (
                'id' => 10,
                'permission_id' => 9,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:33',
                'updated_at' => '2020-06-04 01:37:33',
            ),
            4 => 
            array (
                'id' => 11,
                'permission_id' => 10,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:40',
                'updated_at' => '2020-06-04 01:37:40',
            ),
            5 => 
            array (
                'id' => 12,
                'permission_id' => 11,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:46',
                'updated_at' => '2020-06-04 01:37:46',
            ),
            6 => 
            array (
                'id' => 13,
                'permission_id' => 12,
                'role_id' => 1,
                'created_at' => '2020-06-04 01:37:52',
                'updated_at' => '2020-06-04 01:37:52',
            ),
            7 => 
            array (
                'id' => 49,
                'permission_id' => 51,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            8 => 
            array (
                'id' => 51,
                'permission_id' => 53,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            9 => 
            array (
                'id' => 81,
                'permission_id' => 8,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            10 => 
            array (
                'id' => 88,
                'permission_id' => 7,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            11 => 
            array (
                'id' => 90,
                'permission_id' => 52,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            12 => 
            array (
                'id' => 93,
                'permission_id' => 95,
                'role_id' => 1,
                'created_at' => '2020-07-08 11:19:23',
                'updated_at' => '2020-07-08 11:19:23',
            ),
            13 => 
            array (
                'id' => 96,
                'permission_id' => 99,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 97,
                'permission_id' => 100,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 98,
                'permission_id' => 104,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 99,
                'permission_id' => 105,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 100,
                'permission_id' => 106,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 102,
                'permission_id' => 101,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 103,
                'permission_id' => 102,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 104,
                'permission_id' => 103,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 105,
                'permission_id' => 107,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 106,
                'permission_id' => 108,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 107,
                'permission_id' => 109,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 108,
                'permission_id' => 110,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 109,
                'permission_id' => 111,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 110,
                'permission_id' => 112,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 111,
                'permission_id' => 113,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 112,
                'permission_id' => 114,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 113,
                'permission_id' => 115,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 115,
                'permission_id' => 117,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 116,
                'permission_id' => 118,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 118,
                'permission_id' => 120,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 120,
                'permission_id' => 124,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 121,
                'permission_id' => 126,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 122,
                'permission_id' => 125,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 123,
                'permission_id' => 123,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 124,
                'permission_id' => 122,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 125,
                'permission_id' => 112,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 126,
                'permission_id' => 52,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 127,
                'permission_id' => 53,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 128,
                'permission_id' => 51,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 129,
                'permission_id' => 50,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 130,
                'permission_id' => 113,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 131,
                'permission_id' => 114,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 133,
                'permission_id' => 117,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 137,
                'permission_id' => 118,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 147,
                'permission_id' => 95,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 148,
                'permission_id' => 100,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 149,
                'permission_id' => 99,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 150,
                'permission_id' => 55,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 151,
                'permission_id' => 101,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 152,
                'permission_id' => 103,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 153,
                'permission_id' => 102,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 154,
                'permission_id' => 98,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 155,
                'permission_id' => 104,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 156,
                'permission_id' => 106,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 157,
                'permission_id' => 105,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 158,
                'permission_id' => 97,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 159,
                'permission_id' => 107,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 160,
                'permission_id' => 110,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 162,
                'permission_id' => 109,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 163,
                'permission_id' => 121,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 164,
                'permission_id' => 111,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 173,
                'permission_id' => 129,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 174,
                'permission_id' => 128,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 175,
                'permission_id' => 130,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 177,
                'permission_id' => 133,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 178,
                'permission_id' => 132,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 179,
                'permission_id' => 134,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 181,
                'permission_id' => 135,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 182,
                'permission_id' => 136,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 183,
                'permission_id' => 137,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 184,
                'permission_id' => 138,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 245,
                'permission_id' => 6,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 247,
                'permission_id' => 108,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 248,
                'permission_id' => 108,
                'role_id' => 3,
                'created_at' => '2020-11-10 02:15:25',
                'updated_at' => '2020-11-10 02:15:25',
            ),
            77 => 
            array (
                'id' => 249,
                'permission_id' => 148,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 250,
                'permission_id' => 150,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 251,
                'permission_id' => 149,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 253,
                'permission_id' => 152,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 254,
                'permission_id' => 154,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 255,
                'permission_id' => 153,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 257,
                'permission_id' => 156,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 258,
                'permission_id' => 158,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 259,
                'permission_id' => 157,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 261,
                'permission_id' => 160,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 262,
                'permission_id' => 162,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 263,
                'permission_id' => 161,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 265,
                'permission_id' => 152,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 266,
                'permission_id' => 154,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 267,
                'permission_id' => 153,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 268,
                'permission_id' => 151,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 273,
                'permission_id' => 156,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 274,
                'permission_id' => 158,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 275,
                'permission_id' => 157,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 276,
                'permission_id' => 155,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 282,
                'permission_id' => 165,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 294,
                'permission_id' => 164,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 295,
                'permission_id' => 163,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 296,
                'permission_id' => 179,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 297,
                'permission_id' => 165,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 298,
                'permission_id' => 146,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 299,
                'permission_id' => 127,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 300,
                'permission_id' => 151,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 301,
                'permission_id' => 50,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 302,
                'permission_id' => 159,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 303,
                'permission_id' => 131,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 304,
                'permission_id' => 98,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 305,
                'permission_id' => 116,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 306,
                'permission_id' => 119,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 307,
                'permission_id' => 97,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 308,
                'permission_id' => 5,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 309,
                'permission_id' => 147,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 310,
                'permission_id' => 55,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 311,
                'permission_id' => 121,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 312,
                'permission_id' => 155,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 313,
                'permission_id' => 1,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 321,
                'permission_id' => 127,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 322,
                'permission_id' => 115,
                'role_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 323,
                'permission_id' => 180,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 324,
                'permission_id' => 183,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 325,
                'permission_id' => 184,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 326,
                'permission_id' => 181,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 327,
                'permission_id' => 182,
                'role_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}