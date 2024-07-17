<br>
@if(count($errors) > 0) 
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach
    </ul>
</div>
@endif

<br>
<label for=Identificacion> Identificacion </label>
<input type="text" name="identificacionpresidente" value="{{isset($presidente->identificacionpresidente)?$presidente->identificacionpresidente:old('identificacionpresidente')}}" id="identificacionpresidente">
<br>
<br>
<label for=Nombre> Nombre </label> {{--  en iisset pregunta si existe un valor, si existe que lo mueste  $presidente->nombrepresidente : si no, que imprima vacio--}}
<input type="text" name="nombrepresidente" value="{{isset($presidente->nombrepresidente)?$presidente->nombrepresidente:old('nombrepresidente')}}" id="nombrepresidente">
<br>
<br>
<label for=Apellido> Apellido </label>
<input type="text" name="apellidopresidente" value="{{isset($presidente->apellidopresidente)?$presidente->apellidopresidente:old('apellidopresidente')}}" id="apellidopresidente">
<br>
<br>
<label for=Nacimiento> Fecha de nacimiento </label>
<input type="text" name="nacimientopresidente" value="{{isset($presidente->nacimientopresidente)?$presidente->nacimientopresidente:old('nacimientopresidente')}}"  id="nacimientopresidente">
<br>
<br>
<label for=Año> Año </label>
<input type="text" name="añopresidente" value="{{isset($presidente->añopresidente)?$presidente->añopresidente:old('añopresidente')}}" id="añopresidente">
<br>
<br>
<input type="submit" Value="Guardar"> {{-- se pone value para eliminar el dato del envio name="Enviar" --}}
<br>

<a href="{{url('presidente')}}" class="btn btn-primary"> <h3> Regresar  </h3> </a>

