@extends('layouts.app')

@section('title', 'Gestionar Productos')

@section('content')
<div class="container admin-container">
    
    <div class="admin-header">
        <h2 class="admin-title">Gestión de Productos</h2>
        <a href="{{ route('admin.productos.create') }}" class="btn-1" style="text-decoration: none;">+ Nuevo Producto</a>
    </div>

    @if(session('success'))
        <div class="mensaje-error exito" style="margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $producto)
                    <tr>
                        <td><strong>{{ $producto->codigo }}</strong></td>
                        <td>{{ $producto->nombre }}</td>
                        <td class="celda-precio">{{ number_format($producto->precio, 2) }} Bs.</td>
                        <td>
                            @if($producto->activo)
                                <span class="estado-activo">Activo</span>
                            @else
                                <span class="estado-inactivo">Inactivo</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="texto-vacio">No hay productos cargados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection