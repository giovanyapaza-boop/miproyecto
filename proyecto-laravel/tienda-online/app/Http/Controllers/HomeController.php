<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::activos()
            ->with('categoria')
            ->orderBy('id')
            ->get();

        return view('home', compact('productos'));
    }
}