<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingcartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shoppingcart', function(Blueprint $table)
		{
			$table->string('identifier');
			$table->string('instance');
			$table->text('content');
			$table->timestamps(10);
			$table->primary(['identifier','instance']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shoppingcart');
	}

}
