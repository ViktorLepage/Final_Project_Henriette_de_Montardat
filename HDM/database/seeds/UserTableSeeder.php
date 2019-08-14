<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 11; $i++) {
            $string = mt_rand(1122055681,1302055681);
            DB::table('hdm_user')->insert([
                'name' => 'Tamama' . $i,
                'surname' => 'Yourmama' . $i,
                'email' => 'ex' . $i . 'ample' . $i . '@mail.com',
                'password' => Str::random(6),
                'address_1' => Str::random(5),
                'address_2' => Str::random(5),
                'post_code' => Str::random(5),
                'country' => Str::random(5),
                'phone_number' => rand(12345678, 643292),
                'remember_token' =>Str::random(5),
                'created_at' =>date("Y-m-d H:i:s",$string),
                'updated_at' =>date("Y-m-d H:i:s",$string),
            ]);
        }
    }
}
