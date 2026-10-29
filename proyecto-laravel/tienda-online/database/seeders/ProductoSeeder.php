<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $taladros   = Categoria::where('nombre', 'Taladros')->first();
        $llaves     = Categoria::where('nombre', 'Llaves de impacto')->first();
        $amoladoras = Categoria::where('nombre', 'Amoladoras')->first();
        $sierras    = Categoria::where('nombre', 'Sierras')->first();
        $lijadoras  = Categoria::where('nombre', 'Lijadoras')->first();

        $productos = [
            [
                'categoria_id' => $taladros->id,
                'codigo'       => 'CDLI2002',
                'nombre'       => 'Taladro inalámbrico',
                'descripcion'  => 'Voltaje: 20V. Velocidad de No-carga: 0-400/0-1500/min. Max. torsión: 45NM. Capacidad de mandril: 0.8-10mm. Ajustes de par: 15+1.',
                'precio'       => 570.00,
                'imagen'       => 'f1.png',
                'activo'       => true,
            ],
            [
                'categoria_id' => $llaves->id,
                'codigo'       => 'CIRLI2002',
                'nombre'       => 'Llave de impacto inalámbrica',
                'descripcion'  => 'Motor sin escobillas. Voltaje de taladro: 20V. Hex Encastre: 1/4". Velocidad de No-carga: 0-2400/min. Tasa de impacto: 0-3550bpm. Max. torque: 200NM.',
                'precio'       => 850.00,
                'imagen'       => 'f2.png',
                'activo'       => true,
            ],
            [
                'categoria_id' => $amoladoras->id,
                'codigo'       => 'CAGLI1003',
                'nombre'       => 'Amoladora Angular inalámbrica',
                'descripcion'  => 'Voltios: 20V. Velocidad sin carga: 8500/min. Diámetro de disco: 100mm.',
                'precio'       => 400.00,
                'imagen'       => 'f3.png',
                'activo'       => true,
            ],
            [
                'categoria_id' => $sierras->id,
                'codigo'       => 'CRSLI1151',
                'nombre'       => 'Sierra de sable inalámbrica',
                'descripcion'  => 'Voltaje: 20V. Velocidad de No-carga: 0-3200/min. Capacidad de corte: Metal 8mm, Madera 115mm.',
                'precio'       => 570.00,
                'imagen'       => 'f4.png',
                'activo'       => true,
            ],
            [
                'categoria_id' => $sierras->id,
                'codigo'       => 'CSLI1401',
                'nombre'       => 'Sierra circular inalámbrica',
                'descripcion'  => 'Voltaje: 20V. Velocidad de No-carga: 3600rpm. Diámetro de la hoja: 140mm.',
                'precio'       => 630.00,
                'imagen'       => 'f5.png',
                'activo'       => true,
            ],
            [
                'categoria_id' => $lijadoras->id,
                'codigo'       => 'CROSLI2001',
                'nombre'       => 'Lijadora rotorbital inalámbrica',
                'descripcion'  => 'Voltaje: 20V. Velocidad de No-carga: 10000/min. Base: 125mm.',
                'precio'       => 270.00,
                'imagen'       => 'f6.png',
                'activo'       => true,
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}