<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('username');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->boolean('account_status')->nullable()->default(0);
			$table->string('email')->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->boolean('public_email')->nullable();
			$table->string('telephone')->nullable();
			$table->string('cell')->nullable();
			$table->string('fax')->nullable();
			$table->string('website')->nullable();
			$table->string('company_name')->nullable();
			$table->string('image')->nullable();
			$table->string('address_1', 150)->nullable();
			$table->string('address_2', 150)->nullable();
			$table->string('city', 60)->nullable();
			$table->string('province', 60)->nullable();
			$table->string('postal_code', 20)->nullable();
			$table->text('notes')->nullable();
			$table->integer('dart_doubleOut')->unsigned()->nullable()->default(0);
			$table->boolean('invoicer_client')->nullable();
			$table->dateTime('previous_login_date')->nullable();
			$table->dateTime('last_login_date')->nullable();
			$table->integer('login_count')->unsigned()->nullable()->default(0);
			$table->string('reasonToRegister');
			$table->string('redirectAfterLogin')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
