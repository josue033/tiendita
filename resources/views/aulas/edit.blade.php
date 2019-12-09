@extends ('layaout');

@if ($errors->any())

    <ul>
    
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    
    </ul>

@endif

<form action="{{route('aulas.update',$aula)}}" method="post">
@csrf
@method('PUT')
<input type="text" name="nombre" id="nombre" value="{{$aula->nombre}}">
<input type="text" name="capacidad" id="capacidad" value="{{$aula->capacidad}}">
<input type="submit" value="Guardar">
</form>