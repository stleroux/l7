<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinishProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('finish_project')->delete();
        
        \DB::table('finish_project')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'finish_id' => 1,
                'id' => 1,
                'project_id' => 14,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'finish_id' => 4,
                'id' => 3,
                'project_id' => 24,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'finish_id' => 1,
                'id' => 4,
                'project_id' => 24,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'finish_id' => 1,
                'id' => 5,
                'project_id' => 12,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'finish_id' => 1,
                'id' => 6,
                'project_id' => 19,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'finish_id' => 6,
                'id' => 10,
                'project_id' => 19,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}