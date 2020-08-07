<?php

use Illuminate\Database\Seeder;

class ProjectsProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects__projects')->delete();
        
        \DB::table('projects__projects')->insert(array (
            0 => 
            array (
                'category' => 2,
                'completed_at' => NULL,
                'created_at' => '2019-07-22 02:12:18',
                'depth' => NULL,
                'description' => 'Nice hallway table with ceramic tile top',
                'height' => NULL,
                'id' => 11,
                'name' => 'Hallway table',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2019-07-22 02:12:18',
                'views' => 109,
                'weight' => NULL,
                'width' => NULL,
            ),
            1 => 
            array (
                'category' => 2,
                'completed_at' => '2020-07-01 08:55:59',
                'created_at' => '2019-07-22 20:42:54',
                'depth' => 18,
                'description' => 'Storage Bench',
                'height' => 26,
                'id' => 12,
                'name' => 'Storage Bench',
                'price' => 160,
                'time_invested' => 10,
                'updated_at' => '2019-07-22 20:42:54',
                'views' => 94,
                'weight' => 32,
                'width' => 43,
            ),
            2 => 
            array (
                'category' => 5,
                'completed_at' => NULL,
                'created_at' => '2019-07-22 20:43:42',
                'depth' => NULL,
                'description' => 'Small chalkboard',
                'height' => NULL,
                'id' => 13,
                'name' => 'Chalkboard',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2019-07-22 20:43:42',
                'views' => 32,
                'weight' => NULL,
                'width' => NULL,
            ),
            3 => 
            array (
                'category' => 1,
                'completed_at' => NULL,
                'created_at' => '2019-07-22 20:44:44',
                'depth' => NULL,
                'description' => 'Candle box',
                'height' => NULL,
                'id' => 14,
                'name' => 'Candle Box',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2019-07-29 00:40:07',
                'views' => 90,
                'weight' => NULL,
                'width' => NULL,
            ),
            4 => 
            array (
                'category' => 1,
                'completed_at' => NULL,
                'created_at' => '2019-07-22 20:44:59',
                'depth' => NULL,
                'description' => 'Candle Holder',
                'height' => NULL,
                'id' => 15,
                'name' => 'Candle Holder',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2019-07-29 00:40:30',
                'views' => 93,
                'weight' => NULL,
                'width' => NULL,
            ),
            5 => 
            array (
                'category' => 5,
                'completed_at' => NULL,
                'created_at' => '2019-07-26 10:28:32',
                'depth' => NULL,
                'description' => 'Corner Shelf',
                'height' => NULL,
                'id' => 18,
                'name' => 'Corner Shelf',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2019-07-26 10:30:53',
                'views' => 64,
                'weight' => NULL,
                'width' => NULL,
            ),
            6 => 
            array (
                'category' => 5,
                'completed_at' => NULL,
                'created_at' => '2019-07-26 10:28:56',
                'depth' => NULL,
                'description' => 'Antique mirror',
                'height' => NULL,
                'id' => 19,
                'name' => 'Antique mirror',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2019-07-26 10:28:56',
                'views' => 139,
                'weight' => NULL,
                'width' => NULL,
            ),
            7 => 
            array (
                'category' => 5,
                'completed_at' => NULL,
                'created_at' => '2019-07-26 10:29:12',
                'depth' => NULL,
                'description' => 'This elegant wine rack is made with yellow pine and is meant to be hung on a wall to display your collection of wine bottles.',
                'height' => NULL,
                'id' => 20,
                'name' => 'Wine Rack',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2019-07-26 10:29:12',
                'views' => 90,
                'weight' => NULL,
                'width' => NULL,
            ),
            8 => 
            array (
                'category' => 2,
                'completed_at' => NULL,
                'created_at' => '2020-03-04 14:53:21',
                'depth' => NULL,
                'description' => 'A multi level shelving unit built with evenly spaced slats',
                'height' => NULL,
                'id' => 22,
                'name' => 'Slatted Shelving Unit',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2020-03-04 14:53:21',
                'views' => 5,
                'weight' => NULL,
                'width' => NULL,
            ),
            9 => 
            array (
                'category' => 2,
                'completed_at' => NULL,
                'created_at' => '2020-03-04 14:53:40',
                'depth' => NULL,
                'description' => 'Dining room table bench',
                'height' => NULL,
                'id' => 23,
                'name' => 'Dining room table bench',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2020-03-04 14:53:40',
                'views' => 6,
                'weight' => NULL,
                'width' => NULL,
            ),
            10 => 
            array (
                'category' => 2,
                'completed_at' => NULL,
                'created_at' => '2020-03-13 01:38:52',
                'depth' => NULL,
                'description' => 'Simple yet elegant',
                'height' => NULL,
                'id' => 24,
                'name' => 'Night Stand',
                'price' => NULL,
                'time_invested' => 8,
                'updated_at' => '2020-03-13 01:39:54',
                'views' => 4,
                'weight' => 30,
                'width' => NULL,
            ),
            11 => 
            array (
                'category' => 1,
                'completed_at' => NULL,
                'created_at' => '2020-07-07 08:18:00',
                'depth' => NULL,
                'description' => 'Test description',
                'height' => NULL,
                'id' => 25,
                'name' => '_test project',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2020-07-07 08:18:00',
                'views' => 0,
                'weight' => NULL,
                'width' => NULL,
            ),
            12 => 
            array (
                'category' => 1,
                'completed_at' => NULL,
                'created_at' => '2020-07-07 08:18:09',
                'depth' => NULL,
                'description' => 'Test description',
                'height' => NULL,
                'id' => 26,
                'name' => '_test project',
                'price' => NULL,
                'time_invested' => NULL,
                'updated_at' => '2020-07-07 08:18:09',
                'views' => 0,
                'weight' => NULL,
                'width' => NULL,
            ),
            13 => 
            array (
                'category' => 1,
                'completed_at' => NULL,
                'created_at' => '2020-07-07 10:16:18',
                'depth' => 2,
                'description' => 'sdadsd',
                'height' => 3,
                'id' => 27,
                'name' => '111',
                'price' => 5,
                'time_invested' => 6,
                'updated_at' => '2020-07-07 10:16:18',
                'views' => 0,
                'weight' => 4,
                'width' => 1,
            ),
        ));
        
        
    }
}