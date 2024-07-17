<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;

    public function presidente(){// relacion uno a uno con presidente
        return $this->belongsTo('App\Models\presidente');
    }

    public function jugador(){// relacion uno a muchos con jugador
        return $this->belongsTo('App\Models\jugador');
    }

    public function partidos(){// relacion muchos a muchos con  partido
        return $this->belongsToMany(Partido::class, 'equipo_partidos', 'equipo_id','partido_id');
    }
}
