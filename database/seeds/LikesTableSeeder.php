<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('likes')->delete();
        
        \DB::table('likes')->insert(array (
            0 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 53,
                'created_at' => '2021-06-11 07:52:49',
                'updated_at' => '2021-06-11 07:52:49',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 56,
                'created_at' => '2021-06-11 07:53:15',
                'updated_at' => '2021-06-11 07:53:15',
            ),
            2 => 
            array (
                'id' => 8,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 55,
                'created_at' => '2021-06-11 08:06:34',
                'updated_at' => '2021-06-11 08:06:34',
            ),
            3 => 
            array (
                'id' => 9,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 50,
                'created_at' => '2021-06-11 08:07:01',
                'updated_at' => '2021-06-11 08:07:01',
            ),
            4 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 53,
                'created_at' => '2021-06-11 08:08:41',
                'updated_at' => '2021-06-11 08:08:41',
            ),
            5 => 
            array (
                'id' => 11,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Project',
                'likeable_id' => 19,
                'created_at' => '2021-06-11 09:52:59',
                'updated_at' => '2021-06-11 09:52:59',
            ),
            6 => 
            array (
                'id' => 14,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Recipe',
                'likeable_id' => 34,
                'created_at' => '2021-06-11 10:37:33',
                'updated_at' => '2021-06-11 10:37:33',
            ),
            7 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Recipe',
                'likeable_id' => 2,
                'created_at' => '2021-06-11 11:38:44',
                'updated_at' => '2021-06-11 11:38:44',
            ),
            8 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 50,
                'created_at' => '2021-06-11 11:40:59',
                'updated_at' => '2021-06-11 11:40:59',
            ),
            9 => 
            array (
                'id' => 20,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Post',
                'likeable_id' => 15,
                'created_at' => '2021-06-11 14:21:31',
                'updated_at' => '2021-06-11 14:21:31',
            ),
            10 => 
            array (
                'id' => 21,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Post',
                'likeable_id' => 15,
                'created_at' => '2021-06-11 14:21:31',
                'updated_at' => '2021-06-11 14:21:31',
            ),
            11 => 
            array (
                'id' => 22,
                'user_id' => 4,
                'likeable_type' => 'App\\Models\\Post',
                'likeable_id' => 15,
                'created_at' => '2021-06-11 14:21:31',
                'updated_at' => '2021-06-11 14:21:31',
            ),
            12 => 
            array (
                'id' => 23,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 56,
                'created_at' => '2021-06-11 23:22:18',
                'updated_at' => '2021-06-11 23:22:18',
            ),
            13 => 
            array (
                'id' => 24,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Project',
                'likeable_id' => 13,
                'created_at' => '2021-06-11 23:22:31',
                'updated_at' => '2021-06-11 23:22:31',
            ),
            14 => 
            array (
                'id' => 26,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 55,
                'created_at' => '2021-06-15 21:26:01',
                'updated_at' => '2021-06-15 21:26:01',
            ),
            15 => 
            array (
                'id' => 28,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Feature',
                'likeable_id' => 1,
                'created_at' => '2021-06-16 10:37:07',
                'updated_at' => '2021-06-16 10:37:07',
            ),
            16 => 
            array (
                'id' => 29,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Bug',
                'likeable_id' => 59,
                'created_at' => '2021-06-16 10:56:03',
                'updated_at' => '2021-06-16 10:56:03',
            ),
            17 => 
            array (
                'id' => 30,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Project',
                'likeable_id' => 15,
                'created_at' => '2021-06-22 10:12:13',
                'updated_at' => '2021-06-22 10:12:13',
            ),
            18 => 
            array (
                'id' => 31,
                'user_id' => 3,
                'likeable_type' => 'App\\Models\\Recipe',
                'likeable_id' => 2,
                'created_at' => '2021-06-11 11:38:44',
                'updated_at' => '2021-06-11 11:38:44',
            ),
            19 => 
            array (
                'id' => 32,
                'user_id' => 2,
                'likeable_type' => 'App\\Models\\Carving',
                'likeable_id' => 58,
                'created_at' => '2021-06-28 11:26:14',
                'updated_at' => '2021-06-28 11:26:14',
            ),
        ));
        
        
    }
}