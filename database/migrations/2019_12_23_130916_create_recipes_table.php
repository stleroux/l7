<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('ingredients', 65535);
			$table->text('methodology', 65535);
			$table->string('image')->nullable();
			$table->integer('category_id')->unsigned()->index('category_id');
			$table->string('servings')->unsigned()->nullable();
			$table->string('prep_time_hours')->unsigned()->nullable();
			$table->string('prep_time_minutes')->unsigned()->nullable();
			$table->string('cook_time_hours')->unsigned()->nullable();
			$table->string('cook_time_minutes')->unsigned()->nullable();
			$table->boolean('personal')->default(0);
			$table->integer('views')->unsigned()->nullable()->default(0);
			$table->string('source')->nullable();
			$table->text('private_notes', 65535)->nullable();
			$table->text('public_notes', 65535)->nullable();
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->integer('modified_by_id')->unsigned()->nullable()->index('modified_by');
			$table->integer('last_viewed_by_id')->unsigned()->nullable()->index('last_viewed_by_id');
			$table->dateTime('last_viewed_on')->nullable();
			$table->dateTime('published_at')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipes');
	}

}
