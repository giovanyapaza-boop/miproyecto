@extends('layouts.base')

@section('contenido')
    <p>La Espiga es una pasteleria de barrio donde cada torta se hornea con dedicacion.</p>

    <p>Hay {{ count($tortas) }} tortas en la vitrina.</p>

    @foreach ($tortas as $torta)
        <div>
            <strong>{{ $torta->sabor }}</strong> — {{ $torta->precio }} Bs
        </div>
    @endforeach

    <p>Vitrina atendida por Giovany Enrique Apaza Apaza</p>

    <a href="/tortas/nuevo">Registrar una nueva torta</a>
@endsection