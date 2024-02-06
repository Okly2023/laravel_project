<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; // Add this line
use Illuminate\Support\Facades\Hash; // Add this line
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'company_id' => 2
        ]);   
    }
}
