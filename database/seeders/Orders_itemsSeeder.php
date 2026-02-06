<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Orders_itemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders_items')->insert([
            [
                'order_id'=> '1',
                'product_id'=> '1',
                'quantity'=> '1',
                'unit_price'=> 699.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id'=> '2',
                'product_id'=> '4',
                'quantity'=> '2',
                'unit_price'=>  39.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);
    }
}
