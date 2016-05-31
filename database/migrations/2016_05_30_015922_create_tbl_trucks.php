<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTrucks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trucks', function (Blueprint $table) {
            $table->increments('truck_id');
            $table->integer('truck_category_id')->unsigned();
            $table->string('post_name');
            $table->string('brand');
            $table->string('body_type');
            $table->string('model');
            $table->string('engine');
            $table->longText('description');
            $table->string('image_path');
            $table->boolean('status');

            $table->foreign('truck_category_id')->references('truck_category_id')->on('truck_category');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('trucks');
    }
}
