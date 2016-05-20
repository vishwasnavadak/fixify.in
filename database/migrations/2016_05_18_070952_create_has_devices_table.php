<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_devices', function (Blueprint $table) {
          $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->boolean('isLaptop');
            $table->integer('modelId')->unsigned()->nullable();
            $table->integer('deviceId')->unsigned()->nullable();
            $table->boolean('isPending');
            $table->integer('givenTo')->unsigned()->nullable();
            $table->integer('issueId')->unsigned()->nullable();
            $table->text('issueDescr')->nullable();
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('modelId')->references('id')->on('laptop_models')->onDelete('cascade');
            $table->foreign('deviceId')->references('id')->on('devices')->onDelete('cascade');
            $table->foreign('givenTo')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('issueId')->references('id')->on('issues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('has_devices');
    }
}
