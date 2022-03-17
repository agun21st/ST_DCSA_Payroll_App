<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => "Razib",
            'email' => "agun21st@outlook.com",
            'password' => bcrypt('12345678'),
            'phone' => "01712834621",
        ]);
    }
}
