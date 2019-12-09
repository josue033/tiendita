@extends ('layaout');

@if ($errors->any())

    <ul>
    
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    
    </ul>

@endif

<form action="{{route('aulas.store')}}" method="post">
@csrf
<input type="text" name="nombre" id="nombre">
<input type="text" name="capacidad" id="capacidad">
<input type="submit" value="Guardar">
<select name="id_edificio" id="id_edificio">
@foreach($edificios as $edificio)
    <option value="{{$edificio->id}}">{{$edificio->nombre}}</option>
    @endforeach

</select>
</form>