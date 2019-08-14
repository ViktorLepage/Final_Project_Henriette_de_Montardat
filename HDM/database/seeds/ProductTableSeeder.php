<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 11; $i++) {
            DB::table('hdm_products')->insert([
                'product_type' => 'MyType' . $i,
                'product_name' => Str::random(10),
                'price' => Int::random(5),
                'img' => Str::random(5),
                'categoryID' => Int::random(1, 6),
            ]);
        }
    }
}
$table->bigIncrements('product_id');
$table->string('product_type');
$table->string('product_name');
$table->integer('price');
$table->string('img');
$table->integer('categoryID');
$table->foreign('categoryID')->references('category_id')->on('hdm_categories');
$table->timestamps();
