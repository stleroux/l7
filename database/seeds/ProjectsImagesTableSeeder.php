<?php

use Illuminate\Database\Seeder;

class ProjectsImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects__images')->delete();
        
        \DB::table('projects__images')->insert(array (
            0 => 
            array (
                'created_at' => '2019-07-22 20:42:14',
                'description' => 'Hallway table',
                'id' => 41,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1563828133.jpg',
                'path' => '',
                'project_id' => 11,
                'size' => 0,
                'updated_at' => '2019-07-22 20:42:14',
            ),
            1 => 
            array (
                'created_at' => '2019-07-22 20:43:09',
                'description' => 'Bench',
                'id' => 42,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1563828189.jpg',
                'path' => '',
                'project_id' => 12,
                'size' => 0,
                'updated_at' => '2019-07-22 20:43:09',
            ),
            2 => 
            array (
                'created_at' => '2019-07-22 20:43:58',
                'description' => 'Small chalkboard',
                'id' => 43,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1563828237.jpg',
                'path' => '',
                'project_id' => 13,
                'size' => 0,
                'updated_at' => '2019-07-22 20:43:58',
            ),
            3 => 
            array (
                'created_at' => '2019-07-22 20:45:15',
                'description' => 'Candle box',
                'id' => 44,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1563828315.jpg',
                'path' => '',
                'project_id' => 14,
                'size' => 0,
                'updated_at' => '2019-07-22 20:45:15',
            ),
            4 => 
            array (
                'created_at' => '2019-07-22 20:45:33',
                'description' => 'Candle Holder 1',
                'id' => 45,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1563828333.jpg',
                'path' => '',
                'project_id' => 15,
                'size' => 0,
                'updated_at' => '2019-07-22 20:45:33',
            ),
            5 => 
            array (
                'created_at' => '2019-07-26 10:29:40',
                'description' => 'Antique mirror',
                'id' => 47,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1564136980.jpg',
                'path' => '',
                'project_id' => 19,
                'size' => 0,
                'updated_at' => '2019-07-26 10:29:40',
            ),
            6 => 
            array (
                'created_at' => '2019-07-26 10:30:45',
                'description' => 'Corner Shelf',
                'id' => 49,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1564137045.jpg',
                'path' => '',
                'project_id' => 18,
                'size' => 0,
                'updated_at' => '2019-07-26 10:30:45',
            ),
            7 => 
            array (
                'created_at' => '2019-07-26 10:31:09',
                'description' => 'Wine Rack',
                'id' => 50,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1564137068.jpg',
                'path' => '',
                'project_id' => 20,
                'size' => 0,
                'updated_at' => '2019-07-26 10:31:09',
            ),
            8 => 
            array (
                'created_at' => '2019-07-29 00:39:45',
                'description' => 'Picture #2',
                'id' => 51,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1564360784.jpg',
                'path' => '',
                'project_id' => 14,
                'size' => 0,
                'updated_at' => '2019-07-29 00:39:45',
            ),
            9 => 
            array (
                'created_at' => '2019-07-29 00:40:48',
                'description' => 'Picture #2',
                'id' => 52,
                'main_image' => 0,
                'mine_type' => '',
                'name' => '1564360848.jpg',
                'path' => '',
                'project_id' => 15,
                'size' => 0,
                'updated_at' => '2019-07-29 00:40:48',
            ),
        ));
        
        
    }
}