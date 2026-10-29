<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'Taladros', 'descripcion' => 'Taladros inalámbricos y percutores'],
            ['nombre' => 'Llaves de impacto', 'descripcion' => 'Llaves de impacto inalámbricas'],
            ['nombre' => 'Amoladoras', 'descripcion' => 'Amoladoras angulares'],
            ['nombre' => 'Sierras', 'descripcion' => 'Sierras circulares y de sable'],
            ['nombre' => 'Lijadoras', 'descripcion' => 'Lijadoras rotorbitales'],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}