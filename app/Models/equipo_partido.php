<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo_partido extends Model
{
    use HasFactory;


    protected $table = 'equipo_partidos';// solucion al error de que la tabla no existe
}
