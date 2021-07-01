<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShoppingcartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shoppingcart')->delete();
        
        \DB::table('shoppingcart')->insert(array (
            0 => 
            array (
                'identifier' => 'lerouxs',
                'instance' => 'default',
                'content' => 'O:29:"Illuminate\\Support\\Collection":1:{s:8:"' . "\0" . '*' . "\0" . 'items";a:1:{s:32:"02ddbc347d785f5c47bcbe8192ea30c3";O:32:"Gloudemans\\Shoppingcart\\CartItem":10:{s:5:"rowId";s:32:"02ddbc347d785f5c47bcbe8192ea30c3";s:2:"id";i:55;s:3:"qty";s:1:"1";s:4:"name";s:6:"123456";s:5:"price";d:50;s:6:"weight";d:0;s:7:"options";O:39:"Gloudemans\\Shoppingcart\\CartItemOptions":1:{s:8:"' . "\0" . '*' . "\0" . 'items";a:0:{}}s:7:"taxRate";i:21;s:49:"' . "\0" . 'Gloudemans\\Shoppingcart\\CartItem' . "\0" . 'associatedModel";s:18:"App\\Models\\Carving";s:46:"' . "\0" . 'Gloudemans\\Shoppingcart\\CartItem' . "\0" . 'discountRate";i:0;}}}',
                'created_at' => '2021-06-30 21:01:31',
                'updated_at' => '2021-06-30 21:01:31',
            ),
        ));
        
        
    }
}