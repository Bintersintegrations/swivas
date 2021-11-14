<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribute_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('atribute_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('atribute_id')->references('id')->on('atributes')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atribute_categories');
    }
}
