<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicerActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoicer__activities', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('invoice_id');
			$table->string('activity', 50);
			$table->decimal('amount');
			$table->text('comment')->nullable();
			$table->timestamps(10);
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
		Schema::drop('invoicer__activities');
	}

}
