<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return string
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
            "edad" => fake() -> numberBetween(15, 80),
            "dni" => $this->getDni()
        ];
    }
}
