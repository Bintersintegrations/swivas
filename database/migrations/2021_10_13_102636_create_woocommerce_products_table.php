<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoocommerceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woocommerce_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('permalink')->nullable();
            $table->string('type')->nullable();
            $table->string('description')->nullable();
            $table->string('short_description')->nullable();
            $table->string('sku')->nullable();
            $table->string('price')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('date_on_sale_from')->nullable();
            $table->string('date_on_sale_from_gmt')->nullable();
            $table->string('date_on_sale_to')->nullable();
            $table->string('date_on_sale_to_gmt')->nullable();
            $table->string('price_html')->nullable();
            $table->boolean('on_sale')->nullable();
            $table->boolean('purchasable')->nullable();
            $table->integer('total_sales')->nullable();
            $table->boolean('virtual')->nullable();
            $table->boolean('downloadable')->nullable();
            $table->text('downloads')->nullable();
            $table->integer('download_limit')->nullable();
            $table->integer('download_expiry')->nullable();
            $table->string('external_url')->nullable();
            $table->boolean('sold_individually')->nullable();
            $table->string('weight')->nullable();
            $table->text('dimensions')->nullable();
            $table->text('related_ids')->nullable();
            $table->text('upsell_ids')->nullable();
            $table->text('cross_sell_ids')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('purchase_note')->nullable();
            $table->text('categories')->nullable();
            $table->text('tags')->nullable();
            $table->text('images')->nullable();
            $table->text('attributes')->nullable();
            $table->text('default_attributes')->nullable();
            $table->text('variations')->nullable();
            $table->text('grouped_products')->nullable();
            $table->boolean('status')->default(1);;
            $table->boolean('template')->default(0);
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
        Schema::dropIfExists('woocommerce_products');
    }
}
