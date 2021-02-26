<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarvingTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carving_tag', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('carving_id')->unsigned()->index('post_tag_post_id_foreign');
			$table->integer('tag_id')->unsigned()->index('post_tag_tag_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carving_tag');
	}

}
