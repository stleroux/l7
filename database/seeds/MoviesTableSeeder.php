<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class MoviesTableSeeder extends SpreadsheetSeeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		$this->call([
         SpreadsheetSeeder::class,
      ]);
	}

}
