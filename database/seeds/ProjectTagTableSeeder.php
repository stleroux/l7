<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_tag')->delete();
        
        \DB::table('project_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 19,
                'tag_id' => 17,
            ),
        ));
        
        
    }
}