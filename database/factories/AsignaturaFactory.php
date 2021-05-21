<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignaturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignatura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->unique()->randomElement(['Matematicas', 'Lengua', 'Geografia', 'Ciencias', 'Informatica']),
            'descripcion'=>$this->faker->text(),
            'creditos'=>$this->faker->numberBetween(1,250)
        ];
    }
}
