@extends('layouts.plantilla')

@section('title', 'Reclamo ' . $reclamo->name)

@section('content')
    <h1>Incidencia de registradad por: {{$reclamo->name}}</h1>
    <a href="{{route('reclamos.index')}}">Volver a Reclamos</a>
    <br>
    {{-- <a href="{{route('reclamos.edit', $reclamo)}}">Editar Reclamo</a> --}}
        <p><strong>Categoría: </strong>{{$reclamo->categoria}}</p>
        <p><strong>Lugar: </strong>{{$reclamo->distrito}}</p>
        <p><strong>Distrito: </strong>{{$reclamo->direccion}}</p>
        <p><strong>Correo: </strong>{{$reclamo->email}}</p>
        <p><strong>Descripcion: </strong>{{$reclamo->descripcion}}</p>

        <form action="{{route('reclamos.envio', $reclamo)}}" class="mt-4" method="POST">            
            @csrf
            <button type="submit" class="btn bth-danger w-full">Enviar Mensaje</button>
        </form>        

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>        
    @endif
    
    {{-- <form action="{{route('reclamos.destroy', $reclamo)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form> --}}
    <br>
@endsection