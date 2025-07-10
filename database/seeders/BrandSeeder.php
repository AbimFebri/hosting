<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'Nike', 'logo' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Adidas', 'logo' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Puma', 'logo' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'New Balance', 'logo' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Converse', 'logo' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}