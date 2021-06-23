<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicerInvoiceItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoicer__invoice_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('invoice_id')->unsigned()->index('invoicer__invoice_items_invoice_id_foreign');
			$table->integer('product_id')->unsigned()->nullable()->index('invoicer__invoice_items_product_id_foreign');
			$table->string('product')->nullable();
			$table->string('notes')->nullable();
			$table->float('quantity')->unsigned();
			$table->decimal('price')->unsigned();
			$table->decimal('total')->unsigned();
			$table->timestamp('work_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamps();
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
		Schema::drop('invoicer__invoice_items');
	}

}
