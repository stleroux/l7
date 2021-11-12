<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarvingFinishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carving_finish', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('carving_id')->unsigned()->index('project_id');
			$table->integer('finish_id')->unsigned();
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carving_finish');
	}

}
