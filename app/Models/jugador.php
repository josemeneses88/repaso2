<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;

    public function equipos(){// relacion uno a muchos con equipo
        return $this->hasMany('App\Models\equipo');
    }

    public function gols(){// relacion uno a muchos con gol
        return $this->hasMany('App\Models\gol');
    }

}
