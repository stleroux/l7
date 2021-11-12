<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('views', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('viewable_type');
			$table->bigInteger('viewable_id')->unsigned();
			$table->text('visitor')->nullable();
			$table->string('collection')->nullable();
			$table->timestamp('viewed_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->index(['viewable_type','viewable_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('views');
	}

}
