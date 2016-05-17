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
            $table->integer('userId')->unsigned();
            $table->boolean('isLaptop');
            $table->integer('modelId')->unsigned();
            $table->string('hdd', 64);
            $table->string('processor', 64);
            $table->integer('ram');
            $table->string('graphics', 64);
            $table->boolean('isPending');
            $table->integer('givenTo')->unsigned();
            $table->integer('issueId')->unsigned();
            $table->text('issueDescr');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('modelId')->references('id')->on('laptop_models');
            $table->foreign('givenTo')->references('id')->on('centers');
            $table->foreign('issueId')->references('id')->on('issues');
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
