<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
   * Seed the application's database.
   *
   * @return void
   */
   public function run()
   {
      Eloquent::unguard();

      //disable foreign key check for this connection before running seeders
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');

      $this->call(RolesTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(RoleUserTableSeeder::class);
      $this->call(PermissionsTableSeeder::class);
      $this->call(PermissionRoleTableSeeder::class);

      $this->call(CategoriesTableSeeder::class);
      $this->call(CommentsTableSeeder::class);

      $this->call(ProjectsFinishProjectTableSeeder::class);
      $this->call(ProjectsFinishesTableSeeder::class);
      $this->call(ProjectsImagesTableSeeder::class);
      $this->call(ProjectsMaterialProjectTableSeeder::class);
      $this->call(ProjectsMaterialsTableSeeder::class);
      $this->call(ProjectsProjectsTableSeeder::class);

      $this->call(RecipesTableSeeder::class);
      $this->call(RecipeUserTableSeeder::class);

      $this->call(FavoritesTableSeeder::class);

      // supposed to only apply to a single connection and reset it's self
      // but I like to explicitly undo what I've done for clarity
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
   }
}
