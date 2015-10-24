@extends('layout')
@section('title','Listado de Personas')

@section ('contenido')

<h1> Listado de Personas</h1>

<ul>
    @foreach($personas as $item)
    <li> {{$item->id}} {{$item-> apellido}}, {{$item-> nombre}}  {{$item->numero_documento}} 
        <a href="{{url('/personas/'.$item->id.'/borrar')}}">Borrar</a> </li>
    @endforeach
    
</ul>
@endsection