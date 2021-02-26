<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => '2020-09-22 14:39:20',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 1,
                'name' => 'recipes',
                'parent_id' => 0,
                'updated_at' => '2020-09-22 14:39:20',
                'value' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2019-02-23 12:40:52',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 2,
                'name' => 'entrees',
                'parent_id' => 1,
                'updated_at' => '2019-03-03 12:54:51',
                'value' => NULL,
            ),
            2 => 
            array (
                'created_at' => '2019-02-23 12:41:38',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 3,
                'name' => 'desserts',
                'parent_id' => 1,
                'updated_at' => '2019-02-23 12:41:38',
                'value' => NULL,
            ),
            3 => 
            array (
                'created_at' => '2019-02-23 12:42:42',
                'deleted_at' => NULL,
                'description' => '',
                'id' => 4,
                'name' => 'drinks',
                'parent_id' => 1,
                'updated_at' => '2019-02-23 12:42:42',
                'value' => NULL,
            ),
            4 => 
            array (
                'created_at' => '2019-02-24 04:19:01',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 5,
                'name' => 'beef',
                'parent_id' => 2,
                'updated_at' => '2019-02-24 04:19:01',
                'value' => NULL,
            ),
            5 => 
            array (
                'created_at' => '2019-02-27 13:51:56',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 6,
                'name' => 'pork',
                'parent_id' => 2,
                'updated_at' => '2019-02-27 13:51:56',
                'value' => NULL,
            ),
            6 => 
            array (
                'created_at' => '2019-02-27 13:52:07',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 7,
                'name' => 'chicken',
                'parent_id' => 2,
                'updated_at' => '2019-02-27 13:52:07',
                'value' => NULL,
            ),
            7 => 
            array (
                'created_at' => '2019-02-27 14:01:35',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 8,
                'name' => 'cakes',
                'parent_id' => 3,
                'updated_at' => '2019-02-27 14:01:35',
                'value' => NULL,
            ),
            8 => 
            array (
                'created_at' => '2019-02-27 14:01:45',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 9,
                'name' => 'cookies',
                'parent_id' => 3,
                'updated_at' => '2019-02-27 14:01:45',
                'value' => NULL,
            ),
            9 => 
            array (
                'created_at' => '2019-02-27 14:01:55',
                'deleted_at' => NULL,
                'description' => '',
                'id' => 10,
                'name' => 'pies',
                'parent_id' => 3,
                'updated_at' => '2019-02-27 14:01:55',
                'value' => NULL,
            ),
            10 => 
            array (
                'created_at' => '2019-03-01 12:48:19',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 11,
                'name' => 'articles',
                'parent_id' => 0,
                'updated_at' => '2019-03-01 12:48:19',
                'value' => NULL,
            ),
            11 => 
            array (
                'created_at' => '2019-03-01 12:48:31',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 12,
                'name' => 'projects',
                'parent_id' => 0,
                'updated_at' => '2019-03-01 12:48:31',
                'value' => NULL,
            ),
            12 => 
            array (
                'created_at' => '2019-03-01 20:39:38',
                'deleted_at' => NULL,
                'description' => '',
                'id' => 13,
                'name' => 'site',
                'parent_id' => 11,
                'updated_at' => '2019-03-01 20:39:38',
                'value' => NULL,
            ),
            13 => 
            array (
                'created_at' => '2019-03-01 20:39:59',
                'deleted_at' => NULL,
                'description' => '',
                'id' => 14,
                'name' => 'wood type',
                'parent_id' => 0,
                'updated_at' => '2019-03-01 20:39:59',
                'value' => NULL,
            ),
            14 => 
            array (
                'created_at' => '2019-03-02 12:54:15',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 15,
                'name' => 'wood specie',
                'parent_id' => 0,
                'updated_at' => '2019-03-02 12:54:15',
                'value' => NULL,
            ),
            15 => 
            array (
                'created_at' => '2019-03-02 12:54:31',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 16,
                'name' => 'stain type',
                'parent_id' => 0,
                'updated_at' => '2019-03-02 12:54:31',
                'value' => NULL,
            ),
            16 => 
            array (
                'created_at' => '2019-03-02 12:55:39',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 17,
                'name' => 'stain color',
                'parent_id' => 0,
                'updated_at' => '2019-03-02 12:55:39',
                'value' => NULL,
            ),
            17 => 
            array (
                'created_at' => '2019-03-02 12:55:39',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 18,
                'name' => 'stain sheen',
                'parent_id' => 0,
                'updated_at' => '2019-03-02 12:55:39',
                'value' => NULL,
            ),
            18 => 
            array (
                'created_at' => '2019-03-02 12:55:39',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 19,
                'name' => 'finish type',
                'parent_id' => 0,
                'updated_at' => '2019-03-02 12:55:39',
                'value' => NULL,
            ),
            19 => 
            array (
                'created_at' => '2019-03-02 12:55:24',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 20,
                'name' => 'finish sheen',
                'parent_id' => 0,
                'updated_at' => '2019-03-02 12:55:24',
                'value' => NULL,
            ),
            20 => 
            array (
                'created_at' => '2019-03-03 16:12:11',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 32,
                'name' => 'hotDrinks',
                'parent_id' => 4,
                'updated_at' => '2019-03-04 02:59:12',
                'value' => NULL,
            ),
            21 => 
            array (
                'created_at' => '2019-03-03 21:54:15',
                'deleted_at' => NULL,
                'description' => 'N/A',
                'id' => 33,
                'name' => 'salads',
                'parent_id' => 1,
                'updated_at' => '2019-03-03 21:54:15',
                'value' => NULL,
            ),
            22 => 
            array (
                'created_at' => '2019-03-03 21:55:33',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 34,
                'name' => 'Pasta',
                'parent_id' => 33,
                'updated_at' => '2019-03-03 21:55:33',
                'value' => NULL,
            ),
            23 => 
            array (
                'created_at' => '2019-03-03 21:58:35',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 35,
                'name' => 'garden',
                'parent_id' => 33,
                'updated_at' => '2019-03-03 21:58:35',
                'value' => NULL,
            ),
            24 => 
            array (
                'created_at' => '2019-03-03 22:03:08',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 36,
                'name' => 'fruitDishes',
                'parent_id' => 3,
                'updated_at' => '2019-03-03 22:03:08',
                'value' => NULL,
            ),
            25 => 
            array (
                'created_at' => '2019-03-04 02:52:50',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 38,
                'name' => 'Soups',
                'parent_id' => 1,
                'updated_at' => '2019-03-04 02:52:50',
                'value' => NULL,
            ),
            26 => 
            array (
                'created_at' => '2019-03-04 02:57:02',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 39,
                'name' => 'hotSoups',
                'parent_id' => 38,
                'updated_at' => '2019-03-04 02:57:02',
                'value' => NULL,
            ),
            27 => 
            array (
                'created_at' => '2019-03-25 17:51:52',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 40,
                'name' => 'Alcoholic',
                'parent_id' => 4,
                'updated_at' => '2019-09-20 12:15:48',
                'value' => NULL,
            ),
            28 => 
            array (
                'created_at' => '2019-03-25 17:54:03',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 41,
                'name' => 'coldDrinks',
                'parent_id' => 4,
                'updated_at' => '2019-03-25 17:54:03',
                'value' => NULL,
            ),
            29 => 
            array (
                'created_at' => '2019-04-08 15:26:28',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 59,
                'name' => 'posts',
                'parent_id' => 0,
                'updated_at' => '2019-04-08 15:26:28',
                'value' => NULL,
            ),
            30 => 
            array (
                'created_at' => '2019-04-08 15:26:58',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 60,
                'name' => 'site',
                'parent_id' => 59,
                'updated_at' => '2019-04-08 15:28:16',
                'value' => NULL,
            ),
            31 => 
            array (
                'created_at' => '2019-04-08 15:49:39',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 62,
                'name' => 'general',
                'parent_id' => 60,
                'updated_at' => '2019-04-08 15:49:39',
                'value' => NULL,
            ),
            32 => 
            array (
                'created_at' => '2019-04-08 16:40:10',
                'deleted_at' => '2021-01-24 12:01:46',
                'description' => NULL,
                'id' => 65,
                'name' => 'qwerty',
                'parent_id' => 13,
                'updated_at' => '2021-01-24 12:01:46',
                'value' => NULL,
            ),
            33 => 
            array (
                'created_at' => '2019-06-24 12:37:48',
                'deleted_at' => NULL,
                'description' => 'Project types',
                'id' => 67,
                'name' => 'Type',
                'parent_id' => 12,
                'updated_at' => '2019-06-24 12:37:48',
                'value' => NULL,
            ),
            34 => 
            array (
                'created_at' => '2019-06-24 15:40:48',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 68,
                'name' => 'general',
                'parent_id' => 67,
                'updated_at' => '2019-06-24 15:40:48',
                'value' => NULL,
            ),
            35 => 
            array (
                'created_at' => '2019-06-24 15:44:08',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 69,
                'name' => 'furniture',
                'parent_id' => 67,
                'updated_at' => '2019-06-24 15:44:08',
                'value' => NULL,
            ),
            36 => 
            array (
                'created_at' => '2020-06-15 19:04:55',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 70,
                'name' => 'Breakfast',
                'parent_id' => 1,
                'updated_at' => '2020-06-15 19:04:55',
                'value' => NULL,
            ),
            37 => 
            array (
                'created_at' => '2020-06-15 19:08:40',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 71,
                'name' => 'Breakfast Sides',
                'parent_id' => 70,
                'updated_at' => '2020-06-15 19:08:40',
                'value' => NULL,
            ),
            38 => 
            array (
                'created_at' => '2020-06-15 19:25:09',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 72,
                'name' => 'Sauces',
                'parent_id' => 1,
                'updated_at' => '2020-06-15 19:25:09',
                'value' => NULL,
            ),
            39 => 
            array (
                'created_at' => '2020-06-15 19:25:57',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 73,
                'name' => 'Snack Sauces',
                'parent_id' => 72,
                'updated_at' => '2020-06-15 19:25:57',
                'value' => NULL,
            ),
            40 => 
            array (
                'created_at' => '2020-10-16 22:30:12',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 74,
                'name' => 'pastaDishes',
                'parent_id' => 2,
                'updated_at' => '2020-10-16 22:30:12',
                'value' => NULL,
            ),
            41 => 
            array (
                'created_at' => '2020-10-16 22:33:36',
                'deleted_at' => NULL,
                'description' => NULL,
                'id' => 75,
                'name' => 'casseroles',
                'parent_id' => 2,
                'updated_at' => '2020-10-16 22:33:36',
                'value' => NULL,
            ),
            42 => 
            array (
                'created_at' => '2021-01-24 12:01:30',
                'deleted_at' => '2021-01-24 12:01:46',
                'description' => NULL,
                'id' => 76,
                'name' => 'qwerty',
                'parent_id' => 67,
                'updated_at' => '2021-01-24 12:01:46',
                'value' => NULL,
            ),
        ));
        
        
    }
}