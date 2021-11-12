<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarvingsImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carvings_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('carving_id')->unsigned()->index('project_id');
			$table->string('name', 250);
			$table->string('display_name')->default('');
			$table->text('description');
			$table->string('mine_type', 50)->nullable();
			$table->integer('size')->nullable();
			$table->string('path', 250)->nullable();
			$table->boolean('main_image')->default(0);
			$table->timestamps(10);
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carvings_images');
	}

}
