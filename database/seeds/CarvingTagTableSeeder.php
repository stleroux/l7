<?php

// namespace Database\Seeders;

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
                'carving_id' => 49,
                'id' => 9,
                'tag_id' => 11,
            ),
            1 => 
            array (
                'carving_id' => 51,
                'id' => 12,
                'tag_id' => 19,
            ),
            2 => 
            array (
                'carving_id' => 49,
                'id' => 13,
                'tag_id' => 21,
            ),
            3 => 
            array (
                'carving_id' => 50,
                'id' => 14,
                'tag_id' => 20,
            ),
            4 => 
            array (
                'carving_id' => 52,
                'id' => 15,
                'tag_id' => 11,
            ),
            5 => 
            array (
                'carving_id' => 53,
                'id' => 16,
                'tag_id' => 17,
            ),
            6 => 
            array (
                'carving_id' => 54,
                'id' => 17,
                'tag_id' => 11,
            ),
            7 => 
            array (
                'carving_id' => 51,
                'id' => 18,
                'tag_id' => 20,
            ),
            8 => 
            array (
                'carving_id' => 55,
                'id' => 19,
                'tag_id' => 0,
            ),
            9 => 
            array (
                'carving_id' => 56,
                'id' => 20,
                'tag_id' => 0,
            ),
            10 => 
            array (
                'carving_id' => 57,
                'id' => 21,
                'tag_id' => 0,
            ),
            11 => 
            array (
                'carving_id' => 58,
                'id' => 22,
                'tag_id' => 0,
            ),
            12 => 
            array (
                'carving_id' => 59,
                'id' => 23,
                'tag_id' => 17,
            ),
            13 => 
            array (
                'carving_id' => 59,
                'id' => 24,
                'tag_id' => 21,
            ),
            14 => 
            array (
                'carving_id' => 60,
                'id' => 25,
                'tag_id' => 17,
            ),
            15 => 
            array (
                'carving_id' => 60,
                'id' => 26,
                'tag_id' => 20,
            ),
        ));
        
        
    }
}