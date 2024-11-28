<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('categories')->insert([
            'name' => 'Eau Fraiche',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('categories')->insert([
            'name' => 'Eau de Cologne',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('categories')->insert([
            'name' => ' Eau de Toilette',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('categories')->insert([
            'name' => 'Eau de Parfum',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table(table: 'categories')->insert([
            'name' => ' Extrait de Parfum',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
