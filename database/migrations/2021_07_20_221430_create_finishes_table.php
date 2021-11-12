<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinishesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finishes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 250);
			$table->string('type', 250)->nullable();
			$table->string('color_name', 250)->nullable();
			$table->string('color_code', 250)->nullable();
			$table->string('sheen', 50)->nullable();
			$table->string('manufacturer', 250)->nullable();
			$table->string('upc', 250)->nullable();
			$table->text('notes')->nullable();
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
		Schema::drop('finishes');
	}

}
