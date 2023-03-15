<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

       

        return [
            'nombre' => fake()->name(),
            'categoria' => fake()->randomElement(["lacteo", "carnico", "aseo", "bebidas", "granos", "mascota", "harinas", "condimentos"]),
            'marca' => fake()->lastName(),
            'descripcion' => fake()->paragraph()
            
        ];
    }
}
