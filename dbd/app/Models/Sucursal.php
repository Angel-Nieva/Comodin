<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    public function usuariosucursal(){
    	return $this->hasMany(UsuarioSucursal::class);
    }

    public function automovil(){
    	return $this->hasMany(Automovil::class);
    }
}
