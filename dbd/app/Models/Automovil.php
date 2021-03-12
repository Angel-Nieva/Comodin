<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    use HasFactory;

    public function sucursal(){
    	return $this->belongsTo(Sucursal::class);
    }

    public function arriendo(){
    	return $this->hasOne(Arriendo::class);
    }
}
