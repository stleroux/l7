<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarvingTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carving_tag')->delete();
        
        \DB::table('carving_tag')->insert(array (
            0 => 
            array (
                'id' => 9,
                'carving_id' => 49,
                'tag_id' => 11,
            ),
            1 => 
            array (
                'id' => 12,
                'carving_id' => 51,
                'tag_id' => 19,
            ),
            2 => 
            array (
                'id' => 13,
                'carving_id' => 49,
                'tag_id' => 21,
            ),
            3 => 
            array (
                'id' => 14,
                'carving_id' => 50,
                'tag_id' => 20,
            ),
            4 => 
            array (
                'id' => 15,
                'carving_id' => 52,
                'tag_id' => 11,
            ),
            5 => 
            array (
                'id' => 17,
                'carving_id' => 54,
                'tag_id' => 11,
            ),
            6 => 
            array (
                'id' => 18,
                'carving_id' => 51,
                'tag_id' => 20,
            ),
            7 => 
            array (
                'id' => 21,
                'carving_id' => 57,
                'tag_id' => 0,
            ),
            8 => 
            array (
                'id' => 22,
                'carving_id' => 58,
                'tag_id' => 0,
            ),
            9 => 
            array (
                'id' => 23,
                'carving_id' => 59,
                'tag_id' => 17,
            ),
            10 => 
            array (
                'id' => 24,
                'carving_id' => 59,
                'tag_id' => 21,
            ),
            11 => 
            array (
                'id' => 25,
                'carving_id' => 60,
                'tag_id' => 17,
            ),
            12 => 
            array (
                'id' => 26,
                'carving_id' => 60,
                'tag_id' => 20,
            ),
            13 => 
            array (
                'id' => 27,
                'carving_id' => 56,
                'tag_id' => 17,
            ),
        ));
        
        
    }
}