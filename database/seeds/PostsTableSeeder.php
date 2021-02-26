<?php

// namespace Database\Seeders;

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
                'body' => '<p>dsadsadsadsadsdsa</p>',
                'category_id' => 62,
                'created_at' => '2021-01-25 10:29:07',
                'deleted_at' => NULL,
                'id' => 13,
                'image' => NULL,
                'modified_by_id' => 2,
                'private_notes' => NULL,
                'public_notes' => NULL,
                'published_at' => NULL,
                'slug' => 'qwerty',
                'source' => NULL,
                'title' => 'qwerty',
                'updated_at' => '2021-01-27 21:58:55',
                'user_id' => 2,
                'views' => 0,
            ),
            1 => 
            array (
                'body' => '<p>gffgfd f fd gfgdgfd</p>',
                'category_id' => 62,
                'created_at' => '2021-01-25 10:46:45',
                'deleted_at' => NULL,
                'id' => 14,
                'image' => NULL,
                'modified_by_id' => 2,
                'private_notes' => NULL,
                'public_notes' => NULL,
                'published_at' => '2021-01-25 14:00:44',
                'slug' => 'wwqeqwewqewq',
                'source' => NULL,
                'title' => 'wwqeqwewqewq',
                'updated_at' => '2021-01-25 14:00:44',
                'user_id' => 2,
                'views' => 0,
            ),
        ));
        
        
    }
}