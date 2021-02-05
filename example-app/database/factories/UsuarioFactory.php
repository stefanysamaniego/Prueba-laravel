<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this -> faker-> name,
            'nameCompleto' => $this-> faker-> name,
            'email'=>$this->faker->email,
            'phone'=>$this->faker->phoneNumber,
            'age'=>$this->faker->numberBetween(1,70),
            'dateBirth'=>$this->faker->date,
            'configuracion_id'=>1,
        ];
    }
}
