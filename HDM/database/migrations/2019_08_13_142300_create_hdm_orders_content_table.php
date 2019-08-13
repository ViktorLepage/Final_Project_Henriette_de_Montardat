<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHdmOrdersContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdm_orders_content', function (Blueprint $table) {
            $table->bigIncrements('orderID', 'productID');
            $table->foreign('orderID')->references('order_id')->on('hdm_order');
            $table->foreign('productID')->references('product_id')->on('hdm_product');
            $table->integer('quantity');
            $table->integer('price');
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
        Schema::dropIfExists('hdm_orders_content');
    }
}
