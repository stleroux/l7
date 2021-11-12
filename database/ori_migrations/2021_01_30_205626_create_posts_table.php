<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->string('title');
			$table->string('slug')->nullable();
			$table->text('body');
			$table->text('public_notes')->nullable();
			$table->text('private_notes')->nullable();
			$table->string('image')->nullable();
			$table->integer('views')->unsigned()->default(0);
			$table->string('source')->nullable();
			$table->timestamps();
			$table->dateTime('published_at')->nullable();
			$table->integer('modified_by_id')->unsigned()->nullable();
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
		Schema::drop('posts');
	}

}
