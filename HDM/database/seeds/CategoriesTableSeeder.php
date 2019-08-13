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

        $categ = ['name' => 'Necklace'];

        foreach ($categ as $categ) {
            DB::table('categories')->insert([
                'name' => 'Necklace'

            ]);
        }
    }
}
