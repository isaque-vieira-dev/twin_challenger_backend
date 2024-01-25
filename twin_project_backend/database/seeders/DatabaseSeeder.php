<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
             'title' => 'Finalizar o Desafio Twin',
             'desc' => 'Finalizar o desafio da twin com laravel e vue.js',
             'status' => 'em andamento',
        ]);
    }
}
