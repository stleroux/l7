<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category')->unsigned();
			$table->string('name');
			$table->text('description');
			$table->integer('views')->unsigned()->default(0);
			$table->string('time_invested', 50)->nullable();
			$table->string('price', 50)->nullable();
			$table->string('width', 50)->nullable();
			$table->string('depth', 50)->nullable();
			$table->string('height', 50)->nullable();
			$table->string('weight', 50)->nullable();
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
		Schema::drop('projects');
	}

}
