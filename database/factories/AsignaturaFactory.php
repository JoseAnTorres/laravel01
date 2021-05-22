<?php

namespace Database\Factories;

use App\Models\Asignatura;
use App\Models\Profesor;
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
        $profesors=Profesor::all('id');
        return [
            'nombre'=>$this->faker->unique()->randomElement(['Matematicas', 'Lengua', 'Geografia', 'Ciencias', 'Informatica']),
            'descripcion'=>$this->faker->text(),
            'creditos'=>$this->faker->numberBetween(1,250),
            'profesor_id'=>$profesors->get(rand(0, count($profesors)-1))
        ];
    }
}
