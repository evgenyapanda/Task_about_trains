<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('train_number');
            $table->timestamps();
        });


        Schema::create('schedules', function (Blueprint $table){
            $table->increments('id')->index();
            $table->time('time_departure');
            $table->time('time_arrival');
            $table->integer('id_train');
            $table->timestamps();
        });

        Schema::create('countries', function (Blueprint $table){
            $table->increments('id')->index();
            $table->string('country');
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
        //
        Schema::dropifExist('trains');
        Schema::dropifExist('days');
       
    }
}
