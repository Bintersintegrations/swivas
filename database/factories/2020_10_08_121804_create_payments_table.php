<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); //the sender
            $table->unsignedBigInteger('order_id'); //the order
            $table->unsignedBigInteger('coupon_id')->nullable(); //if coupon was applied to payment
            $table->string('reference');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->float('amount')->default(0); 
            $table->string('medium'); //card, bank, ussd  
            $table->string('status'); //withdrawal, successful, failed, cancelled 
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('currency_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
