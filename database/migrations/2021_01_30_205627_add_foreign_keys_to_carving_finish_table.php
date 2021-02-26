<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCarvingFinishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carving_finish', function(Blueprint $table)
		{
			$table->foreign('carving_id', 'carving_finish_ibfk_1')->references('id')->on('carvings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carving_finish', function(Blueprint $table)
		{
			$table->dropForeign('carving_finish_ibfk_1');
		});
	}

}
