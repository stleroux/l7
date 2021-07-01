<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ViewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('views')->delete();
        
        \DB::table('views')->insert(array (
            0 => 
            array (
                'id' => 8,
                'viewable_type' => 'App\\Models\\Project',
                'viewable_id' => 19,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 14:45:36',
            ),
            1 => 
            array (
                'id' => 9,
                'viewable_type' => 'App\\Models\\Recipe',
                'viewable_id' => 2,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 14:46:03',
            ),
            2 => 
            array (
                'id' => 10,
                'viewable_type' => 'App\\Models\\Post',
                'viewable_id' => 15,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 14:57:20',
            ),
            3 => 
            array (
                'id' => 11,
                'viewable_type' => 'App\\Models\\Feature',
                'viewable_id' => 5,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 15:00:58',
            ),
            4 => 
            array (
                'id' => 12,
                'viewable_type' => 'App\\Models\\Carving',
                'viewable_id' => 57,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 15:08:10',
            ),
            5 => 
            array (
                'id' => 13,
                'viewable_type' => 'App\\Models\\Carving',
                'viewable_id' => 60,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 15:08:27',
            ),
            6 => 
            array (
                'id' => 14,
                'viewable_type' => 'App\\Models\\Carving',
                'viewable_id' => 56,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 15:09:02',
            ),
            7 => 
            array (
                'id' => 15,
                'viewable_type' => 'App\\Models\\Bug',
                'viewable_id' => 63,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 15:10:12',
            ),
            8 => 
            array (
                'id' => 16,
                'viewable_type' => 'App\\Models\\Recipe',
                'viewable_id' => 10,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 15:18:38',
            ),
            9 => 
            array (
                'id' => 17,
                'viewable_type' => 'App\\Models\\Project',
                'viewable_id' => 13,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-22 15:20:59',
            ),
            10 => 
            array (
                'id' => 18,
                'viewable_type' => 'App\\Models\\Recipe',
                'viewable_id' => 4,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-24 10:54:10',
            ),
            11 => 
            array (
                'id' => 19,
                'viewable_type' => 'App\\Models\\Carving',
                'viewable_id' => 58,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-24 11:38:32',
            ),
            12 => 
            array (
                'id' => 20,
                'viewable_type' => 'App\\Models\\Carving',
                'viewable_id' => 57,
                'visitor' => 'efsEq7sROWcFLmtXrxi8HA8vHQRSgq1xrAHpgJPgotJgqOriVR7df59NDjzegSEdegPgUOVC5Vdagvme',
                'collection' => NULL,
                'viewed_at' => '2021-06-28 22:15:37',
            ),
        ));
        
        
    }
}