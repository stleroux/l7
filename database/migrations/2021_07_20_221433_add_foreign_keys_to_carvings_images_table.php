<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCarvingsImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carvings_images', function(Blueprint $table)
		{
			$table->foreign('carving_id', 'carvings_images_ibfk_1')->references('id')->on('carvings')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carvings_images', function(Blueprint $table)
		{
			$table->dropForeign('carvings_images_ibfk_1');
		});
	}

}
