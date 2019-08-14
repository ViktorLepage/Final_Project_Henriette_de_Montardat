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
                'price' => rand(30, 150),
                'img' => Str::random(5),
                'categoryID' => rand(1, 5),
            ]);
        }
    }
}
