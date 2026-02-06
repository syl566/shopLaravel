<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Dupont',
            'email' =>  'dupont'. '@example.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ['name' => 'Dujardin',
            'email' => 'dujardin'. '@example.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ['name' => 'Monteil',
        'email' => 'monteil'. '@example.com',
        'password' => Hash::make('password'),
        'created_at' => now(),
        'updated_at' => now(),
        ]

    ]);
    }
}
