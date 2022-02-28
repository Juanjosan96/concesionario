<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coche;
class CocheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Coche::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'marca'=>$this->faker->sentence(),
            'modelo'=>$this->faker->sentence(),
            'anio'=>$this->faker->numerify( '19##' ),
            'matricula'=>$this->faker->unique()->sentence(),
            'color'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'imagen'=>$this->faker->sentence(),

        ];
    }
    
}
