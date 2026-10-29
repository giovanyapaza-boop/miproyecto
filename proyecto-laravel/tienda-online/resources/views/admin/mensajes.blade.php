@extends('layouts.app')

@section('title', 'Mensajes de Clientes | Importadora Gikar')

@section('content')
<div class="container admin-container">
    
    <div class="admin-header">
        <h2 class="admin-title">Bandeja de Entrada</h2>
        <span class="admin-badge">Total: {{ $mensajes->count() }}</span>
    </div>

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Datos del Cliente</th>
                    <th>Asunto</th>
                    <th>Mensaje / Consulta</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mensajes as $mensaje)
                    <tr>
                        <td class="celda-fecha">
                            {{ $mensaje->created_at->format('d/m/Y H:i') }}
                        </td>
                        <td class="celda-cliente">
                            <strong>{{ $mensaje->nombre }}</strong>
                            <span>{{ $mensaje->correo }}</span>
                            @if($mensaje->telefono)
                                <span>{{ $mensaje->telefono }}</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge-asunto">
                                {{ str_replace('-', ' ', $mensaje->asunto) }}
                            </span>
                        </td>
                        <td style="line-height: 1.5; max-width: 400px;">
                            {{ $mensaje->mensaje }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="texto-vacio">
                            No hay consultas nuevas por el momento.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection