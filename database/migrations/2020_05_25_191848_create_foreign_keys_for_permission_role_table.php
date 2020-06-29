<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForPermissionRoleTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::table('permission_role', function (Blueprint $table) {
         $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
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
      Schema::table('permission_role', function (Blueprint $table) {
         $table->dropForeign('permission_role_role_id_foreign');
         $table->dropForeign('permission_role_permission_id_foreign');
      });
   }
}
