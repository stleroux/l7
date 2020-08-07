<?php

use Illuminate\Database\Seeder;

class ProjectsMaterialProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects__material_project')->delete();
        
        \DB::table('projects__material_project')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'material_id' => 1,
                'project_id' => 11,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 13,
                'material_id' => 1,
                'project_id' => 24,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'material_id' => 3,
                'project_id' => 24,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'material_id' => 3,
                'project_id' => 12,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}