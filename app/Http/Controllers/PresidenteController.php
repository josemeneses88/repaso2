<?php

namespace App\Http\Controllers;

use App\Models\presidente;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;

class PresidenteController extends Controller
{

    public function index()
    {   // 13- para mostrar en el index
        $datos['presidente']=Presidente::paginate(10);//
        return view ('presidente.index', $datos);
    }

    public function create()// create lo que hace es hacer un envio a storage
    {
        //15 para mostrar la vista create
        return view ('presidente.create');
    }

    public function store(Request $request)
    {
        // 18-  envio de datos --importante
        $campos=[ // validaciones para los campo
            'identificacionpresidente'=>'required|integer',
            'nombrepresidente'=>'required|string|max:50',
            'apellidopresidente'=>'required|string|max:50',
            'nacimientopresidente'=>'required|date',
            'añopresidente'=>'required|integer',
        ];
        
        $mensaje=[// mensaje enviado
            'required'=>'El :attribute es requerido',
        ];

        $validatedData = $request->validate($campos, $mensaje);


        $datosPresidente =  $request->except('_token');// obtiene los datos que le enviaron exceptuando _token
        Presidente::insert($datosPresidente); // Aqui guarda los datos recibidos menos el token
        //return response()->json($datosPresidente); // muestra la informacion que le enviamos 
        return redirect ('presidente')->with('mensaje','EQUIPO AGREGADO CON EXITO');

    }

    public function show($id)
    {
        $presidente = Presidente::findOrFail($id);
        return view('presidente.show', compact('presidente'));
    }


    
    public function edit($id)
    {
        // 25- recuperando los datos de empleado
        $presidente=Presidente::findOrFail($id);
        // 24- Redireccionando a la vista edit
        return view('presidente.edit', compact('presidente'));// enviamos los datos encontrados a la vista
    }

    
    public function update(Request $request, $id)
    {
        //
        $datosPresidente =  $request->except(['_token','_method']);// obtiene los datos que le enviaron exceptuando _token y _method
        Presidente::where('id','=',$id)->update($datosPresidente);// revisa si los id coinciden para hacer el update
        $presidente=Presidente::findOrFail($id);
        //  Redireccionando a la vista edit
        return view('presidente.edit', compact('presidente'));// enviamos los datos encontrados a la vista

    }

    public function destroy($id)// se recibe id para usarlo en la linea  Presidente::destroy($id);
    {
        // 20- ELIMINAR DATOS
        Presidente::destroy($id);
        return redirect('presidente'); // redirecciona a la lista de presidente
    }
}
