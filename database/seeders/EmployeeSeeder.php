<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table("employees")->insert([
        "firstName"=>"Murtaza",
        "lastName"=>"Rezaie",
        "tazkira"=>"123367975",
        "phone"=>"0791168586",
        "email"=>"mure@gmail.com"
    ]); 
    //
    }
}
