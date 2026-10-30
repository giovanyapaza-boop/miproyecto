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
        <input type="text" id="sabor" name="sabor" value="{{ old('sabor') }}">

        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio" value="{{ old('precio') }}">

        <label for="stock">Stock en vitrina:</label>
        <input type="number" id="stock" name="stock" min="0" value="{{ old('stock', 0) }}">

        <button type="submit">Registrar torta</button>
    </form>

    <a href="/tortas">Volver a la vitrina</a>
@endsection