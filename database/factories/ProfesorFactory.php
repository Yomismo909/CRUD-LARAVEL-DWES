<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\clase;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre"=>fake()->firstName(),
            "apellido"=>fake()->lastName(),
            "fecha_nacimiento"=>fake()->dateTimeInInterval('-65 years', '+40 years'),
            "direccion"=>fake()->address(),
        ];
    }
}
