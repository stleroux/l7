<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects__projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category')->unsigned();
			$table->string('name');
			$table->text('description', 65535);
			$table->integer('views')->unsigned()->default(0);
			$table->string('time_invested')->nullable();
			$table->string('price')->nullable();
			$table->string('width')->nullable();
			$table->string('depth')->nullable();
			$table->string('height')->nullable();
			$table->string('weight')->nullable();
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
		Schema::drop('projects__projects');
	}

}
