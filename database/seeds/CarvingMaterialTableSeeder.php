<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarvingMaterialTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carving_material')->delete();
        
        \DB::table('carving_material')->insert(array (
            0 => 
            array (
                'id' => 19,
                'carving_id' => 51,
                'material_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}