<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arriendo;
use App\Models\Automovil;
use App\Models\Permiso;
use App\Models\Rol;
use App\Models\RolPermiso;
use App\Models\Sucursal;
use App\Models\User;
use App\Models\Usuario;
use App\Models\UsuarioRol;
use App\Models\UsuarioSucursal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Automovil::factory(5)->create();
        Permiso::factory(5)->create();
        Rol::factory(5)->create();
        Sucursal::factory(5)->create();
        Usuario::factory(5)->create();
        Arriendo::factory(5)->create();
        RolPermiso::factory(5)->create();
        UsuarioRol::factory(5)->create();
        UsuarioSucursal::factory(5)->create();
    }
}
