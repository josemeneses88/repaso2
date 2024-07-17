{{--  7-  CREAR FORMULARIO --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Vista Asociar:</h1>

    <form action="{{route('equipopartido.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <br>
        <h1>Equipo:</h1>
        <select name="equipo_id">
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->id }} - {{ $equipo->nombreequipo}}</option>
            @endforeach
        </select>
        <br>
        <h1>Partido:</h1>    
        <select name="partido_id">
            @foreach($partidos as $partido) {{--  plural luego -> singular  --}}
                <option value="{{ $partido->id }}">{{ $partido->id }} - {{ $partido->codigopartido }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>

</body>
</html>