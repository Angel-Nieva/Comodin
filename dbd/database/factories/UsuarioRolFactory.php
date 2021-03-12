<?php

namespace Database\Factories;

use App\Models\UsuarioRol;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioRolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioRol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuarios'=> Usuario::factory(),
            'id_rols'=> Rol::factory(),
            'delete'=> FALSE,
        ];
    }
}
