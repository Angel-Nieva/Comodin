<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function usuariorol(){
    	return $this->hasMany(UsuarioRol::class);
    }

    public function usuariosucursal(){
    	return $this->hasMany(UsuarioSucursal::class);
    }

    public function arriendo(){
    	return $this->hasOne(Arriendo::class);
    }

}
