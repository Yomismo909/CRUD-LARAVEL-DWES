<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Clase;
use App\Models\Profesor;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\clase_profesor>
 */
class ClaseProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "clase_id"=>Clase::inRandomOrder()->first()->id,
            "profesor_id"=>Profesor::inRandomOrder()->first()->id,
        ];
    }
}
