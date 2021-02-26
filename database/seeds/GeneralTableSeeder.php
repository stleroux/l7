<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('general')->delete();
        
        \DB::table('general')->insert(array (
            0 => 
            array (
                'body' => '<p>Welcome to the newly redesigned TheWoodBarn.ca site.</p>
<p>Note that the site now features a left hand side menu that will update based on your access privileges to the different sections of the site that you are currently visiting.</p>
<p>Also, please note that the site is currently optimized for mobile and desktop browsing. We are working hard to fix the issues with the looks and feels of the different screen sizes.</p>',
                'created_at' => '2021-01-20 14:46:12',
                'id' => 1,
                'name' => 'greeting',
                'title' => 'Welcome to the website',
                'updated_at' => '2021-01-20 14:46:12',
            ),
            1 => 
            array (
                'body' => '<p>Welcome to the site new user.</p>
<p>We hope you will enjoy your stay with us.</p>
<p>Feel free to browse around.</p>',
                'created_at' => '2021-01-20 15:33:53',
                'id' => 2,
                'name' => 'newUser',
                'title' => 'New User',
                'updated_at' => '2021-01-20 15:33:53',
            ),
            2 => 
            array (
                'body' => '<p>Check out the latest additions to the site.</p>
<p>These are carved locally in our shop.</p>
<p>If you would like to order one or multiple item(s), please <a href="../contact">contact us</a> using the contact us form</p>',
                'created_at' => '2021-01-20 15:37:42',
                'id' => 3,
                'name' => 'carvings',
                'title' => 'Carvings',
                'updated_at' => '2021-01-20 15:37:42',
            ),
            3 => 
            array (
                'body' => '<p>Check out this area to feast your eyes on the woodworking projects we have worked on in our shop.</p>
<p>There will be before and after pictures of the materials being used to create the different items as well as some info on the materials used in the finishing process and other relevant details.</p>',
                'created_at' => '2021-01-20 15:38:16',
                'id' => 4,
                'name' => 'projects',
                'title' => 'Wood Projects',
                'updated_at' => '2021-01-20 15:38:16',
            ),
            4 => 
            array (
                'body' => '<p>The title says it all. Access this section to see recipes contributed by our members.</p>',
                'created_at' => '2021-01-20 15:38:43',
                'id' => 5,
                'name' => 'recipes',
                'title' => 'Recipes',
                'updated_at' => '2021-01-20 15:38:43',
            ),
            5 => 
            array (
                'body' => '<p>Here you will find the latest news of the site. Keep an eye on this section to find out what is happening with the site.</p>',
                'created_at' => '2021-01-20 15:39:10',
                'id' => 6,
                'name' => 'blog',
                'title' => 'The Blog',
                'updated_at' => '2021-01-20 15:39:10',
            ),
        ));
        
        
    }
}