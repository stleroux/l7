<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{

		foreach (File::allFiles(database_path('data/movies/')) as $js) {

			$json = File::get($js);

			$data = json_decode($json);
			
			foreach($data as $obj) {
				Movie::create(array(
					'title' => $obj->Title,
					'col_no' => $obj->CollectionNumber,
					'upc' => $obj->UPC,
					'production_year' => $obj->ProductionYear
				));
			}
		}
	}
}


