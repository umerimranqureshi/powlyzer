<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id');
            $table->string('product_name');
            $table->double('rate');
            $table->double('quantity');
            $table->unsignedBigInteger('user_id_generater');
            $table->foreign('user_id_generater')->references('id')->on('users');
            $table->unsignedBigInteger('user_id_receiver');
            $table->foreign('user_id_receiver')->references('id')->on('users');
            $table->string('description');

            $table->datetime('paid_date')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
