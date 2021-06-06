<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarvingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carvings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('category');
			$table->string('name');
			$table->text('description');
			$table->integer('views')->unsigned()->default(0);
			$table->integer('design_time_hrs')->unsigned()->nullable();
			$table->integer('design_time_mins')->unsigned()->nullable();
			$table->integer('machine_time_hrs')->unsigned()->nullable();
			$table->integer('machine_time_mins')->unsigned()->nullable();
			$table->integer('price')->unsigned()->nullable();
			$table->string('width', 10)->nullable();
			$table->string('depth', 10)->nullable();
			$table->string('height', 10)->nullable();
			$table->string('weight', 10)->nullable();
			$table->string('jobSheet')->nullable();
			$table->dateTime('completed_at')->nullable();
			$table->timestamps();
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
		Schema::drop('carvings');
	}

}
