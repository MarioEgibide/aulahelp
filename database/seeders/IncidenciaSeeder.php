<?php

namespace Database\Seeders;

use App\Models\Incidencia;
use Illuminate\Database\Seeder;

class IncidenciaSeeder extends Seeder
{
    public function run(): void
    {
        Incidencia::query()->delete();

        Incidencia::query()->create([
            'titulo' => 'No funciona el proyector',
            'equipo' => 'Aula 2 - PC Profesor',
            'descripcion' => 'Al encender el equipo no se detecta salida de vídeo hacia el proyector.',
        ]);

        Incidencia::query()->create([
            'titulo' => 'Ratón averiado',
            'equipo' => 'Aula 1 - Equipo 07',
            'descripcion' => 'El clic izquierdo falla de forma intermitente.',
        ]);

        Incidencia::query()->create([
            'titulo' => 'Teclado sin varias teclas',
            'equipo' => 'Aula 3 - Equipo 12',
            'descripcion' => 'Las teclas enter y espacio no responden correctamente.',
        ]);
    }
}
