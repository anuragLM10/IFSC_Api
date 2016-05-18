<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ifsc_details' , function(Blueprint $table)
          {    $table->increments('id');
               $table->string('BANK')->nullable();
               $table->string('IFSC');
               $table->string('BRANCH')->nullable();
               $table->string('ADDRESS')->nullable();
               $table->integer('CONTACT')->nullable();
               $table->string('CITY')->nullable();
               $table->string('DISTRICT')->nullable();
               $table->string('STATE')->nullable();
               //$table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('ifsc_details') ;
        //
    }
}
