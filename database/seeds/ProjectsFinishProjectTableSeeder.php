<?php

use Illuminate\Database\Seeder;

class ProjectsFinishProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects__finish_project')->delete();
        
        \DB::table('projects__finish_project')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 14,
                'finish_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'project_id' => 24,
                'finish_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'project_id' => 24,
                'finish_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'project_id' => 12,
                'finish_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}