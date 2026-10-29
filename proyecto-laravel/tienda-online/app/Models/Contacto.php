<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contactos';

    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'asunto',
        'mensaje',
        'leido',
        'respondido',
    ];

    protected $casts = [
        'leido' => 'boolean',
        'respondido' => 'boolean',
    ];
}