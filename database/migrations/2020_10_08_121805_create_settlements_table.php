<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('receiver_id');  
            $table->string('receiver_type'); //the vendor/user uplines
            $table->unsignedBigInteger('order_id'); //the order
            $table->unsignedBigInteger('payment_id'); //the payment
            $table->text('description')->nullable();
            $table->string('currency');
            $table->double('amount'); //settlement amount
            $table->timestamp('released_at')->nullable();
            $table->string('status')->default('waiting'); //waiting, held, cancelled, released
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
}
