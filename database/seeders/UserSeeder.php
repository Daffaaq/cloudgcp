<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'username' => 'administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345678'),
                'role' => 1,
            ],
            [
                'name' => 'Cashier',
                'username' => 'cashier',
                'email' => 'cashier@mail.com',
                'password' => Hash::make('12345678'),
                'role' => 2,
            ]
        ]);
    }
}
