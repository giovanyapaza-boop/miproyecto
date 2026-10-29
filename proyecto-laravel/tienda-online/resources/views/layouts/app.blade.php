<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Importadora Gikar - Venta de herramientas eléctricas de calidad en Oruro, Bolivia. Taladros, llaves de impacto, amoladoras y más.">
    <title>@yield('title', 'Tienda de Herramientas | Importadora Gikar')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>