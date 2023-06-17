<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidad;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidades = [
            'Cardiología',
            'Dermatología',
            'Gastroenterología',
            'Neurología',
            'Oftalmología',
            'Oncología',
            'Pediatría',
            'Psiquiatría',
            'Traumatología',
            'Urología',
        ];

        foreach ($especialidades as $nombre) {
            Especialidad::create([
                'nombre' => $nombre,
                'estado' => 1,
            ]);
        }
    }
}