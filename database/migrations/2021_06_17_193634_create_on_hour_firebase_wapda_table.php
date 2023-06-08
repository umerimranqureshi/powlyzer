<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnHourFirebaseWapdaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_hour_firebase_wapda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firebase_id');
            $table->foreign('firebase_id')->references('firebase_id')->on('devices');
            $table->float('active');
            $table->float('reactive');
            $table->float('apparent');
            $table->float('currentA');
            $table->float('currentB');
            $table->float('currentC');
            $table->float('voltageA');
            $table->float('voltageB');
            $table->float('voltageC');
            $table->float('frequency');
            $table->float('power_factor');
            $table->float('active_energy');
            $table->float('total_power_factor');
            $table->rememberToken();
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
        Schema::dropIfExists('on_hour_firebase_wapda');
    }
}
