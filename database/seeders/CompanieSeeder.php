<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; // Add this line
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'Company A',
            'type_id' => 2,
            'name' => 'Company B',
            'type_id' => 3

        ]);

    }
}
