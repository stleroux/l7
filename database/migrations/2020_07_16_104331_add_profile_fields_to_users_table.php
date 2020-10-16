<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->renameColumn('name', 'first_name');
            $table->string('first_name')->nullable()->after('username');
            $table->string('last_name')->nullable()->after('first_name');
            $table->boolean('account_status')->default(0)->nullable()->after('last_name');
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
            $table->text('notes', 65535)->nullable();
            $table->integer('dart_doubleOut')->unsigned()->nullable()->default(0);
            $table->boolean('invoicer_client')->nullable();
            $table->timestamp('previous_login_date')->nullable();
            $table->timestamp('last_login_date')->nullable();
            $table->integer('login_count')->unsigned()->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
