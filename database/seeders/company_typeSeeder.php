<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; // Add this line
use Illuminate\Support\Facades\Hash; // Add this line
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class company_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_types')->insert([
            'type_name' => 'Type A',
            'type_name' => 'Type B'

        ]);
    }
}
