<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categ = ['name' => 'Necklaces', 'Bracelets', 'Earrings', 'Rings', 'Others'];

        foreach ($categ as $name) {
            DB::table('hdm_categories')->insert([
                'name' => $name

            ]);
        }
    }
}
