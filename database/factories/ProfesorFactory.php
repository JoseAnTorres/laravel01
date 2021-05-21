<?php

namespace Database\Factories;

use App\Models\Asignatura;
use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $asignaturas=Asignatura::all('id');
        return [
            'nombre'=>$this->faker->firstName(),
            'apellidos'=>$this->faker->lastName,
            'email'=>$this->faker->unique()->freeEmail,
            'localidad'=>$this->faker->city,
            'asignatura_id'=>$asignaturas->get(rand(0, count($asignaturas)-1))
        ];
    }
}
