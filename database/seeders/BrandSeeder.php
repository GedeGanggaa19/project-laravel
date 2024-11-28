<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('brands')->insert([
            'name' => 'Gucci',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'name' => 'YSL',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'name' => 'Zara',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'name' => 'HMNS',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'name' => 'Fordive',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'name' => 'Mykonos',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'name' => 'Nautica',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
