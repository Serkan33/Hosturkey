<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyDatailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('properties_details',function (Blueprint $table){
                $table->increments('this_col_id');
                 $table->integer('property_id')->unsigned();
                 $table->foreign('property_id')->references('proprty_id')->on('property');
                $table->string('image');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties_details');
    }
}
