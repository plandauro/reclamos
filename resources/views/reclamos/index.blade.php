@extends('layouts.plantilla')

@section('title', 'Reclamos')

@section('content')
    <h1>Bienvenido al GENERADOR DE RECLAMOS</h1>
    <a href="{{route('reclamos.create')}}">Ingresar Reclamo</a>
    <ul>
        @foreach ($reclamos as $reclamo)
            <li>
                <a href="{{route('reclamos.show', $reclamo)}}">{{$reclamo->name}}</a>
                <br>
            </li>
        @endforeach

    </ul>

    {{$reclamos->links()}}

@endsection