<?php

namespace Database\Seeders;

use App\Models\ClaseProfesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaseProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ClaseProfesor::Factory(15)->create();
    }
}
