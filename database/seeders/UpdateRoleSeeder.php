<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('email', 'admin@mail.com')->update([
            'role' => 1,
        ]);
        DB::table('users')->where('email', 'cashier@mail.com')->update([
            'role' => 2,
        ]);
    }
}
