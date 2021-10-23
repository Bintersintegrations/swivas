<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('element')->nullable();
            $table->boolean('status')->default(1);
            $table->SoftDeletes();
            $table->timestamps();
        });
        DB::table('attributes')->insert(array(
            array('id' =>1, 'name'=> 'Color', 'slug'=> "color",'description'=>'hexagonal color','element'=> 'select'),
            array('id' =>2, 'name'=> 'Size', 'slug'=> "size",'description'=> 'Medium Large Small','element'=> 'select'),
            array('id' =>3, 'name'=> 'Size', 'slug'=> "size_inch",'description'=> 'Size in inches','element'=> 'textbox'),
            array('id' =>4, 'name'=> 'Weight', 'slug'=> "weight",'description'=> 'Weight of the product','element'=> 'textbox'),
            array('id' =>5, 'name'=> 'Height', 'slug'=> "height",'description'=> 'Height of the product','element'=> 'textbox'),
            array('id' =>6, 'name'=> 'Length', 'slug'=> "length",'description'=> 'Length of the product','element'=> 'textbox'),
    
        ));
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
