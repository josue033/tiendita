@extends('layaout')

@section('title','Mi titulo')


@section('content')

    <h1>Mi seccion heredada</h1>

    @for($i=0; $i<=10; $i++)
     @if($i%2==0)
         {{$i}} es par
    @else
        {{$i}}
    @endif
    @endfor

    <ul>
    @foreach($elementos as $elemento)
    <li>{{$elemento}}</li>
    @endforeach
    </ul>

@stop
