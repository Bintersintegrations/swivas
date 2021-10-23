<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iso_code', 11)->index();
            $table->string('name');
            $table->string('flag')->nullable();
            $table->string('dialing_code', 5)->nullable();
            $table->string('currency_name');
            $table->string('currency_iso');
            $table->string('currency_symbol')->nullable();
            $table->string('unique_id_name')->nullable();
            $table->text('individual_documents')->nullable();
            $table->text('business_documents')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('countries');
    }
}
