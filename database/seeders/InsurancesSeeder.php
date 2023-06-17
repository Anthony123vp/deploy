<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Insurance;
use Illuminate\Support\Facades\DB;

class InsurancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insurances = [
            'BCRP',
            'FEBAN',
            'FOSPEME',
            'La Positiva EPS',
            'La Positiva Seguros',
            'Mapfre Seguros',
            'Otros',
            'Pacifico EPS',
            'Pacifico Seguros',
            'PAMF PETROPERU',
            'Particular',
            'Plan de Salud Familiar',
            'Prepaga ONCOSALUD',
            'Prepagada Clínica EL GOLF',
            'Rimac Seguros y EPS',
            'Sanitas Peru EPS',
            'SEMEFA',
        ];

        foreach ($insurances as $nombre) {
            Insurance::create([
                'nombre' => $nombre,
                'estado' => 1,
            ]);
        }
    }
}