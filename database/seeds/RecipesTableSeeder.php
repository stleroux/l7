<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipes')->delete();
        
        \DB::table('recipes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Oatmeal Buds',
                'ingredients' => '<p>2 cups of sugar</p>
<p>dash of salt</p>
<p>3 tablespoons of cocoa</p>
<p>1 teaspoon of vanilla</p>
<p>1/2 cup of butter or margarine</p>
<p>1/2 cup of peanut butter</p>
<p>1/2 cup of milk</p>
<p>3 cups of oatmeal (quick cooking oats)</p>',
                'methodology' => '<p>Place sugar, cocoa, butter, milk and salt in a pot. Bring to a full boil and boil for 1 minute.</p>
<p>Remove from heat and stir in vanilla, peanut butter and oatmeal. Mix well.</p>
<p>Drop from a teaspoon onto wax paper and let stand for about 30 minutes to dry.</p>',
                'image' => '1.jpg',
                'category_id' => 9,
                'servings' => 0,
                'prep_time' => 20,
                'cook_time' => 20,
                'personal' => 0,
                'views' => 79,
                'source' => 'Recipe Box',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 2,
                'modified_by_id' => 3,
                'last_viewed_by_id' => 3,
                'last_viewed_on' => '2019-09-17 09:13:44',
                'published_at' => '2019-11-16 07:26:50',
                'deleted_at' => NULL,
                'created_at' => '2019-05-15 16:11:12',
                'updated_at' => '2019-11-16 12:26:50',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Bouchees Aux Cacahuettes',
                'ingredients' => '<p>1/2 cup of brown sugar - well packed</p>
<p>1/2 cup of peanut butter</p>
<p>1/2 cup of corn syrup</p>
<p>1 cup of peanuts (non salted)</p>
<p>4 cups of Corn Flakes</p>
<p>2 cups semi sweet chocolate chips</p>',
                'methodology' => '<p>Mix brown sugar, peanut butter and corn syrup in a pan</p>
<p>Cook on low heat until it starts to boil, mixing constantly</p>
<p>Remove form heat and add peanuts and Corn Flakes</p>
<p>Butter a 9 x 11 pan and spread mix evenly</p>
<p>Let cool and then melt chocolate chips and spread on top</p>',
                'image' => '2.jpg',
                'category_id' => 9,
                'servings' => 0,
                'prep_time' => 30,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 361,
                'source' => NULL,
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2019-05-06 09:39:44',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 12:03:32',
                'updated_at' => '2019-05-28 17:12:32',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Banana Loaf',
                'ingredients' => '<p>1 1/2 cups of sugar</p>
<p>1/2 cup of butter</p>
<p>2 eggs</p>
<p>1 teaspoon of vanilla</p>
<p>4 tablespoons of milk</p>
<p>1 tablespoon of water</p>
<p>1 teaspoon of baking soda</p>
<p>1 teaspoon of baking powder</p>
<p>1 1/2 cups of flour</p>
<p>2-2 1/2 bananas</p>',
                'methodology' => '<p>Mash bananas up completely and mix in all other ingredients.</p>
<p>Pour into a loaf pan (greased) and bake at 350 degrees for 50 minutes.</p>',
                'image' => '4.jpg',
                'category_id' => 5,
                'servings' => 0,
                'prep_time' => 20,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 116,
                'source' => 'Recipe Box',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 3,
                'modified_by_id' => 3,
                'last_viewed_by_id' => 3,
                'last_viewed_on' => '2020-07-07 22:35:32',
                'published_at' => '2020-07-07 22:40:21',
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 12:03:32',
                'updated_at' => '2020-07-08 02:40:21',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Pancakes',
                'ingredients' => '<p>1 1/2 cups of flour</p>
<p>3 teaspoons of baking powder</p>
<p>1/2 teaspoon of salt</p>
<p>2 eggs</p>
<p>1 cup of milk</p>
<p>4 tablespoons of melted butter</p>',
                'methodology' => '<p>Mix flour, baking powder and salt together in large bowl. In a smaller bowl mix eggs and milk together and add to large bowl mixture. Beat well, cool and add melted butter.</p>',
                'image' => '5.jpg',
                'category_id' => 10,
                'servings' => 6,
                'prep_time' => 20,
                'cook_time' => 0,
                'personal' => 1,
                'views' => 53,
                'source' => 'Recipe Box',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 3,
                'modified_by_id' => 3,
                'last_viewed_by_id' => 3,
                'last_viewed_on' => '2019-09-13 19:34:32',
                'published_at' => '2019-09-16 07:26:17',
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 12:03:32',
                'updated_at' => '2019-09-16 11:26:17',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Shortbread Cookies',
                'ingredients' => '<p>1 pound of butter</p>
<p>1 cup of fruit sugar</p>
<p>4 cups of flour</p>
<p>2 tablespoons of corn starch</p>
<p>1/2 teaspoon of vanilla</p>',
                'methodology' => '<p>Mix butter, sugar, corn starch and vanilla together. Once well blended mix in all flour. Roll dough until it\'\'s about 1/4" thick and shape cookies as desired.</p>
<p>Preheat oven at 300 degrees and bake for approximately 16 minutes or until they are starting to brown.</p>',
                'image' => '6.jpg',
                'category_id' => 9,
                'servings' => 0,
                'prep_time' => 30,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 49,
                'source' => 'Recipe Box',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 3,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2018-02-13 11:02:05',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:17:37',
                'updated_at' => '2019-02-17 12:18:04',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Spinach Dip',
            'ingredients' => '<p>1 package of frozen spinach (cook as indicated and cool)</p>
<p>1 cup of sour cream</p>
<p>1 cup of mayonnaise</p>
<p>2 tablespoons of parmesan cheese</p>
<p>1 envelope (45g) of KNORR vegetable soup</p>',
                'methodology' => '<p>Mix well and pour in a pumpernickel bread or use as a vegetable dip.</p>',
                'image' => '7.jpg',
                'category_id' => 2,
                'servings' => 0,
                'prep_time' => 20,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 17,
                'source' => 'Recipe Box',
                'private_notes' => '',
                'public_notes' => '',
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2016-10-02 11:19:13',
                'published_at' => '2016-10-02 11:19:13',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:19:13',
                'updated_at' => '2019-05-29 16:01:29',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'French Toast',
                'ingredients' => '<p>Beat eggs well and add in all other ingredients. Mix well and soak bread until soft. Fry in a well greased frying pan.</p>',
                'methodology' => '<p>Beat eggs well and add in all other ingredients. Mix well and soak bread until soft. Fry in a well greased frying pan.</p>',
                'image' => '8.jpg',
                'category_id' => 71,
                'servings' => 6,
                'prep_time' => 10,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 138,
                'source' => 'Recipe Box',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 3,
                'modified_by_id' => 3,
                'last_viewed_by_id' => 3,
                'last_viewed_on' => '2020-06-15 15:12:47',
                'published_at' => '2020-06-15 15:45:03',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:20:36',
                'updated_at' => '2020-06-15 19:45:03',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Peanut Butter Cookies',
                'ingredients' => '<p>1 1/4 cups of Kraft Smooth Peanut Butter</p>
<p>1/2 cup of margarine or butter</p>
<p>3/4 cup of white sugar</p>
<p>3/4 cup of brown sugar</p>
<p>2 eggs</p>
<p>2 teaspoons of vanilla</p>
<p>1 cup of flour</p>
<p>1/2 teaspoon of salt</p>
<p>1/2 teaspoon of baking soda</p>',
                'methodology' => '<p>In a large bowl, mix together the first six ingredients.</p>
<p>In another bowl mix the remaining 3 ingredients.</p>
<p>Stir flour mixture into peanut butter mixture. mix well.</p>
<p>Drop onto a lightly greased sheet and then flatten slightly with a fork. Bake at 350 degrees for 10 to 12 minutes, or until the centers are still soft to the touch. Cool cookies on pan for 5 minutes.</p>',
                'image' => '9.jpeg',
                'category_id' => 9,
                'servings' => 36,
                'prep_time' => 30,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 89,
                'source' => 'Recipe Box',
                'private_notes' => '',
                'public_notes' => '',
                'user_id' => 3,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2016-10-02 11:22:47',
                'published_at' => '2019-02-19 20:06:13',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:22:46',
                'updated_at' => '2019-02-20 01:06:13',
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'Beef And Vegetable Pie',
                'ingredients' => '<p>2 teaspoons of cooking oil</p>
<p>1 pound of lean ground beef</p>
<p>2 cups of frozen mixed vegetables</p>
<p>1-10 ounce can of condensed cream of mushroom soup</p>
<p>1 teaspoon of beef bouillon powder</p>
<p>1/2 teaspoon of onion powder</p>
<p>1/4 teaspoon of black pepper</p>
<p>Pastry for 2 crust 9" pie</p>',
                'methodology' => '<p>Heat cooking oil in a large frying pan on medium heat.</p>
<p>Add in ground beef.</p>
<p>Scramble-fry for about 10 minutes until no longer pink. Drain. Transfer to medium bowl. Cool. Add in rest of ingredients and stir.</p>
<p>Roll out one shell slightly larger then the other, about 1/8" thick and place in 9" pie plate.</p>
<p>Spoon beef mixture into shell.</p>
<p>Roll out other shell and place on top of pie mixture.</p>
<p>Dampen edge of shell with water.</p>
<p>Trim and crimp decorative edge to seal.</p>
<p>Cut 2 or 3 vents in top to allow steam to escape.</p>
<p>Bake on bottom rack at 400 degrees for 15 minutes.</p>
<p>Reduce heat to 350 degrees and bake for another 35 to 40 minutes until golden.</p>
<p>Let stand on wire rack for 10 minutes before serving.</p>',
                'image' => '10.jpg',
                'category_id' => 5,
                'servings' => 6,
                'prep_time' => 25,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 179,
                'source' => 'Company\'s Coming',
                'private_notes' => NULL,
                'public_notes' => '<p>436 calories per wedge</p>',
                'user_id' => 5,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2019-02-19 19:02:00',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:25:20',
                'updated_at' => '2019-02-22 03:08:12',
            ),
            9 => 
            array (
                'id' => 11,
                'title' => 'Classic Meatloaf',
                'ingredients' => '<p>1 egg</p>
<p>3/4 cup of quick-cooking rolled oats</p>
<p>3/4 cup of milk</p>
<p>1/4 cup on minced onion or 1 tablespoon of onion flakes</p>
<p>1 teaspoon of parsley flakes</p>
<p>1 teaspoon of Worcestershire sauce</p>
<p>1 1/2 teaspoons of salt</p>
<p>1/4 teaspoon of pepper</p>
<p>1 1/2 pounds of ground beef</p>
<p>1 cup of grated medium cheddar cheese</p>
<p>1/4 cup of ketchup</p>',
                'methodology' => '<p>Combine first 8 ingredients in a large bowl.</p>
<p>Add ground beef.</p>
<p>Mix well.</p>
<p>Press 1/2 beef mixture into a 9x5x3 inch loaf pan.</p>
<p>Sprinkle with cheese.</p>
<p>Press in remaining beef mixture.</p>
<p>Spread ketchup on top of beef mixture.</p>
<p>Bake, uncovered at 350 degrees for 1 1/4 hours to 1 1/2 hours until fully cooked and internal temperature of beef reaches 160 degrees Fahrenheit.</p>
<p>Let stand for 10 minutes.</p>
<p>Cuts into 12 slices.</p>',
                'image' => '11.jpg',
                'category_id' => 5,
                'servings' => 6,
                'prep_time' => 35,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 233,
                'source' => 'Company\'s Coming',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2019-05-16 13:02:06',
                'published_at' => '2016-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:27:37',
                'updated_at' => '2019-05-16 17:02:06',
            ),
            10 => 
            array (
                'id' => 13,
                'title' => 'Fruity Burritos',
                'ingredients' => '<p>2/3 cup of fresh raspberries</p>
<p>1/3 cup of fresh blueberries (or frozen, thawed)</p>
<p>1/3 cup of sliced strawberries</p>
<p>1/4 cup of low fat creamed cottage cheese</p>
<p>4 teaspoons of skim milk</p>
<p>3/4 teaspoon of lemon juice</p>
<p>1/2 teaspoon of liquid sweetener</p>
<p>8 flour tortillas (6 inch) warmed</p>',
                'methodology' => '<p>Combine fruit in a shallow dish. Stir gently to mix.</p>
<p>Measure cottage cheese, milk, lemon juice and sweetener into a blender. Process until smooth.</p>
<p>Fold warm tortillas in half and then in half again.Lift 1 side to form a hollow.</p>
<p>Spoon about 2 1/2 tablespoons or about 1/8 of fruit into hollow.</p>
<p>Add about 1 teaspoon o f cottage cheese mixture.</p>
<p>Hold tortilla upright so mixture will run down through fruit. Repeat.</p>',
                'image' => '13.jpg',
                'category_id' => 36,
                'servings' => 8,
                'prep_time' => 25,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 60,
                'source' => 'Company\'s Coming',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2019-02-19 19:14:40',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:31:35',
                'updated_at' => '2019-02-20 00:14:40',
            ),
            11 => 
            array (
                'id' => 14,
                'title' => 'Lasagna',
                'ingredients' => '<p>1 tablespoon vegetable oil</p>
<p>1 medium onion, chopped</p>
<p>2 pounds ground beef</p>
<p>1 garlic clove - finely chopped</p>
<p>2 cans pizza sauce - regular</p>
<p>1 can sliced mushrooms</p>
<p>1/2 cup water or mushroom juice</p>
<p>1 teaspoon oregano</p>
<p>1 cup cheddar cheese</p>
<p>1/3 cup Parmesan cheese</p>
<p>1 tablespoon salt</p>
<p>1 pack lasagna pasta</p>
<p>Mozzarella cheese - sliced</p>',
                'methodology' => '<p>Cook pasta to liking</p>
<p>Mix all ingredients, except cheese and cook</p>
<p>Lay lasagna layer, meat layer, until none are left</p>
<p>Spread Mozzarella cheese on top and cook</p>',
                'image' => '14.jpg',
                'category_id' => 5,
                'servings' => 8,
                'prep_time' => 35,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 75,
                'source' => '',
                'private_notes' => '',
                'public_notes' => '',
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2016-10-02 11:33:31',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:33:30',
                'updated_at' => '2019-02-13 17:29:49',
            ),
            12 => 
            array (
                'id' => 15,
                'title' => 'Carrot Muffins',
                'ingredients' => '<p>4 cups of white sugar</p>
<p>2 teaspoons of cinnamon</p>
<p>2 teaspoons of baking soda</p>
<p>2 teaspoons of baking powder</p>
<p>5 cups of flour</p>
<p>1 teaspoon of salt</p>
<p>2 1/2 cups of cooking oil</p>
<p>6 cups of grated carrots</p>
<p>8 eggs (whipped)</p>',
                'methodology' => '<p>Mix sugar, cinnamon, baking soda, baking powder, flour and salt together.</p>
<p>Then add oil, carrots and eggs.</p>
<p>Place mixture into muffin cups.</p>
<p>Bake at 325 degrees for about 20-25 minutes or until golden brown.</p>',
                'image' => '15.jpg',
                'category_id' => 5,
                'servings' => 90,
                'prep_time' => 30,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 51,
                'source' => 'Recipe Box',
                'private_notes' => NULL,
                'public_notes' => NULL,
                'user_id' => 2,
                'modified_by_id' => 3,
                'last_viewed_by_id' => 3,
                'last_viewed_on' => '2020-07-07 22:36:19',
                'published_at' => '2020-07-07 22:40:24',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:35:01',
                'updated_at' => '2020-07-08 02:40:24',
            ),
            13 => 
            array (
                'id' => 16,
                'title' => 'Macaroni Salad',
                'ingredients' => '<p>1 cup of real mayonnaise</p>
<p>2 tablespoons of vinegar</p>
<p>1 tablespoon of prepared mustard</p>
<p>1 teaspoon of salt</p>
<p>1/4 teaspoon of pepper</p>
<p>8 ounces of macaroni</p>
<p>1 cup of sliced celery</p>
<p>1 cup of chopped green pepper</p>
<p>1/4 cup of onion</p>',
                'methodology' => '<p>In a large bowl, stir together mayonnaise, vinegar, mustard, sugar, salt, and pepper until smooth.</p>
<p>Add remaining ingredients, toss to coat well.</p>
<p>Cover and chill</p>',
                'image' => '16.jpg',
                'category_id' => 34,
                'servings' => 0,
                'prep_time' => 20,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 48,
                'source' => 'Recipe Box',
                'private_notes' => '<p>hghgfhgfhf</p>',
                'public_notes' => NULL,
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2019-04-01 15:28:38',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:36:29',
                'updated_at' => '2019-04-01 19:28:38',
            ),
            14 => 
            array (
                'id' => 17,
                'title' => 'Macaroni And Cheese',
                'ingredients' => '<p>2 cups of macaroni</p>
<p>2 tablespoons of butter</p>
<p>2 tablespoons of flour</p>
<p>salt and pepper to taste</p>
<p>2 cups of milk</p>
<p>2 cups of grated cheddar cheese (or cheddar &amp; colby - colby makes a smoother sauce)</p>',
                'methodology' => '<p>Cook macaroni until tender. Make a roux of butter, flour, salt and pepper. Add milk and cook on stove top or microwave stirring regularily to make a smooth cream sauce. In a large buttered casserole dish combine: macaroni, sauce and cheese. Stir until mixed. Bake at 300 degrees for 20 minutes.</p>',
                'image' => '17.jpg',
                'category_id' => 1,
                'servings' => 0,
                'prep_time' => 30,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 40,
                'source' => 'Recipe Box',
                'private_notes' => '',
            'public_notes' => '<p>Variations: add onions and peppers (sauteed), add sliced hot dog pieces topped with buttered bread crumbs.</p>',
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2016-10-02 11:38:18',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:38:17',
                'updated_at' => '2019-02-13 19:09:45',
            ),
            15 => 
            array (
                'id' => 18,
                'title' => 'Pork Chops A La Ruth',
                'ingredients' => '<p>Salt</p>
<p>Pepper</p>
<p>Flour</p>
<p>Pork Chops</p>
<p>Sliced Onions</p>
<p>1/3 cup of water</p>
<p>1/3 cup of ketchup</p>
<p>3 tablespoons of brown sugar</p>',
            'methodology' => '<p>Mix together salt, pepper and flour (the amounts are your own choice)</p>
<p>Coat pork chops with the flour mixture and brown chops on both sides in a frying pan. Place chops on the bottom of a roasting pan. Slice onions and place them on top of pork chops. Mix water, ketchup and brown sugar together and pour over top of chops. Bake at 300 degrees for approximately an hour.</p>',
                'image' => '18.jpg',
                'category_id' => 6,
                'servings' => 4,
                'prep_time' => 20,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 42,
                'source' => 'Recipe Box',
                'private_notes' => '',
                'public_notes' => '<p>You may increase the sauce depending on the number of chops. Each batch covers approximately 4 chops.</p>
<p>From my experience the best type of chops to use for this recipe is boneless.</p>',
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2016-10-02 11:40:16',
                'published_at' => '2019-02-13 14:13:21',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:40:15',
                'updated_at' => '2019-02-13 19:09:45',
            ),
            16 => 
            array (
                'id' => 19,
                'title' => 'Spiced Fruit Salad',
                'ingredients' => '<p>2 cups of halved seedless grapes</p>
<p>2 cups of cubed honeydew</p>
<p>1 can of drained pineapple chunks (14 oz.)</p>
<p>1 can of sliced peaches in juice (drained but juice reserved) peaches chopped</p>
<p>Reserved peach juice</p>
<p>1 teaspoon of vanilla extract</p>
<p>1/2 teaspoon of ground ginger</p>
<p>1/4 teaspoon of ground allspice</p>',
                'methodology' => '<p>Combine first four ingredients in large bowl.</p>
<p>Combine remaining 4 ingredients in small bowl.</p>
<p>Add to fruit. Stir until coated. Chill, covered, for at least 6 hours to blend flavours.</p>',
                'image' => '19.jpg',
                'category_id' => 36,
                'servings' => 6,
                'prep_time' => 20,
                'cook_time' => 0,
                'personal' => 0,
                'views' => 35,
                'source' => 'Company\'s Coming',
                'private_notes' => NULL,
                'public_notes' => '<p>97 calories per serving</p>',
                'user_id' => 2,
                'modified_by_id' => 2,
                'last_viewed_by_id' => 2,
                'last_viewed_on' => '2019-03-03 17:14:58',
                'published_at' => '2019-02-17 19:27:37',
                'deleted_at' => NULL,
                'created_at' => '2016-10-02 18:42:26',
                'updated_at' => '2019-05-29 16:01:14',
            ),
            17 => 
            array (
                'id' => 20,
                'title' => 'Snow Angel Trifle',
                'ingredients' => '<p>4 cups of milk</p>
<p>2 boxes of instant white chocolate (or vanilla) pudding powder (4 serving size, each)</p>
<p>17 oz. angel food cake torn into 1 inch pieces</p>
<p>1-8 oz package of cream-filled chocolate mini cookies (12 reserved for garnish</p>
<p>3 cups of sliced strawberries</p>
<p>2 cups of frozen whipped topping, thawed</p>',
                    'methodology' => '<p>Beat milk and pudding powder on low in a medium bowl for about 2 minutes until thickened.</p>
<p>Layer ingredients in a large glass serving bowl as follows:</p>
<p>1/2 of cake pieces</p>
<p>1/2 of cookies</p>
<p>1/2 of strawberry slices</p>
<p>2 cups of pudding, spread evenly</p>
<p>Remaining cake pieces</p>
<p>Remaining cookies</p>
<p>Remaining strawberry slices</p>
<p>Remaining pudding, spread evenly</p>
<p>Spread or pipe whipped topping in a decorative pattern on top of pudding. Garnish with reserved cookies. Chill for at least 4 hours to blend flavours.</p>',
                    'image' => '20.jpeg',
                    'category_id' => 36,
                    'servings' => 12,
                    'prep_time' => 45,
                    'cook_time' => 0,
                    'personal' => 0,
                    'views' => 44,
                    'source' => 'Company\'s Coming',
                    'private_notes' => '',
                    'public_notes' => '',
                    'user_id' => 2,
                    'modified_by_id' => 2,
                    'last_viewed_by_id' => 3,
                    'last_viewed_on' => '2016-10-02 12:32:00',
                    'published_at' => '2019-02-13 14:13:21',
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-02 18:44:42',
                    'updated_at' => '2019-03-01 03:53:57',
                ),
                18 => 
                array (
                    'id' => 21,
                    'title' => 'Chocolate And Pear Muffins',
                    'ingredients' => '<p>2 cups of all purpose flour</p>
<p>1 1/3 chopped peeled fresh pear</p>
<p>3/4 of packed brown sugar</p>
<p>3 1/2 milk chocolate bar, chopped</p>
<p>2 teaspoons of baking powder</p>
<p>1/4 teaspoon of ground cinnamon</p>
<p>1/4 of salt</p>
<p>1 large egg</p>
<p>3/4 cup of buttermilk</p>
<p>1/2 cup of cooking oil</p>',
                    'methodology' => '<p>Combine the first 7 ingredients in a large bowl. Make a well in centre.</p>
<p>Beat remaining 3 ingredients with whisk in small bowl. Add to well in large bowl. Stir until just moistened. Fill 12 greased muffins cups 3/4 full.</p>
<p>Bake in 375 degree oven for about 25 minutes until wooden pick inserted in centre of muffin comes out clean. Let stand in pan for 5 minutes before removing to wire rack to cool.</p>',
                    'image' => '21.jpg',
                    'category_id' => 1,
                    'servings' => 12,
                    'prep_time' => 30,
                    'cook_time' => 0,
                    'personal' => 0,
                    'views' => 53,
                    'source' => 'Company\'s Coming',
                    'private_notes' => '',
                    'public_notes' => '<p>Muffins may be stored in an airtight container for up to 3 months.</p>',
                    'user_id' => 2,
                    'modified_by_id' => 2,
                    'last_viewed_by_id' => 2,
                    'last_viewed_on' => '2016-10-02 11:46:42',
                    'published_at' => '2019-02-13 14:13:21',
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-02 18:46:42',
                    'updated_at' => '2019-02-17 23:39:27',
                ),
                19 => 
                array (
                    'id' => 22,
                    'title' => 'Chocolate Peanut Butter Bars',
                    'ingredients' => '<p>2 cups of quick-cooking oats</p>
<p>1 3/4 cups of firmly packed light brown sugar</p>
<p>1 1/2 cups of all purpose flour</p>
<p>1 teaspoon of baking powder</p>
<p>1/2 teaspoon of baking soda</p>
<p>1 cup of butter</p>
<p>1/2 cup of chopped peanuts</p>
<p>1 cup (6 oz. pkg.) of semi-sweet chocolate chips</p>
<p>1 large egg, beaten</p>
<p>1 (14 oz.) can of sweetened condensed milk</p>
<p>1/2 cup of creamy peanut butter</p>',
                    'methodology' => '<p>HEAT oven to 350Â°F.</p>
<p>Combine oats, brown sugar, flour, baking powder and baking soda in large bowl. Cut in butter with pastry blender or 2 knives until mixture resembles fine crumbs. Stir in peanuts.</p>
<p>RESERVE 1 1/2 cups crumb mixture. Stir egg into remaining crumb mixture.</p>
<p>Press onto bottom of 13 x 9-inch baking pan.</p>
<p>BAKE 15 minutes.</p>
<p>STIR together sweetened condensed milk and peanut butter in small bowl until well combined. Pour evenly over partially baked crust.</p>
<p>STIR together reserved crumb mixture and chocolate chips. Sprinkle evenly over peanut butter layer.</p>
<p>BAKE an additional 15 minutes. Cool. Cut into bars.</p>',
                    'image' => '22.jpg',
                    'category_id' => 1,
                    'servings' => 12,
                    'prep_time' => 30,
                    'cook_time' => 30,
                    'personal' => 0,
                    'views' => 113,
                    'source' => 'Recipe Box',
                    'private_notes' => '',
                    'public_notes' => '',
                    'user_id' => 2,
                    'modified_by_id' => 2,
                    'last_viewed_by_id' => 2,
                    'last_viewed_on' => '2016-10-02 11:49:30',
                    'published_at' => '2019-02-28 22:53:42',
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-02 18:49:30',
                    'updated_at' => '2019-03-01 03:53:42',
                ),
                20 => 
                array (
                    'id' => 23,
                    'title' => 'Baked Soup',
                    'ingredients' => '<p>2 pounds of sausage</p>
<p>3 cups of chopped carrots</p>
<p>3 cups of chopped celery</p>
<p>Cabbage to taste (1 use about 1 cup and sometimes substitute leeks)</p>
<p>1 cup of chopped onions</p>
<p>2-28 ounce cans of tomatoes with herbs and spices</p>
<p>3 cloves of minced garlic</p>
<p>1 tablespoon of basil</p>
<p>8-10 cups of chicken or beef stock ( I use 1/2 and 1/2)</p>
<p>Parmesan cheese to grate on top at serving</p>',
                    'methodology' => '<p>Brown sausage and chop into chunks.</p>
<p>Place in large roasting pan.</p>
<p>Cook onion and garlic in the same pan as sausage until transparent and add to roasting pan.</p>
<p>Add all other ingredients, cover and bake in oven at 350 degrees for 3-4 hours.</p>
<p>About half hour before serving add 1 1/2 cups of el dente cooked pasta (I like fusilli).</p>
<p>Top with cheese and enjoy!</p>',
                    'image' => '23.jpeg',
                    'category_id' => 39,
                    'servings' => 10,
                    'prep_time' => 30,
                    'cook_time' => 180,
                    'personal' => 0,
                    'views' => 116,
                    'source' => 'Recipe Box',
                    'private_notes' => NULL,
                    'public_notes' => NULL,
                    'user_id' => 3,
                    'modified_by_id' => 3,
                    'last_viewed_by_id' => 3,
                    'last_viewed_on' => '2020-07-07 22:34:12',
                    'published_at' => '2020-07-07 22:40:26',
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-02 18:52:19',
                    'updated_at' => '2020-07-08 02:40:26',
                ),
                21 => 
                array (
                    'id' => 24,
                    'title' => 'Chocolate Banana Crepes',
                    'ingredients' => '<p>1 cup of all-purpose flour</p>
<p>3 tablespoon of unsweetened dutch cocoa powder</p>
<p>1 tablespoon of powdered sugar</p>
<p>1 1/2 cups of milk</p>
<p>2 large egg whites</p>
<p>1 whole egg</p>
<p>1 tsp. of oil</p>
<p>3 bananas, sliced</p>
<p>Whipped cream (homemade or store-bought)</p>
<p>Chocolate chips, for sprinkling (optional)</p>
<p>Chocolate syrup, for drizzling</p>',
                'methodology' => '<p>In a large bowl, whisk together flour, milk, cocoa powder, powdered sugar, eggs and oil until smooth. (You can also do this with an electric mixer.)</p>
<p>Heat a large nonstick pan on medium-low heat, and grease with cooking spray.</p>
<p>Pour 1/4 cup crepe mixture into pan, immediately the pan so that the batter spreads out thin into a large circle.</p>
<p>Cook for 1 to 2 minutes or until bottom of crepe is light golden brown.</p>
<p>Flip; cook 30 seconds to 1 minute or until light golden brown.</p>
<p>Repeat with remaining cooking spray and crepe mixture.</p>
<p>To serve, spoon whipped cream into center of each crepe.</p>
<p>Top with sliced bananas and fold each edge of crepe over filling.</p>
<p>Drizzle with chocolate syrup and any additional toppings.</p>
<p>Serve warm.</p>',
                    'image' => '24.jpg',
                    'category_id' => 5,
                    'servings' => 12,
                    'prep_time' => 30,
                    'cook_time' => 0,
                    'personal' => 0,
                    'views' => 58,
                    'source' => 'Recipe Box',
                    'private_notes' => NULL,
                    'public_notes' => '<p>This batter will also keep in the refrigerator for up to a day.</p>',
                    'user_id' => 3,
                    'modified_by_id' => 3,
                    'last_viewed_by_id' => 3,
                    'last_viewed_on' => '2020-07-07 22:39:59',
                    'published_at' => '2020-07-07 22:40:28',
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-02 18:55:51',
                    'updated_at' => '2020-07-08 02:40:28',
                ),
                22 => 
                array (
                    'id' => 25,
                    'title' => 'Strawberry Cream Cheese Cobbler',
                'ingredients' => '<p>1 stick (1/2 cup) of butter</p>
<p>1 egg, lightly beaten</p>
<p>1 cup of milk</p>
<p>1 cup of all-purpose flour</p>
<p>1 cup of sugar</p>
<p>2 teaspoons of baking powder</p>
<p>1/2 teaspoon of salt</p>
<p>2 quarts of whole strawberries, capped and washed</p>
<p>4 ounces of cream cheese, cut in small pieces</p>
<p>Vanilla ice cream for serving, optional</p>',
                    'methodology' => '<p>Preheat oven to 350 F. Melt butter and pour into a 9x13-inch glass baking dish. In a small bowl, mix together the egg, milk, flour, sugar, baking powder and salt. Pour directly over the butter in the baking dish, but do not stir.</p>
<p>Add the strawberries, arranging in a single layer as much as possible. Sprinkle cream cheese pieces over strawberries. Place in preheated oven and bake for 45 minutes, or until top is golden brown and edges are bubbling. (Crust rises up and around the fruit, but fruit will still peek out of top.)</p>
<p>Serve hot out of the oven with choice of topping, if desired.</p>',
                    'image' => '25.jpg',
                    'category_id' => 1,
                    'servings' => 10,
                    'prep_time' => 30,
                    'cook_time' => 45,
                    'personal' => 0,
                    'views' => 14,
                    'source' => 'Company\'s Coming',
                    'private_notes' => '',
                    'public_notes' => '',
                    'user_id' => 3,
                    'modified_by_id' => 2,
                    'last_viewed_by_id' => 2,
                    'last_viewed_on' => '2016-10-02 11:58:10',
                    'published_at' => '2019-02-13 14:13:21',
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-02 18:58:10',
                    'updated_at' => '2019-03-01 03:53:51',
                ),
                23 => 
                array (
                    'id' => 26,
                    'title' => 'Molasses Cake',
                    'ingredients' => '<p>2 cups of molasses</p>
<p>2 tbsp of lard or shortening</p>
<p>1/2 tsp of baking soda</p>
<p>1 tsp of baking powder</p>
<p>3 cups of all purpose flour</p>
<p>1 cup of boiling water</p>
<p>1/2 tsp of salt</p>',
                    'methodology' => '<p>Mix baking soda and boiling water.</p>
<p>Add the rest of the ingredients.</p>
<p>Grease and flour pan.</p>
<p>Bake at 350\'\'F for 40 minutes.</p>',
                    'image' => '26.jpg',
                    'category_id' => 8,
                    'servings' => 10,
                    'prep_time' => 50,
                    'cook_time' => 40,
                    'personal' => 0,
                    'views' => 73,
                    'source' => 'Mom\'s recipe book',
                    'private_notes' => '',
                    'public_notes' => '',
                    'user_id' => 3,
                    'modified_by_id' => 2,
                    'last_viewed_by_id' => 2,
                    'last_viewed_on' => '2016-10-02 11:59:47',
                    'published_at' => '2019-02-13 14:13:21',
                    'deleted_at' => NULL,
                    'created_at' => '2016-10-02 18:59:47',
                    'updated_at' => '2016-10-02 18:59:47',
                ),
                24 => 
                array (
                    'id' => 27,
                    'title' => 'Butter Tarts',
                    'ingredients' => '<p>2 eggs</p>
<p>2 cups of brown sugar</p>
<p>2 teaspoons of vinegar</p>
<p>1 teaspoon of vanilla</p>
<p>1/2 cup of melted butter</p>
<p>2 cups of raisins</p>
<p>1 cup of chopped walnuts</p>',
                    'methodology' => '<p>Beat eggs until yolks and whites are well blended not frothy.</p>
<p>Beat in brown sugar, vanilla and vinegar.</p>
<p>Stir in melted butter, raisins and walnuts.</p>
<p>Bake at 350 degrees about 15 minutes in unbaked pastry shells (about 1 tablespoon in each)</p>',
                    'image' => '27.jpg',
                    'category_id' => 9,
                    'servings' => 36,
                    'prep_time' => 30,
                    'cook_time' => 20,
                    'personal' => 0,
                    'views' => 317,
                    'source' => 'Recipe Box',
                    'private_notes' => NULL,
                    'public_notes' => '<p>Old family recipe</p>',
                    'user_id' => 2,
                    'modified_by_id' => 2,
                    'last_viewed_by_id' => 2,
                    'last_viewed_on' => '2019-05-16 14:29:48',
                    'published_at' => '2019-05-16 14:18:05',
                    'deleted_at' => NULL,
                    'created_at' => '2019-03-05 17:31:22',
                    'updated_at' => '2019-05-16 18:29:48',
                ),
                25 => 
                array (
                    'id' => 28,
                    'title' => 'Pate Chomeur',
                    'ingredients' => '<p>1 cup of white sugar</p>
<p>1 cup of milk</p>
<p>2 cups of flour</p>
<p>2 tsps of baking powder</p>
<p>2 1/2 cups of brown sugar</p>
<p>vanilla</p>',
                    'methodology' => '<p>Mix white sugar, milk, flour and baking powder.</p>
<p>Pour mixture in ungreased 6 x 9 pan.</p>
<p>In sperate pot, boil brown sugar, water and vanilla.</p>
<p>Pour over dough and bake at 350 degrees F for about 30 minutes</p>',
                    'image' => '28.jpg',
                    'category_id' => 8,
                    'servings' => 10,
                    'prep_time' => 20,
                    'cook_time' => 30,
                    'personal' => 0,
                    'views' => 39,
                    'source' => 'My mom\'s recipe book',
                    'private_notes' => NULL,
                    'public_notes' => NULL,
                    'user_id' => 2,
                    'modified_by_id' => 2,
                    'last_viewed_by_id' => 2,
                    'last_viewed_on' => '2019-03-05 12:33:14',
                    'published_at' => '2019-03-01 12:32:00',
                    'deleted_at' => NULL,
                    'created_at' => '2019-03-05 17:33:14',
                    'updated_at' => '2019-03-05 17:33:14',
                ),
                26 => 
                array (
                    'id' => 29,
                    'title' => 'French Toast Bake',
                    'ingredients' => '<p>* 1/2 cup melted butter 1 stick<br />* 1 cup brown sugar<br />* 1 loaf Texas toast<br />* 4 eggs<br />* 1 1/2 cup milk<br />* 1 tsp vanilla<br />* Powdered sugar for sprinkling</p>',
                'methodology' => '<p>1. Melt butter in microwave &amp; add brown sugar&hellip;.stir till mixed.<br />2. Pour butter/sugar mix into bottom of 9 x 13 pan&hellip;.spread around<br />3. Beat eggs, milk, &amp; vanilla<br />4. Lay single layer of Texas Toast in pan<br />5. Spoon 1/2 of egg mixture on bread layer<br />6. Add 2nd layer of Texas Toast<br />7. Spoon on remaining egg mixture<br />8. Cover &amp; chill in fridge overnight<br />9. Bake at 350 for 45 minutes (covered for the first 30 minutes)<br />10. Sprinkle with powdered sugar<br />11. Serve with warm maple syrup</p>',
                    'image' => '1592248259.png',
                    'category_id' => 71,
                    'servings' => 12,
                    'prep_time' => 20,
                    'cook_time' => 45,
                    'personal' => 0,
                    'views' => 8,
                    'source' => 'Facebook',
                    'private_notes' => NULL,
                    'public_notes' => '<p>Servings are based one one piece of toast each</p>',
                    'user_id' => 3,
                    'modified_by_id' => 3,
                    'last_viewed_by_id' => 3,
                    'last_viewed_on' => '2020-06-15 15:54:46',
                    'published_at' => '2020-06-15 15:55:22',
                    'deleted_at' => NULL,
                    'created_at' => '2020-06-15 19:08:57',
                    'updated_at' => '2020-06-15 19:55:22',
                ),
                27 => 
                array (
                    'id' => 30,
                    'title' => 'Five Minute Nacho Cheese Sauce',
                    'ingredients' => '<p>2 Tbsp butter</p>
<p>2 Tbsp flour</p>
<p>1 cup whole milk</p>
<p>6 oz. medium cheddar, shredded (about 1.5 cups</p>
<p>1/4 tsp salt</p>
<p>1/4 tsp chili powder</p>',
                        'methodology' => '<p>Add the butter and flour to a small sauce pot. Heat and whisk the butter and flour together until they become bubbly and foamy. Continue to cook and whisk the bubbly mixture for about 60 seconds.</p>
<p>Whisk the milk into the flour and butter mixture. Turn the heat up slightly and allow the milk to come to a simmer while whisking. When it reaches a simmer, the mixture will thicken. Once it\'s thick enough to coat a spoon, turn off the heat.</p>
<p>Stir in the shredded cheddar, one handful at a time, until melted into the sauce. If needed, place the pot over a low flame to help the cheese melt. Do not over heat the cheese sauce.</p>
<p>Once all the cheese is melted into the sauce, stir in the salt and chili powder. Taste and adjust the seasoning as needed. If the sauce becomes too thick, simply whisk in an additional splash of milk.</p>',
                        'image' => '1592254465.jpeg',
                        'category_id' => 73,
                        'servings' => 0,
                        'prep_time' => 5,
                        'cook_time' => 5,
                        'personal' => 0,
                        'views' => 9,
                        'source' => NULL,
                        'private_notes' => NULL,
                        'public_notes' => '<p>The servings size is 1/4 cup</p>',
                        'user_id' => 3,
                        'modified_by_id' => 3,
                        'last_viewed_by_id' => 3,
                        'last_viewed_on' => '2020-06-15 16:54:25',
                        'published_at' => '2020-06-15 16:55:04',
                        'deleted_at' => NULL,
                        'created_at' => '2020-06-15 19:34:31',
                        'updated_at' => '2020-06-15 20:55:04',
                    ),
                    28 => 
                    array (
                        'id' => 31,
                        'title' => 'Chewy Peanut Butter Brownies',
                        'ingredients' => '<p>1/2 cup of peanut butter</p>
<p>1/3 cup of margarine, softened</p>
<p>2/3 cup of white sugar</p>
<p>1/2 cup of brown sugar</p>
<p>2 eggs</p>
<p>1/2 teaspoon of vanilla extract</p>
<p>1 cup of all-purpose flour</p>
<p>1 tsp of baking powder</p>
<p>1/4 teaspoon salt</p>
<p>&nbsp;</p>',
                    'methodology' => '<p><span style="font-size: large;"><span style="font-family: Source Sans Pro, Times, serif;">Preheat oven to 350 degrees F (175 degrees C ). Grease a 9x9 inch baking pan.</span></span></p>
<p><span style="font-size: large;"><span style="font-family: Source Sans Pro, Times, serif;">In a medium bowl, cream together peanut butter and margarine. </span></span></p>
<p><span style="font-size: large;"><span style="font-family: Source Sans Pro, Times, serif;">Gradually blend in the brown sugar, white sugar, eggs, and vanilla; mix until fluffy. </span></span></p>
<p><span style="font-size: large;"><span style="font-family: Source Sans Pro, Times, serif;">Combine flour, baking powder, and salt; stir into the peanut butter mixture until well blended.</span></span></p>
<p><span style="font-size: large;"><span style="font-family: Source Sans Pro, Times, serif;">Bake for 30 to 35 minutes in preheated oven, or until the top springs back when touched. </span></span></p>
<p><span style="font-size: large;"><span style="font-family: Source Sans Pro, Times, serif;">Cool, and cut into 16 squares.</span></span></p>
<p>&nbsp;</p>',
                        'image' => '1592250172.jpg',
                        'category_id' => 9,
                        'servings' => 16,
                        'prep_time' => 15,
                        'cook_time' => 25,
                        'personal' => 0,
                        'views' => 8,
                        'source' => NULL,
                        'private_notes' => NULL,
                        'public_notes' => '<p align="left"><span style="font-size: large;"><span style="font-family: Source Sans Pro, Times, serif;">Great with chocolate frosting!</span></span></p>',
                        'user_id' => 3,
                        'modified_by_id' => 3,
                        'last_viewed_by_id' => 3,
                        'last_viewed_on' => '2020-07-07 22:38:40',
                        'published_at' => '2020-07-07 22:40:30',
                        'deleted_at' => NULL,
                        'created_at' => '2020-06-15 19:42:52',
                        'updated_at' => '2020-07-08 02:40:30',
                    ),
                    29 => 
                    array (
                        'id' => 32,
                        'title' => 'Crispy Rice Cereal Chocolate Cheesecake',
                        'ingredients' => '<p>unsalted butter, 1/2 stick</p>
<p>mini marshmallows (285 g)</p>
<p>crispy rice cereal (180g)</p>
<p>semisweet chocolate (225g)</p>
<p>haevy cream ( 60ml)</p>
<p>cream cheese, softened (445g)</p>
<p>sugar (100g)</p>
<p>vanilla</p>
<p>whipped cream, divided (150g)</p>
<p>choclate bar for shaving (90g)</p>',
                    'methodology' => '<p>1. In a large saucepan over medium heat, melt the butter.<br />2. Add the marshmallows and stir until melted. Add the crispy rice cereal and stir to coat.<br />3. While the crispy rice cereal mix is still warm, transfer them to a greased 10-inch (25 cm) springform pan.<br />4. Using a greased measuring cup, press down into the cereal to form to the pan. Press the edges against the springform pan to create walls. Set aside.<br />5. Place the chocolate in a small microwave-safe bowl and pour the heavy cream on top. Microwave in 30-second intervals, stirring until melted, about 1 minute.<br />6. In a large bowl, mix the cream cheese, sugar, and vanilla until smooth.<br />7. Pour in the melted chocolate and stir to incorporate.<br />8. Add 1&frac12; cups (90 g) of whipped cream to the chocolate mixture and fold with a spatula until combined.<br />9. Pour the cheesecake mixture into the crispy rice base and smooth the top with a spatula.<br />10. Refrigerate for 3-4 hours or overnight, until the cheesecake is set. Release the springform.<br />11. Put the remaining cup of whipped cream in a piping bag fitted with a star tip and decorate the top of the cheesecake.<br />12. Use a vegetable peeler to shave the chocolate into the middle of the cheesecake.<br />13. Slice and serve.<br />14. Enjoy!</p>',
                        'image' => '1592253793.png',
                        'category_id' => 8,
                        'servings' => 10,
                        'prep_time' => 180,
                        'cook_time' => 0,
                        'personal' => 0,
                        'views' => 7,
                        'source' => NULL,
                        'private_notes' => NULL,
                        'public_notes' => NULL,
                        'user_id' => 3,
                        'modified_by_id' => 3,
                        'last_viewed_by_id' => 3,
                        'last_viewed_on' => '2020-06-15 16:43:13',
                        'published_at' => '2020-06-15 16:43:32',
                        'deleted_at' => NULL,
                        'created_at' => '2020-06-15 20:43:13',
                        'updated_at' => '2020-06-15 20:43:32',
                    ),
                    30 => 
                    array (
                        'id' => 33,
                        'title' => 'Snickerdoodle Cheesecake',
                        'ingredients' => '<p>1 log refrigerated sugar cookie dough<br />3 tbsp. cinnamon sugar, plus more for garnish<br />3 8-oz. blocks cream cheese, softened<br />1 c. granulated sugar<br />1/4 c. sour cream<br />3 large eggs<br />2 tsp. pure vanilla extract<br />1/4 tsp. ground cinnamon<br />pinch of kosher salt<br />vanilla frosting</p>',
                        'methodology' => '<p>Preheat oven to 350&deg; and grease an 8&rdquo; springform pan with cooking spray.</p>
<p>In a large bowl, combine cookie dough and cinnamon sugar and stir until<br />evenly incorporated. Press about half of the dough into the bottom of the<br />springform pan. (Reserve extra dough to bake as cookies.)</p>
<p>In another large bowl, beat the cream cheese until smooth. Add sugar and sour<br />cream and beat until light and uffy. Add eggs one at a time, beating well<br />between each addition. Stir in vanilla, cinnamon and salt. Pour batter over the<br />cookie dough crust.</p>
<p>Bake until slightly jiggly in the center, about 1 hour. Turn off the oven and open<br />the door slightly to let the cheesecake cool for about 1 hour. Then refrigerate<br />until completely cool, at least 4 hours and up to overnight.</p>
<p>Roll remaining dough into small balls (about a tablespoon) then atten slightly.<br />Place on baking sheet and bake until starting to turn golden around the edges,<br />about 10 minutes. Transfer to a cooling rack to cool completely.</p>
<p>Before serving, sprinkle the top of the cheesecake with more cinnamon sugar.<br />Using a large star tip, pipe frosting around the edges of the cheesecake then<br />garnish with snickerdoodle cookies.</p>',
                        'image' => '1592254727.jpeg',
                        'category_id' => 8,
                        'servings' => 10,
                        'prep_time' => 20,
                        'cook_time' => 30,
                        'personal' => 0,
                        'views' => 7,
                        'source' => NULL,
                        'private_notes' => NULL,
                        'public_notes' => NULL,
                        'user_id' => 3,
                        'modified_by_id' => 3,
                        'last_viewed_by_id' => 3,
                        'last_viewed_on' => '2020-06-15 16:58:47',
                        'published_at' => '2020-06-15 16:59:50',
                        'deleted_at' => NULL,
                        'created_at' => '2020-06-15 20:50:17',
                        'updated_at' => '2020-06-15 20:59:50',
                    ),
                    31 => 
                    array (
                        'id' => 34,
                        'title' => 'Apple Caramel Cheesecake',
                        'ingredients' => '<p><strong>Crust:</strong></p>
<p>2 cups graham cracker crumbs</p>
<p>⅛ cup brown sugar</p>
<p>⅓ cup butter, melted</p>
<p><strong>Filling:</strong></p>
<p>16 ounces cream cheese, softened</p>
<p>&frac14; cup brown sugar</p>
<p>&frac14; cup white sugar</p>
<p>2 tablespoons cornstarch</p>
<p>1 teaspoon cinnamon</p>
<p>&frac14; teaspoon ginger</p>
<p>1 teaspoon vanilla extract</p>
<p>2 green apples, peeled and thinly sliced</p>
<p><strong>Topping:</strong></p>
<p>&frac14; cup rolled oats</p>
<p>&frac14; cup flour</p>
<p>&frac14; cup brown sugar</p>
<p>1 teaspoon cinnamon</p>
<p>2 tablespoons butter, melted</p>
<p>Caramel sauce</p>',
                        'methodology' => '<p>1. Preheat oven to 350&deg;F/180&deg;C.</p>
<p>2. In a bowl, mix the crust ingredients. Press into the bottom of a greased 8-inch springform pan. Bake for 5 minutes.</p>
<p>3. In another bowl, mix all the filling ingredients except the apples. Spread over the graham cracker crust, then layer the apple slices on top.</p>
<p>4. In another bowl, mix all the topping ingredients except the caramel, and sprinkle evenly over the apple layer. Bake for 30 minutes.</p>
<p>5. Drizzle on caramel sauce.</p>
<p>6. Enjoy!</p>
<p>&nbsp;</p>',
                        'image' => '1592257388.jpeg',
                        'category_id' => 8,
                        'servings' => 12,
                        'prep_time' => 0,
                        'cook_time' => 35,
                        'personal' => 0,
                        'views' => 9,
                        'source' => NULL,
                        'private_notes' => NULL,
                        'public_notes' => '<p>I have made this cheesecake recently and it tastes amazing. The texture is nice and it was not too sweet. All flavors blended very well. It is super easy to make. I did mine in an 8" x 8" glass pan as I did not have a springform pan.</p>',
                        'user_id' => 3,
                        'modified_by_id' => 3,
                        'last_viewed_by_id' => 3,
                        'last_viewed_on' => '2020-07-07 22:31:27',
                        'published_at' => '2020-07-07 22:31:38',
                        'deleted_at' => NULL,
                        'created_at' => '2020-06-15 21:38:55',
                        'updated_at' => '2020-07-08 02:31:38',
                    ),
                ));
        
        
    }
}