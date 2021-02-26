<?php

// namespace Database\Seeders;

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
                'carving_id' => 51,
                'created_at' => NULL,
                'id' => 19,
                'material_id' => 3,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}