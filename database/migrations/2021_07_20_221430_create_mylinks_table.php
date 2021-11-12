<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMylinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mylinks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('user_id')->unsigned()->index('user_id');
			$table->string('name', 150);
			$table->string('page_url');
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
		Schema::drop('mylinks');
	}

}
