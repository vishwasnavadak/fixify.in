<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_models', function (Blueprint $table) {
          $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('brandId')->unsigned();
            $table->string('model', 64);
            $table->string('number', 32)->nullable();
            $table->string('hdd', 64);
            $table->string('processor', 64);
            $table->integer('ram');
            $table->string('graphics', 64);
            $table->timestamps();
            $table->foreign('brandId')->references('id')->on('laptop_brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laptop_models');
    }
}
