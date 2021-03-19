@extends('layouts.plantilla')

@section('title', 'Reclamos edit')

@section('content')
    <h1>EDITAR UN RECLAMO</h1>
    
    <form action="{{route('reclamos.update', $reclamo)}}" method="post">

        @csrf

        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name', $reclamo->name)}}">
        </label>

        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Tipo Documento:<br>
            <input type="text" name="type_document" value="{{old('type_document', $reclamo->type_document)}}">
        </label>
        
        @error('type_document')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Numero Documento:<br>
            <input type="number" name="number_document" value="{{old('numer_document', $reclamo->number_document)}}">
        </label>

        @error('number_document')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Region:<br>
            <input type="text" name="region" value="{{old('region', $reclamo->region)}}">
        </label>

        @error('region')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Provincia:<br>
            <input type="text" name="provincia" value="{{old('provincia', $reclamo->provincia)}}">
        </label>

        @error('provincia')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Distrito:<br>
            <input type="text" name="distrito" value="{{old('distrito', $reclamo->distrito)}}">
        </label>

        @error('distrito')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Categoría:<br>
            <input type="text" name="categoria" value="{{old('categoria', $reclamo->categoria)}}">
        </label>

        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Lugar:<br>
            <input type="text" name="direccion" value="{{old('direccion', $reclamo->direccion)}}">
        </label>

        @error('direccion')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Correo:<br>
            <input type="text" name="email" value="{{old('email', $reclamo->email)}}">
        </label>

        @error('email')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Descripción:<br>
            <textarea name="descripcion" rows="8">{{old('descripcion', $reclamo->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar Reclamo</button>        

    </form>
@endsection