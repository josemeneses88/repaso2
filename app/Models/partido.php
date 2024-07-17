<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    use HasFactory;

    public function gol (){// relacion uno a muchos con gol
        return $this->belongsTo('App\Models\gol');
    }

    public function equipos (){// relacion muchos a muchos con equipo, enviar de esta manera si genera error de que no esta creada la tabla equipo_partido
        return $this->belongsToMany(Equipo::class, 'equipo_partidos', 'partido_id', 'equipo_id');
    }
}
