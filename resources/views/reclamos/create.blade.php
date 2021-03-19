@extends('layouts.plantilla')

@section('title', 'Reclamos create')

@section('content')
    <h1>REGISTRAR UNA INCIDENCIA</h1>
    
    <form action="{{route('reclamos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Tipo Documento:<br>
            <input type="text" name="type_document" value="{{old('type_document')}}">
        </label>

        @error('type_document')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Numero Documento:<br>
            <input type="number" name="number_document" value="{{old('number_document')}}">
        </label>

        @error('number_document')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Region:<br>
            <input type="text" name="region" value="{{old('region')}}">
        </label>

        @error('region')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Provincia:<br>
            <input type="text" name="provincia" value="{{old('provincia')}}">
        </label>

        @error('provincia')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Distrito:<br>
            <input type="text" name="distrito" value="{{old('distrito')}}">
        </label>

        @error('distrito')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Categoría:<br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Lugar:<br>
            <input type="text" name="direccion" value="{{old('direccion')}}">
        </label>

        @error('direccion')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Correo:<br>
            <input type="text" name="email" value="{{old('email')}}">
        </label>

        @error('email')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <label>
            Descripción:<br>
            <textarea name="descripcion" rows="8">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>   
        @enderror

        <br>
        <br>
        <button type="submit">Registrar Reclamo</button>        

    </form>
@endsection