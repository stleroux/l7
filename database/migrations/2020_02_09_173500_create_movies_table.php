<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration {

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('movies', function(Blueprint $table)
      {
         $table->increments('id');
         $table->integer('col_no');
         $table->string('title');
         $table->string('imdb_no');
         $table->string('category')->default(0)->nullable();
         $table->string('upc');
         $table->string('production_year')->nullable();
         $table->string('released')->nullable();
         $table->string('running_time')->nullable();
         $table->string('rating')->nullable();
         $table->string('studio')->nullable();
         $table->text('overview')->nullable();
         $table->integer('views')->default(0);
         $table->softDeletes();
         $table->timestamps();
      });
   }


   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::drop('movies');
   }

}