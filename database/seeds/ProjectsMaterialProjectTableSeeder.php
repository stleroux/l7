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
                'id' => 11,
                'project_id' => 11,
                'material_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 13,
                'project_id' => 24,
                'material_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 14,
                'project_id' => 24,
                'material_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 15,
                'project_id' => 12,
                'material_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}