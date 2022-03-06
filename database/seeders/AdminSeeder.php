<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => "Razib",
            'email' => "agun21st@outlook.com",
            'password' => bcrypt('raz0172834621'),
            'phone' => "01712834621",
        ]);
    }
}
