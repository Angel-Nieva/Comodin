<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioSucursal extends Model
{
    use HasFactory;

    public function usuario(){
    	return $this->belongsTo(Usuario::class);
    }

    public function sucursal(){
    	return $this->belongsTo(Sucursal::class);
    }
}
