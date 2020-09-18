<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->text('body', 65535);
			$table->text('public_notes', 65535)->nullable();
			$table->text('private_notes', 65535)->nullable();
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
