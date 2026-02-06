<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Électronique',
                'slug' => 'electronique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vêtements',
                'slug' => 'vetements',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maison',
                'slug' => 'maison',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sport',
                'slug' => 'sport',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Livre',
                'slug' => 'livre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
