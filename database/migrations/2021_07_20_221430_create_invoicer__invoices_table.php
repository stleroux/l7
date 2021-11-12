<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicerInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoicer__invoices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->unsigned()->index('invoicer_invoices_client_id_foreign');
			$table->text('notes')->nullable();
			$table->string('status');
			$table->decimal('amount_charged')->unsigned()->nullable();
			$table->decimal('hst')->unsigned()->nullable();
			$table->decimal('sub_total')->unsigned()->nullable();
			$table->decimal('wsib')->unsigned()->nullable();
			$table->decimal('income_taxes')->unsigned()->nullable();
			$table->decimal('total_deductions')->unsigned()->nullable();
			$table->decimal('deposits')->unsigned()->nullable();
			$table->decimal('discounts')->unsigned()->nullable();
			$table->decimal('payments')->unsigned()->nullable();
			$table->decimal('total')->unsigned()->nullable();
			$table->timestamps(10);
			$table->dateTime('quoted_at')->nullable();
			$table->dateTime('estimated_at')->nullable();
			$table->dateTime('invoiced_at')->nullable();
			$table->dateTime('paid_at')->nullable();
			$table->dateTime('workOrder_at')->nullable();
			$table->dateTime('completed_at')->nullable();
			$table->dateTime('shipped_at')->nullable();
			$table->dateTime('pickedUp_at')->nullable();
			$table->dateTime('canceled_at')->nullable();
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
		Schema::drop('invoicer__invoices');
	}

}
