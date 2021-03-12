<?php

namespace Database\Factories;

use App\Models\Automovil;
use App\Models\Sucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutomovilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Automovil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'color'=> $this->faker->safeColorName,
            'patente'=> $this->faker->word,
            'año'=> $this->faker->year($max = 'now'),
            'modelo'=> $this->faker->randomElement(['Ford','Fiat','Honda','Hyundai','Nissan','Volkswagen','Toyota','Chevrolet','Mercedes-Benz']),
            'valorRenta'=> $this->faker->numberBetween($min=15000,$max=100000),
            'disponibilidad'=> $this->faker->boolean ,
            'id_sucursals'=> Sucursal::factory(),
            'delete'=> FALSE,
        ];
    }
}
