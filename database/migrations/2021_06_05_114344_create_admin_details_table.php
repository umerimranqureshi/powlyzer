<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendor_details');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('client_details');

            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices');

            $table->unsignedBigInteger('real_parameter_id');
             $table->foreign('real_parameter_id')->references('id')->on('real_parameter_values');

             $table->boolean('status')->default(0);
             
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
        Schema::dropIfExists('admin_details');
    }
}
