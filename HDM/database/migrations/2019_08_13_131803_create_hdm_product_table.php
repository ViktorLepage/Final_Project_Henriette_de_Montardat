<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHdmdbProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdm_products', function (Blueprint $table) {
            $table->bigIncrements('prodcut_id');
            $table->string('product_type');
            $table->string('product_name');
            $table->integer('price');
            $table->string('img');
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
        Schema::dropIfExists('hdmdb_products');
    }
}
