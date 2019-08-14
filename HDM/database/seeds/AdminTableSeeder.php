<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hdm_admin')->insert([
            'email' => 'example@mail.com',
            'password' => Str::random(10),
        ]);
    }
}
