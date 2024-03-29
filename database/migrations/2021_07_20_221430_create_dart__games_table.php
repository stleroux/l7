<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDartGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dart__games', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('type');
			$table->string('status', 50);
			$table->integer('t1_players')->unsigned()->comment('Number of players on Team 1');
			$table->integer('t2_players')->unsigned()->comment('Number of players on Team 2');
			$table->integer('ind_players')->unsigned();
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
		Schema::drop('dart__games');
	}

}
