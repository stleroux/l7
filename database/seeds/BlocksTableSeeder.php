<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blocks')->delete();
        
        \DB::table('blocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page' => 1,
                'name' => 'greeting',
                'title' => 'Welcome to the website',
                'body' => '<p>Welcome to the newly redesigned TheWoodBarn.ca site.</p>
<p>Note that the site now features a left hand side menu that will update based on your access privileges to the different sections of the site that you are currently visiting.</p>
<p>Also, please note that the site is currently optimized for mobile and desktop browsing. We are working hard to fix the issues with the looks and feels of the different screen sizes.</p>',
                'created_at' => '2021-01-20 14:46:12',
                'updated_at' => '2021-06-17 20:18:01',
            ),
            1 => 
            array (
                'id' => 2,
                'page' => 1,
                'name' => 'newUser',
                'title' => 'New User',
                'body' => '<p>Welcome to the site new user.</p>
<p>We hope you will enjoy your stay with us.</p>
<p>Feel free to browse around.</p>',
                'created_at' => '2021-01-20 15:33:53',
                'updated_at' => '2021-01-20 15:33:53',
            ),
            2 => 
            array (
                'id' => 3,
                'page' => 1,
                'name' => 'carvings',
                'title' => 'Carvings',
                'body' => '<p>Check out the latest additions to the site.</p>
<p>More items will be added as we get more familiar with our new machine.</p>
<p>These are carved locally in our shop.</p>
<p>If you would like to order one or multiple item(s), please <a href="../contact">contact us</a> using the contact us form or check out the <a href="../carvings/faq">Frequently Asked Question (FAQ)</a> section.</p>',
                'created_at' => '2021-01-20 15:37:42',
                'updated_at' => '2021-01-20 15:37:42',
            ),
            3 => 
            array (
                'id' => 4,
                'page' => 1,
                'name' => 'projects',
                'title' => 'Wood Projects',
                'body' => '<p>Check out this area to feast your eyes on the woodworking projects we have worked on in our shop.</p>
<p>There will be before and after pictures of the materials being used to create the different items as well as some info on the materials used in the finishing process and other relevant details.</p>',
                'created_at' => '2021-01-20 15:38:16',
                'updated_at' => '2021-01-20 15:38:16',
            ),
            4 => 
            array (
                'id' => 5,
                'page' => 1,
                'name' => 'recipes',
                'title' => 'Recipes',
                'body' => '<p>The title says it all. Access this section to see recipes contributed by our members.</p>',
                'created_at' => '2021-01-20 15:38:43',
                'updated_at' => '2021-01-20 15:38:43',
            ),
            5 => 
            array (
                'id' => 6,
                'page' => 1,
                'name' => 'blog',
                'title' => 'The Blog',
                'body' => '<p>Here you will find the latest news of the site. Keep an eye on this section to find out what is happening with the site.</p>',
                'created_at' => '2021-01-20 15:39:10',
                'updated_at' => '2021-01-20 15:39:10',
            ),
            6 => 
            array (
                'id' => 7,
                'page' => 2,
                'name' => 'aboutUs',
                'title' => 'About Us',
                'body' => '<p>Something about us</p>',
                'created_at' => '2021-06-17 20:43:02',
                'updated_at' => '2021-06-17 20:43:02',
            ),
            7 => 
            array (
                'id' => 8,
                'page' => 2,
                'name' => 'stephane',
                'title' => 'About Stephane',
                'body' => '<p>About Stephane</p>',
                'created_at' => '2021-06-17 20:52:18',
                'updated_at' => '2021-06-17 20:52:18',
            ),
            8 => 
            array (
                'id' => 9,
                'page' => 2,
                'name' => 'stacie',
                'title' => 'About Stacie',
                'body' => '<p>About Stacie</p>',
                'created_at' => '2021-06-17 20:52:36',
                'updated_at' => '2021-06-17 20:52:36',
            ),
        ));
        
        
    }
}