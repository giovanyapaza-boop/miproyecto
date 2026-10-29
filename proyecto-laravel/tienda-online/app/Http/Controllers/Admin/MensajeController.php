<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacto;

class MensajeController extends Controller
{
    public function index()
    {
        $mensajes = Contacto::orderBy('created_at', 'desc')->get();

        return view('admin.mensajes', compact('mensajes'));
    }
}