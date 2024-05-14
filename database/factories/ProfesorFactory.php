<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private function getDni():string {
        $number = fake()->numberBetween(10000000, 99999999);
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letra = $letras[$number % 23];
        return "$number$letra";
    }
    public function definition(): array
    {
        return [
            "nombre" => fake() -> name,
            "email" => fake() -> email,
            "edad" => fake() -> numberBetween(25, 65),
            "dni" => $this->getDni()
        ];
    }
}
