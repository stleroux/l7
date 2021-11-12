<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCarvingTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carving_tag', function(Blueprint $table)
		{
			$table->foreign('carving_id', 'carving_tag_ibfk_1')->references('id')->on('carvings')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carving_tag', function(Blueprint $table)
		{
			$table->dropForeign('carving_tag_ibfk_1');
		});
	}

}
