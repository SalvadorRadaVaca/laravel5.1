<?php

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed

        DB::table('users')->insert([
            'name' => 'Salvador Rada Vaca',
            'email' => 'radavacasalvador',
            'password' => bcrpt('123456789'),
        ]);
    }
}
