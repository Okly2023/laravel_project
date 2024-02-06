<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; // Add this line
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('user_roles')->insert([
            'role_name' => 'Admin'
        ]);
    }
}
