<?php

use App\Models\Admin\Role;
use App\Models\Admin\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      // clear tables
      User::truncate();
      DB::table('role_user')->truncate();

      // get the various roles
      $adminRole = Role::where('name','admin')->first();
      $authorRole = Role::where('name','author')->first();
      $userRole = Role::where('name','user')->first();

      // create test users
      $admin = User::create([
         'first_name' => 'Admin User',
         'email' => 'admin@admin.com',
         'password' => Hash::make('password'),
         'account_status' => 1,
         'public_email' => 1
      ]);

      $author = User::create([
         'first_name' => 'Author User',
         'email' => 'author@author.com',
         'password' => Hash::make('password')
      ]);

      $user = User::create([
         'first_name' => 'Generic User',
         'email' => 'user@user.com',
         'password' => Hash::make('password')
      ]);

      // assign roles to the users via roles relationship
      $admin->roles()->attach($adminRole);
      $author->roles()->attach($authorRole);
      $user->roles()->attach($userRole);
   }
}
