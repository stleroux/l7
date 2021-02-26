<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarvingFinishTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carving_finish')->delete();
        
        \DB::table('carving_finish')->insert(array (
            0 => 
            array (
                'carving_id' => 51,
                'created_at' => NULL,
                'finish_id' => 1,
                'id' => 10,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'carving_id' => 53,
                'created_at' => NULL,
                'finish_id' => 2,
                'id' => 11,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}