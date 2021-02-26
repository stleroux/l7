<?php

// namespace Database\Seeders;

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
                'answer' => '<p>The short answer is Yes you can order a custom size.</p>
<p>The long answer is also Yes you can order a custom size for the carving.<br />Just keep in mind the price might vary for the posted price based on carve time and material selected.</p>',
                'category' => 'carvings',
                'created_at' => '2021-01-03 22:35:29',
                'deleted_at' => NULL,
                'id' => 1,
                'question' => 'Can a custom size be ordered for a carve?',
                'updated_at' => '2021-01-04 11:53:14',
            ),
            1 => 
            array (
                'answer' => 'Yes we can do that also',
                'category' => 'carvings',
                'created_at' => '2021-01-03 22:35:29',
                'deleted_at' => NULL,
                'id' => 2,
                'question' => 'Can you also do this?',
                'updated_at' => '2021-01-24 22:14:01',
            ),
            2 => 
            array (
                'answer' => 'Answer to question number 3',
                'category' => 'carvings',
                'created_at' => '2021-01-04 03:13:40',
                'deleted_at' => NULL,
                'id' => 3,
                'question' => 'Question #3',
                'updated_at' => '2021-01-24 22:14:01',
            ),
            3 => 
            array (
                'answer' => 'Question 1 in Cat 2 Question 1 in Cat 2 Question 1 in Cat 2 Question 1 in Cat 2 Question 1 in Cat 2 Question 1 in Cat 2 Question 1 in Cat 2 Question 1 in Cat 2 Question 1 in Cat 2',
                'category' => 'carvings',
                'created_at' => '2021-01-04 11:47:16',
                'deleted_at' => NULL,
                'id' => 4,
                'question' => 'Question 1 in Cat 2',
                'updated_at' => '2021-01-24 22:14:01',
            ),
            4 => 
            array (
                'answer' => '<p>cvcxvcxv cvxxcv</p>',
                'category' => 'projects',
                'created_at' => '2021-01-24 21:04:29',
                'deleted_at' => NULL,
                'id' => 5,
                'question' => 'cxvcvcxvcvx',
                'updated_at' => '2021-01-24 21:04:29',
            ),
        ));
        
        
    }
}