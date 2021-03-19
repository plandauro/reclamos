<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- FAVICON -->
    <!-- ESTILOS -->

    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <style>
        .active{
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- header -->
    <!-- nav -->
    
    @include('layouts.partials.header')
    
    @yield('content')

    @include('layouts.partials.footer')

    <!-- footer -->

    <!-- script -->
    
</body>
</html>