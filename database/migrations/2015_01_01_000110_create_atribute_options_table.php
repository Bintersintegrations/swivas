<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributeOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribute_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('atribute_id');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();  
            $table->boolean('status')->default(1);
            $table->SoftDeletes();
            $table->timestamps();
            $table->foreign('atribute_id')->references('id')->on('atributes')->onDelete('cascade');
        });
        DB::table('atribute_options')->insert(array(
            array('id' =>1, 'atribute_id'=> 1, 'name'=> "blue", 'slug'=>'blue', 'description'=> '#0000FF'),
            array('id' =>2, 'atribute_id'=> 1, 'name'=> "red", 'slug'=>'red', 'description'=> '#FF0000'),
            array('id' =>3, 'atribute_id'=> 1, 'name'=> "green", 'slug'=>'green', 'description'=> '#00FF00'),
            array('id' =>4, 'atribute_id'=> 1, 'name'=> "purple", 'slug'=>'purple', 'description'=> '#6A0DAD'),
            array('id' =>5, 'atribute_id'=> 1, 'name'=> "yellow", 'slug'=>'yellow', 'description'=> '#FFFF00'),
            array('id' =>6, 'atribute_id'=> 1, 'name'=> "orange",'slug'=>'orange', 'description'=> '#FF7F00'),
            array('id' =>7, 'atribute_id'=> 1, 'name'=> "pink", 'slug'=>'pink', 'description'=> '#FFC0CB'),
            array('id' =>8, 'atribute_id'=> 1, 'name'=> "violet", 'slug'=>'violet', 'description'=> '#8F00FF'),
            array('id' =>9, 'atribute_id'=> 1, 'name'=> "white", 'slug'=>'white', 'description'=> '#FFFFFF'),
            array('id' =>10, 'atribute_id'=> 1, 'name'=> "black", 'slug'=>'black', 'description'=> '#000000'),
            array('id' =>11, 'atribute_id'=> 1, 'name'=> "brown", 'slug'=>'brown', 'description'=> '#88540B'),
            array('id' =>12, 'atribute_id'=> 1, 'name'=> "gray", 'slug'=>'gray', 'description'=> '#B2BEB5'),
            array('id' =>13, 'atribute_id'=> 1, 'name'=> "teal", 'slug'=>'teal', 'description'=> '#008080'),
            array('id' =>14, 'atribute_id'=> 1, 'name'=> "gold", 'slug'=>'gold', 'description'=> '#A57C00'),
            array('id' =>15, 'atribute_id'=> 1, 'name'=> "crimson", 'slug'=>'crimson', 'description'=> '#DC143C'),
            array('id' =>16, 'atribute_id'=> 1, 'name'=> "lemon", 'slug'=>'lemon', 'description'=> '#FFF700'),
            array('id' =>17, 'atribute_id'=> 2, 'name'=> "Very Small", 'slug'=>'very_small', 'description'=> 'XS'),
            array('id' =>18, 'atribute_id'=> 2, 'name'=> "Small", 'slug'=>'small', 'description'=> 'S'),
            array('id' =>19, 'atribute_id'=> 2, 'name'=> "Medium", 'slug'=>'medium', 'description'=> 'M'),
            array('id' =>20, 'atribute_id'=> 2, 'name'=> "Large", 'slug'=>'large', 'description'=> 'L'),
            array('id' =>21, 'atribute_id'=> 2, 'name'=> "Extra Large", 'slug'=>'extra_large', 'description'=> 'XL'),
            array('id' =>22, 'atribute_id'=> 2, 'name'=> "Double Extra Large", 'slug'=>'double_extra_large', 'description'=> 'XXL'),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atribute_options');
    }
}
