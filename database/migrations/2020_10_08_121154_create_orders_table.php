<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop_id'); //seller
            $table->string('track_code');
            $table->string('order_hash');
            $table->string('currency');
            $table->double('subtotal')->default(0);
            $table->double('discount')->default(0);
            $table->string('coupon_id')->nullable();
            $table->double('vat')->default(0);
            $table->double('shipping_fee')->default(0);
            $table->double('total')->default(0);
            $table->string('status')->nullable(); //pending, processing, on-hold, completed, cancelled, refunded, failed and trash, delivered. Default is pending.
            $table->text('customer_note')->nullable(); 
            $table->unsignedBigInteger('user_id'); //buyer
            $table->string('user_address');
            $table->timestamp('delivered_at')->nullable();
            $table->SoftDeletes();
            $table->timestamps();
            $table->foreign('shop_id')->references('id')->on('vendors')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
