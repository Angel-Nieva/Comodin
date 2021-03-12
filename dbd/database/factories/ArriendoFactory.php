<?php

namespace Database\Factories;

use App\Models\Arriendo;
use App\Models\Usuario;
use App\Models\Automovil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArriendoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Arriendo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tiempo'=>$this->faker->numberBetween($min=1,$max=30),
            'id_usuarios'=> Usuario::factory(),
            'id_automovils'=> Automovil::factory(),
            'delete'=> FALSE,
        ];
    }
}
