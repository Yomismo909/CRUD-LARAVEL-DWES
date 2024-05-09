<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            // 'name' => 'Miguel Lacasa',
            // 'email' => 'miguel.elmismo909@gmail.com',
        ]);

        $this->call([
            EstudianteSeeder::class,
            ClaseSeeder::class,
            ProfesorSeeder::class,
            ClaseProfesorSeeder::class
        ]);
    }
}
