<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{
            color: blueviolet;
        }
    </style>

</head>
<body>
    <h1>CONSTANCIA DE INCIDENCIA TIPO {{$reclamo->categoria}} </h1>
    <p>UNAB | 2021</p>

    <p><strong>Nombre del Usuario: </strong>{{$reclamo->name}}</p>
    <p><strong>Categoría: </strong>{{$reclamo->categoria}}</p>
    <p><strong>Lugar: </strong>{{$reclamo->direccion}}</p>
    <p><strong>Distrito: </strong>{{$reclamo->distrito}}</p>
    <p><strong>Correo: </strong>{{$reclamo->email}}</p>
    <p><strong>Descripcion: </strong>{{$reclamo->descripcion}}</p>
    
</body>
</html>