<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop_id')->default(1);
            $table->text('name');
            $table->text('slug');
            $table->text('permalink');
            $table->text('description')->nullable();
            $table->text('images')->nullable();
            $table->text('categories')->nullable();
            $table->text('atributes')->nullable();
            $table->text('tags')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->boolean('is_variable')->default(0); 
            $table->text('variations')->nullable();
            $table->boolean('is_group')->default(0); //simple, grouped, variable, 
            $table->text('grouped_products')->nullable();
            $table->text('bought_together')->nullable();
            $table->text('related')->nullable();
            $table->string('status')->default('publish'); //draft, pending, private, publish
            $table->boolean('is_featured')->default(0);
            $table->double('price')->default(0);
            $table->boolean('on_sale')->default(0);
            $table->double('sale_price')->default(0);
            $table->timestamp('date_on_sale_from')->nullable();
            $table->timestamp('date_on_sale_to')->nullable();
            $table->boolean('is_virtual')->default(0);
            $table->boolean('is_downloadable')->default(0);
            $table->text('downloads')->nullable();
            $table->integer('download_limit')->default(-1);
            $table->integer('download_expiry')->default(-1);
            $table->integer('stock_quantity')->default(0);
            $table->text('purchase_note')->nullable();
            $table->boolean('is_template')->default(0);
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
        Schema::dropIfExists('products');
    }
}
