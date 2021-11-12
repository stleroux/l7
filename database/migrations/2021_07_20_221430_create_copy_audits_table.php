<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyAuditsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('copy_audits', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('user_type')->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->string('event');
			$table->string('auditable_type');
			$table->bigInteger('auditable_id')->unsigned();
			$table->text('old_values')->nullable();
			$table->text('new_values')->nullable();
			$table->text('url')->nullable();
			$table->string('ip_address', 45)->nullable();
			$table->string('user_agent', 1023)->nullable();
			$table->string('tags')->nullable();
			$table->timestamps(10);
			$table->index(['user_id','user_type'], 'audits_user_id_user_type_index');
			$table->index(['auditable_type','auditable_id'], 'audits_auditable_type_auditable_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('copy_audits');
	}

}
