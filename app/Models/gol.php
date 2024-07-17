<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gol extends Model
{
    use HasFactory;

    public function jugador(){// relacion uno a muchos con jugador
        return $this->belongsTo('App\Models\jugador');
    }

    public function partidos(){// relacion uno a muchos con partido
        return $this->hasMany('App\Models\partido');
    }

}
