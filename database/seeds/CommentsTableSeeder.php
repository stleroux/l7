<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'approved' => 0,
                'comment' => 'dsds',
                'commentable_id' => 1,
                'commentable_type' => 'Modules\\Posts\\Entities\\Post',
                'created_at' => '2019-01-27 12:50:08',
                'id' => 1,
                'updated_at' => '2019-01-27 12:50:08',
                'user_id' => 1,
            ),
            1 => 
            array (
                'approved' => 0,
                'comment' => 'dsds',
                'commentable_id' => 2,
                'commentable_type' => 'Modules\\Recipes\\Entities\\Recipe',
                'created_at' => '2019-01-27 13:07:33',
                'id' => 2,
                'updated_at' => '2019-01-27 13:07:33',
                'user_id' => 2,
            ),
            2 => 
            array (
                'approved' => 0,
                'comment' => 'fsdfsdfsdfsdf',
                'commentable_id' => 11,
                'commentable_type' => 'Modules\\Recipes\\Entities\\Recipe',
                'created_at' => '2019-01-28 11:28:37',
                'id' => 3,
                'updated_at' => '2019-01-28 11:28:37',
                'user_id' => 1,
            ),
            3 => 
            array (
                'approved' => 0,
                'comment' => 'sdasdsadsad',
                'commentable_id' => 31,
                'commentable_type' => 'Modules\\Recipes\\Entities\\Recipe',
                'created_at' => '2019-02-10 14:31:20',
                'id' => 4,
                'updated_at' => '2019-02-10 14:31:20',
                'user_id' => 1,
            ),
            4 => 
            array (
                'approved' => 0,
                'comment' => 'Testing comment feature for recipes',
                'commentable_id' => 11,
                'commentable_type' => 'Modules\\Recipes\\Entities\\Recipe',
                'created_at' => '2019-02-11 11:25:52',
                'id' => 5,
                'updated_at' => '2019-02-11 11:25:52',
                'user_id' => 1,
            ),
            5 => 
            array (
                'approved' => 0,
                'comment' => 'test test test test',
                'commentable_id' => 11,
                'commentable_type' => 'Modules\\Recipes\\Entities\\Recipe',
                'created_at' => '2019-02-12 17:20:40',
                'id' => 6,
                'updated_at' => '2019-02-12 17:20:40',
                'user_id' => 2,
            ),
            6 => 
            array (
                'approved' => 0,
                'comment' => 'First comment for this recipe',
                'commentable_id' => 10,
                'commentable_type' => 'App\\Models\\Recipes\\Recipe',
                'created_at' => '2019-06-10 17:15:07',
                'id' => 7,
                'updated_at' => '2019-06-10 17:15:07',
                'user_id' => 2,
            ),
            7 => 
            array (
                'approved' => 0,
                'comment' => '22222222222222',
                'commentable_id' => 10,
                'commentable_type' => 'App\\Models\\Recipes\\Recipe',
                'created_at' => '2019-06-10 17:16:12',
                'id' => 8,
                'updated_at' => '2019-06-10 17:16:12',
                'user_id' => 2,
            ),
            8 => 
            array (
                'approved' => 0,
                'comment' => 'testing',
                'commentable_id' => 12,
                'commentable_type' => 'App\\Models\\Admin\\Projects\\Project',
                'created_at' => '2019-07-21 11:08:49',
                'id' => 9,
                'updated_at' => '2019-07-21 11:08:49',
                'user_id' => 2,
            ),
            9 => 
            array (
                'approved' => 0,
                'comment' => 'fdsfdsfds',
                'commentable_id' => 7,
                'commentable_type' => 'App\\Models\\Admin\\Projects\\Project',
                'created_at' => '2019-07-21 13:17:19',
                'id' => 11,
                'updated_at' => '2019-07-21 13:17:19',
                'user_id' => 2,
            ),
            10 => 
            array (
                'approved' => 0,
                'comment' => 'lkjgsdflgkjalkgjalgkj',
                'commentable_id' => 12,
                'commentable_type' => 'App\\Models\\Admin\\Projects\\Project',
                'created_at' => '2019-07-21 14:20:22',
                'id' => 12,
                'updated_at' => '2019-07-21 14:20:22',
                'user_id' => 2,
            ),
            11 => 
            array (
                'approved' => 0,
                'comment' => '<p>assdsadsad</p>',
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => '2019-07-31 01:56:27',
                'id' => 14,
                'updated_at' => '2019-07-31 01:56:27',
                'user_id' => 2,
            ),
            12 => 
            array (
                'approved' => 0,
                'comment' => 'Best banana loaf around bar none',
                'commentable_id' => 4,
                'commentable_type' => 'App\\Models\\Recipes\\Recipe',
                'created_at' => '2019-08-13 19:26:40',
                'id' => 15,
                'updated_at' => '2019-09-27 09:40:56',
                'user_id' => 2,
            ),
            13 => 
            array (
                'approved' => 1,
                'comment' => 'Comment number 2',
                'commentable_id' => 12,
                'commentable_type' => 'App\\Models\\Admin\\Projects\\Project',
                'created_at' => '2019-08-14 16:03:13',
                'id' => 16,
                'updated_at' => '2019-08-14 16:03:13',
                'user_id' => 2,
            ),
            14 => 
            array (
                'approved' => 0,
                'comment' => 'First comment from Stacie\'s account',
                'commentable_id' => 10,
                'commentable_type' => 'App\\Models\\Recipes\\Recipe',
                'created_at' => '2019-08-14 16:34:37',
                'id' => 18,
                'updated_at' => '2019-08-14 16:34:37',
                'user_id' => 3,
            ),
            15 => 
            array (
                'approved' => 1,
                'comment' => 'Comment number 1 Comment number 1 Comment number 1 Comment number 1 Comment number 1 Comment number 1',
                'commentable_id' => 24,
                'commentable_type' => 'App\\Models\\Admin\\Projects\\Project',
                'created_at' => '2019-08-14 17:28:33',
                'id' => 19,
                'updated_at' => '2019-08-14 17:28:33',
                'user_id' => 3,
            ),
            16 => 
            array (
                'approved' => 1,
                'comment' => '<p>adding a new comment to this post to test and make sure it is working as expected on this day</p>',
                'commentable_id' => 24,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => '2019-08-14 17:29:31',
                'id' => 20,
                'updated_at' => '2019-08-14 17:29:31',
                'user_id' => 3,
            ),
            17 => 
            array (
                'approved' => 0,
                'comment' => '<p>Second blog comment</p>',
                'commentable_id' => 2,
                'commentable_type' => 'App\\Models\\Posts\\Post',
                'created_at' => '2019-09-27 19:13:09',
                'id' => 21,
                'updated_at' => '2019-09-27 19:13:09',
                'user_id' => 3,
            ),
            18 => 
            array (
                'approved' => 0,
                'comment' => 'ssasadsad',
                'commentable_id' => 20,
                'commentable_type' => 'App\\Models\\Admin\\Projects\\Project',
                'created_at' => '2019-10-07 18:06:32',
                'id' => 22,
                'updated_at' => '2019-10-07 18:06:32',
                'user_id' => 3,
            ),
            19 => 
            array (
                'approved' => 0,
                'comment' => 'This recipe is OK',
                'commentable_id' => 23,
                'commentable_type' => 'App\\Models\\Recipes\\Recipe',
                'created_at' => '2020-02-23 03:57:56',
                'id' => 23,
                'updated_at' => '2020-02-23 03:57:56',
                'user_id' => 2,
            ),
            20 => 
            array (
                'approved' => 0,
                'comment' => 'Very cool mirror made from old window frame',
                'commentable_id' => 19,
                'commentable_type' => 'App\\Models\\Admin\\Projects\\Project',
                'created_at' => '2020-03-06 20:48:52',
                'id' => 24,
                'updated_at' => '2020-03-06 20:48:52',
                'user_id' => 2,
            ),
            21 => 
            array (
                'approved' => 0,
                'comment' => '<p>Nice post</p>',
                'commentable_id' => 1,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => '2020-10-04 19:24:55',
                'id' => 25,
                'updated_at' => '2020-10-04 19:24:55',
                'user_id' => 20,
            ),
            22 => 
            array (
                'approved' => 0,
                'comment' => 'Very nice!',
                'commentable_id' => 19,
                'commentable_type' => 'App\\Models\\Project',
                'created_at' => '2020-10-19 11:07:27',
                'id' => 26,
                'updated_at' => '2020-10-19 11:07:27',
                'user_id' => 1,
            ),
            23 => 
            array (
                'approved' => 0,
                'comment' => 'dffdfds',
                'commentable_id' => 26,
                'commentable_type' => 'App\\Models\\Project',
                'created_at' => '2020-12-22 22:17:13',
                'id' => 27,
                'updated_at' => '2020-12-22 22:17:13',
                'user_id' => 2,
            ),
            24 => 
            array (
                'approved' => 0,
                'comment' => 'sdsasadsad',
                'commentable_id' => 29,
                'commentable_type' => 'App\\Models\\Carving',
                'created_at' => '2020-12-22 22:22:40',
                'id' => 28,
                'updated_at' => '2020-12-22 22:22:40',
                'user_id' => 2,
            ),
            25 => 
            array (
                'approved' => 0,
                'comment' => '<p>sadsd</p>',
                'commentable_id' => 8,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => '2020-12-28 21:18:08',
                'id' => 29,
                'updated_at' => '2020-12-28 21:18:08',
                'user_id' => 2,
            ),
            26 => 
            array (
                'approved' => 0,
                'comment' => '<p>Comment</p>',
                'commentable_id' => 9,
                'commentable_type' => 'App\\Models\\Post',
                'created_at' => '2021-01-19 14:42:02',
                'id' => 30,
                'updated_at' => '2021-01-19 14:42:02',
                'user_id' => 2,
            ),
        ));
        
        
    }
}