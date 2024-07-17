{{-- 10-   VISTA PRESIDENTE/INDEX --}}

<a href="{{url('presidente/create')}}" class="btn btn-primary"> <h3> Registrar Nuevo Presidente  </h3> </a>
<br>
<br>

<h1>   LISTADO DE PRESIDENTES AGREGADOS   </h1>

<table class="table table-light">
    <thead class="thead-light">{{-- Cabezera de la consulta --}}
        <tr>
            <th>ID</th>
            <th>IDENTIFICACION</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>AÑO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($presidente as $presidente)
            
        <tr>
            <td>{{$presidente-> id }}</td>
            <td>{{$presidente-> identificacionpresidente }}</td>
            <td>{{$presidente-> nombrepresidente}}</td>
            <td>{{$presidente-> apellidopresidente}}</td>
            <td>{{$presidente-> nacimientopresidente}}</td>
            <td>{{$presidente-> añopresidente}}</td>

            <td>
                {{-- 22- Crear boton Editar: <presidente/id/edit</edit> --}}
                <a href="{{url('/presidente/'.$presidente->id.'/edit')}}">
                Editar 
                </a>

                {{-- 19- ACCION ELIMINAR --}}
                <form action="{{url('/presidente/'.$presidente->id)}}"  method="post" >  {{-- Envio los datos para ser borrados  --}}
                    @csrf
                    {{method_field('DELETE')}} 
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form>

                {{-- Mostrar Presidente --}}
                <a href="{{url('/presidente/'.$presidente->id.'/show')}}">
                Mostrar 
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> 

