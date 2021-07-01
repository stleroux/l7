<?php

namespace Database\Seeders;

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
                'id' => 10,
                'carving_id' => 51,
                'finish_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 11,
                'carving_id' => 53,
                'finish_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}