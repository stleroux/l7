<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDartPlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dart__players', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('game_id')->unsigned();
			$table->integer('team_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('shooting_order')->unsigned();
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
		Schema::drop('dart__players');
	}

}
