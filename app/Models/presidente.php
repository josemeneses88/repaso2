<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presidente extends Model
{
    use HasFactory;

    public function equipo(){// relacion uno a uno con equipo
        return $this->hasOne('App\Models\equipo');
    }
}
