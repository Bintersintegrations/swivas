<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('withdrawable_id'); //the person id
            $table->string('withdrawable_type'); //the person type (user or vendor)
            $table->string('currency'); //the 
            $table->double('amount'); //the 
            $table->string('status')->default('waiting'); //waiting, held, cancelled, paid
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
        Schema::dropIfExists('withdrawals');
    }
}
