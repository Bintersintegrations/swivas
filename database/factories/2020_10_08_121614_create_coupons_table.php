<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->integer('quantity')->default(1);//quantity produced
            $table->integer('available')->default(1);//quantity remaining
            $table->boolean('is_percentage');//whether or fixed
            $table->float('value')->default(0);// 
            $table->boolean('free_shipping')->default(0); //if it has been used
            $table->text('category_limit')->nullable();//if its specifically for any plan
            $table->text('product_limit')->nullable();//if its specifically for any currency
            $table->unsignedBigInteger('currency_id')->nullable();//if its specifically for any currency
            $table->integer('limit_per_user')->default(1); //if it can be used multiple times
            $table->boolean('status')->default(0); //if it has been activated
            $table->SoftDeletes();
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
        Schema::dropIfExists('coupons');
    }
}
