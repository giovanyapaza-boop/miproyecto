@extends('layouts.base')

@section('contenido')
    <h2>Nueva torta</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/tortas/nuevo" method="POST">
        @csrf

        <label for="sabor">Sabor de la torta:</label>
        <input type="text" id="sabor" name="sabor">

        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio">

        <button type="submit">Registrar torta</button>
    </form>

    <a href="/tortas">Volver a la vitrina</a>
@endsection