<?php

namespace Database\Factories;

use App\Models\UsuarioSucursal;
use App\Models\Usuario;
use App\Models\Sucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioSucursalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioSucursal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuarios'=> Usuario::factory(),
            'id_sucursals'=> Sucursal::factory(),
            'delete'=> FALSE,
        ];
    }
}
