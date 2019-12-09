@extends('layaout');

@section('content');

<table border="1">
<th>ID</th>
<th>nombre</th>
<th>capacidad</th>
<th>Acciones</th>

@foreach($aulas as $aula)
<tr>
<td>{{$aula->id}}</td>
<td>{{$aula->nombre}}</td>
<td>{{$aula->capacidad}}</td>
<td><a href="{{route('aulas.edit',$aula)}}">Editar</a>

<form action="{{route('aulas.destroy',$aula)}}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="Eliminar">
</form>
</td>

</tr>
@endforeach

</table>

<a href="{{route('aulas.create')}}">Agregar aula</a>

@stop