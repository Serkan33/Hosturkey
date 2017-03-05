<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('property',function (Blueprint $table){
           $table->increments('proprty_id');
           $table->string('owner');
           $table->integer('garages');
           $table->integer('bedrooms');
           $table->integer('area');
           $table->integer('floors');
           $table->integer('bathrooms');
           $table->integer('price');
           $table->string('adress');
           $table->string('location',255);
           $table->string('subtitle');
           $table->text('overview');
           $table->string('image');
           $table->date('property_date');
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
        Schema::dropIfExists('property');
    }
}
