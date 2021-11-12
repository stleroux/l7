<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('features', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title');
			$table->text('description');
			$table->text('resolution')->nullable();
			$table->integer('status');
			$table->bigInteger('user_id')->unsigned()->index('user_id');
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
		Schema::drop('features');
	}

}
