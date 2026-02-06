<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            [
                [
                    'category_id' => '1',
                    'name' => 'Télévision',
                    'slug' => 'télévision',
                    'price' => 699.99,
                    'stock' => '10',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '1',
                    'name' => 'Ordinateur Portable',
                    'slug' => 'ordinateur-portable',
                    'price' => 999.99,
                    'stock' => '5',
                    'active' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '1',
                    'name' => 'Imprimante',
                    'slug' => 'imprimante',
                    'price' => 99.99,
                    'stock' => '10',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '2',
                    'name' => 'Pull-Over',
                    'slug' => 'pull-over',
                    'price' => 39.99,
                    'stock' => '5',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '2',
                    'name' => 'Chemise',
                    'slug' => 'chemise',
                    'price' => 29.99,
                    'stock' => '5',
                    'active' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '2',
                    'name' => 'Pantalon',
                    'slug' => 'pantalon',
                    'price' => 19.99,
                    'stock' => '5',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '3',
                    'name' => 'Meuble bas de cuisine',
                    'slug' => 'meuble-bas-de-cuisine',
                    'price' => 190.99,
                    'stock' => '20',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '3',
                    'name' => 'Buffet',
                    'slug' => 'buffet',
                    'price' => 390.99,
                    'stock' => '10',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '3',
                    'name' => 'Table de cuisine',
                    'slug' => 'table-de-cuisine',
                    'price' => 290.99,
                    'stock' => '5',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '4',
                    'name' => 'Ballon de foot',
                    'slug' => 'ballon-de-foot',
                    'price' => 10.99,
                    'stock' => '30',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                'category_id' => '4',
                'name' => 'Boule de pétanque',
                'slug' => 'boule-de-pétanque',
                'price' => 90.99,
                'stock' => '15',
                'active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'category_id' => '4',
                'name' => 'Jeux de fléchette',
                'slug' => 'jeux-de-fléchette',
                'price' => 190.99,
                'stock' => '0',
                'active' => '0',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                ['category_id' => '5',
                    'name' => 'Le petit prince',
                    'slug' => 'le-petit-prince',
                    'price' => 20.99,
                    'stock' => '25',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => '5',
                    'name' => 'Le journal d Anne Franck' ,
                    'slug' => 'le-journal-d-anne-franck',
                    'price' => 29.99,
                    'stock' => '20',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'category_id' => '5',
                    'name' => 'Le livre des records',
                    'slug' => 'le-livre-des-records',
                    'price' => 90.99,
                    'stock' => '5',
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),

                ]
            ]
        );
    }
}
