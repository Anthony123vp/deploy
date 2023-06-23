<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidad;
use Illuminate\Support\Facades\DB;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}