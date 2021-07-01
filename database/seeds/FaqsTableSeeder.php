<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 29,
                'category' => 'carvings',
                'question' => 'Custom size be ordered for a carve?',
                'answer' => '<p>The short answer is Yes you can order a custom size.</p>
<p>The long answer is also Yes you can order a custom size for the carving.<br />Just keep in mind the price might vary for the posted price based on carve time and material selected.</p>
<p>qwe</p>',
                'created_at' => '2021-01-03 22:35:29',
                'updated_at' => '2021-05-11 21:55:12',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 123,
                'category' => 'projects',
                'question' => 'Can a custom size be ordered for a carve?',
                'answer' => '<p>The short answer is Yes you can order a custom size.</p>
<p>The long answer is also Yes you can order a custom size for the carving.<br />Just keep in mind the price might vary for the posted price based on carve time and material selected.</p>
<p>qwe</p>',
                'created_at' => '2021-01-03 22:35:29',
                'updated_at' => '2021-05-11 21:55:12',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 124,
                'category' => 'recipes',
                'question' => 'Size be ordered for a carve?',
                'answer' => '<p>The short answer is Yes you can order a custom size.</p>
<p>The long answer is also Yes you can order a custom size for the carving.<br />Just keep in mind the price might vary for the posted price based on carve time and material selected.</p>
<p>qwe</p>',
                'created_at' => '2021-01-03 22:35:29',
                'updated_at' => '2021-05-11 21:55:12',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 125,
                'category' => 'carvings',
                'question' => 'Testing versionable 123',
                'answer' => '<p>Does it work?</p>',
                'created_at' => '2021-06-14 05:58:37',
                'updated_at' => '2021-06-14 06:09:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}