

{{-- 17- Creacion de formulario de envio --}}
<h1>HOLA DESDE CREATE</h1>

{{-- desde aqui se envia a storage, con el uso del methoso post--}}
<form action="{{url('/presidente')}}" method="post" enctype="multipart/form-data">
    @csrf {{-- LLave de seguridad obligatoria --}}
    {{--  Incluye lo que esta en formulario  --}}
    @include('presidente.form');
</form>