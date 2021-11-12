<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicerClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoicer__clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name')->nullable();
			$table->string('contact_name')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zip')->nullable();
			$table->string('telephone')->nullable();
			$table->string('cell')->nullable();
			$table->string('fax')->nullable();
			$table->string('email')->nullable();
			$table->string('website')->nullable();
			$table->text('notes')->nullable();
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
		Schema::drop('invoicer__clients');
	}

}
