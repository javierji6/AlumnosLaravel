<?php

namespace Database\Factories;

use App\Models\Profesor;
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
        $profesores = Profesor::all();
        $profesor = $profesores->random();
        return [
            "nombre" => fake() -> name,
            "email" => fake() -> email,
            "edad" => fake() -> numberBetween(13, 50),
            "dni" => $this->getDni(),
            "idProfesor" => $profesor->id,
        ];
    }
}
