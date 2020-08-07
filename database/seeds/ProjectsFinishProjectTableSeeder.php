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
        ));
        
        
    }
}