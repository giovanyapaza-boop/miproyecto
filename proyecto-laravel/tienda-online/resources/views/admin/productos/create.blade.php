@extends('layouts.app')

@section('title', 'Nuevo Producto')

@section('content')
<div class="container admin-container">
    
    <div class="admin-form-container">
        <h2 class="admin-title" style="margin-bottom: 20px;">Subir Nuevo Producto</h2>

        <form action="{{ route('admin.productos.store') }}" method="POST" class="formulario-contacto admin-form" enctype="multipart/form-data">
            @csrf
            
            <div class="campo">
                <label>Código del Producto</label>
                <input type="text" name="codigo" required placeholder="Ej: CDLI2002" value="{{ old('codigo') }}">
                @error('codigo') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="campo">
                <label>Nombre</label>
                <input type="text" name="nombre" required placeholder="Ej: Taladro Inalámbrico" value="{{ old('nombre') }}">
            </div>

            <div class="campo">
                <label>Categoría</label>
                <select name="categoria_id" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="campo">
                <label>Precio (Bs.)</label>
                <input type="number" step="0.01" name="precio" required placeholder="Ej: 570.00" value="{{ old('precio') }}">
            </div>

            <div class="campo">
                <label>Descripción</label>
                <textarea name="descripcion" rows="4" required placeholder="Voltaje: 20V...">{{ old('descripcion') }}</textarea>
            </div>

            <div class="campo">
                <label>Imagen del Producto</label>
                <input type="file" name="imagen" accept="image/*">
                <span class="input-help">Formatos aceptados: JPG, PNG.</span>
            </div>

            <button type="submit" class="btn-contacto">Guardar Producto</button>
        </form>
    </div>
</div>
@endsection