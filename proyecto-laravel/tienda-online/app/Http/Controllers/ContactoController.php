<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre'   => 'required|string|max:100',
            'correo'   => 'required|email|max:150',
            'telefono' => 'nullable|string|max:20',
            'asunto'   => 'required|string|in:consulta-producto,precios,distribucion,otro',
            'mensaje'  => 'required|string|max:1000',
        ], [
            'nombre.required'  => 'El nombre es obligatorio.',
            'correo.required'  => 'El correo es obligatorio.',
            'correo.email'     => 'Debes ingresar un correo válido.',
            'asunto.required'  => 'Debes seleccionar un asunto.',
            'asunto.in'        => 'El asunto seleccionado no es válido.',
            'mensaje.required' => 'El mensaje no puede estar vacío.',
        ]);

        Contacto::create($datosValidados);

        return redirect()->route('home', ['#contacto'])->with('success', '¡Gracias! Tu consulta fue enviada con éxito. Te contactaremos pronto.');
    }
}