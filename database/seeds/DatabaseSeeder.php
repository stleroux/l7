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

      // //disable foreign key check for this connection before running seeders
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');

      $this->call(RolesTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(RoleUserTableSeeder::class);
      $this->call(PermissionsTableSeeder::class);
      $this->call(PermissionRoleTableSeeder::class);

      $this->call(CategoriesTableSeeder::class);
      $this->call(CommentsTableSeeder::class);

      $this->call(BugsTableSeeder::class);

      $this->call(CarvingsTableSeeder::class);
      $this->call(CarvingFinishTableSeeder::class);
      $this->call(CarvingMaterialTableSeeder::class);
      $this->call(CarvingsImagesTableSeeder::class);
      $this->call(CarvingTagTableSeeder::class);

      $this->call(FaqsTableSeeder::class);

      $this->call(FeaturesTableSeeder::class);

      $this->call(FinishesTableSeeder::class);

      $this->call(GeneralTableSeeder::class);

      $this->call(MaterialsTableSeeder::class);

      $this->call(BugsTableSeeder::class);

      $this->call(TagsTableSeeder::class);

      $this->call(FinishProjectTableSeeder::class);
      $this->call(MaterialProjectTableSeeder::class);
      $this->call(ProjectsImagesTableSeeder::class);
      $this->call(ProjectsTableSeeder::class);
      $this->call(ProjectTagTableSeeder::class);

      $this->call(RecipesTableSeeder::class);
      $this->call(RecipeUserTableSeeder::class);

      $this->call(FavoritesTableSeeder::class);
      
      $this->call(InvoicerActivitiesTableSeeder::class);
      $this->call(InvoicerClientsTableSeeder::class);
      $this->call(InvoicerProductsTableSeeder::class);
      $this->call(InvoicerInvoicesTableSeeder::class);
      $this->call(InvoicerInvoiceItemsTableSeeder::class);

      $this->call(DartPlayersTableSeeder::class);
      $this->call(DartGamesTableSeeder::class);
      $this->call(DartScoresTableSeeder::class);

      $this->call(FavoritesTableSeeder::class);

      $this->call(PostTagTableSeeder::class);
      $this->call(PostsTableSeeder::class);
      $this->call(TagsTableSeeder::class);
      
      $this->call(MoviesTableSeeder::class);

      // supposed to only apply to a single connection and reset it's self
      // but I like to explicitly undo what I've done for clarity
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
      // $this->call(FailedJobsTableSeeder::class);
      // $this->call(PasswordResetsTableSeeder::class);
      
    }
}
