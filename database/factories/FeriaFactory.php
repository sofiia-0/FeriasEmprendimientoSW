<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feria>
 */
class FeriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->words(3, true), // Ej: "Feria de Artesanías"
            'fecha_evento' => fake()->date(), // Fecha aleatoria
            'lugar' => fake()->address(), // Dirección aleatoria
            'descripcion' => fake()->paragraph(), // Texto descriptivo
        ];
    }
}
