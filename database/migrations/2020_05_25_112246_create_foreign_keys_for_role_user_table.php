<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForRoleUserTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::table('role_user', function (Blueprint $table) {
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         // onDelete('cascade') will delete the role_user entries associated to the user when the user is deleted
         $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
         // onDelete('cascade') will delete the role_user entries associated to the role when the role is deleted
      });
   }

   /**
   * Reverse the migrations.
   *
   * @return void
   */
   public function down()
   {
      Schema::table('role_user', function (Blueprint $table) {
         $table->dropForeign('role_user_user_id_foreign');
         $table->dropForeign('role_user_role_id_foreign');
      });
   }
}
