<?php

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
            /*$table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();*/
            $table->bigIncrements('id');
            $table->string('product_type');
            $table->string('product_name');
            $table->integer('price');
            $table->string('image');
            $table->integer('categoryID');
            $table->foreign('categoryID')->references('category_id')->on('hdm_categories');
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
