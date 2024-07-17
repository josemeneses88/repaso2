<?php

namespace App\Http\Controllers;


// 1- LLamar los modelos implicados 
use App\Models\equipo;
use App\Models\partido;
use App\Models\equipo_partido;
use Illuminate\Http\Request;

class EquipoPartidoController extends Controller
{

    // 2- funcion asociar
    public function asociar(){
        
        $equipos = Equipo::all();// 3- Obtener todos los equipos
        $partidos = Partido::all(); // 4- Obtener todos los partidos
        
        return view('equipo_partido.asociar', compact('equipos', 'partidos')); // 5- Mostrar la vista con los datos
    }


    // 6- Funcion para asociar los equipos a los partidos
    public function store(Request $request){
        
        $partido = Partido::find($request->partido_id);
        $partido->Equipos()->attach($request->equipo_id);
    } 
    
}
