<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 13,
                'user_id' => 2,
                'category_id' => 62,
                'title' => 'qwerty',
                'slug' => 'qwerty',
                'body' => '<p>dsadsadsadsadsdsa</p>',
                'public_notes' => NULL,
                'private_notes' => NULL,
                'image' => NULL,
                'views' => 0,
                'source' => NULL,
                'created_at' => '2021-01-25 10:29:07',
                'updated_at' => '2021-02-18 06:57:47',
                'published_at' => NULL,
                'modified_by_id' => 2,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 14,
                'user_id' => 2,
                'category_id' => 62,
                'title' => 'wwqeqwewqewq',
                'slug' => 'wwqeqwewqewq',
                'body' => '<p>qwerty</p>',
                'public_notes' => NULL,
                'private_notes' => NULL,
                'image' => NULL,
                'views' => 0,
                'source' => NULL,
                'created_at' => '2021-01-25 10:46:45',
                'updated_at' => '2021-02-18 07:10:21',
                'published_at' => NULL,
                'modified_by_id' => 2,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'category_id' => 62,
                'title' => 'qwerty one',
                'slug' => 'cvcxvcxvv',
                'body' => '<p>dsf dfds fd dfsdsd f</p>',
                'public_notes' => NULL,
                'private_notes' => NULL,
                'image' => '1623287283.PNG',
                'views' => 28,
                'source' => NULL,
                'created_at' => '2021-02-18 07:07:26',
                'updated_at' => '2021-06-09 21:14:27',
                'published_at' => '2021-02-18 07:10:13',
                'modified_by_id' => 2,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}