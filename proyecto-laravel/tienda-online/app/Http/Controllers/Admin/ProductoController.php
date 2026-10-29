<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::orderBy('id', 'desc')->get();
        return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'codigo' => 'required|string|max:20|unique:productos,codigo',
            'nombre' => 'required|string|max:150',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $datos['activo'] = true;

        if ($request->hasFile('imagen')) {
            $nombreImagen = $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->move(public_path('image'), $nombreImagen);
            $datos['imagen'] = $nombreImagen;
        } else {
            $datos['imagen'] = 'f1.png';
        }

        Producto::create($datos);

        return redirect()->route('admin.productos.index')->with('success', '¡Producto agregado con éxito!');
    }
}