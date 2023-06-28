<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Consultorio;

class ConsultorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $especialidades = [
            'A','B','C','D','E','F','G','H','I','J'
        ];


        $indice=1;
        foreach ($especialidades as $letra) {
            for($i=1;$i<6;$i++) {
                Consultorio::create([
                    'id_especialidad' => $indice,
                    'cod_habitacion' => 'H'.$letra.''.$i.'0'.'M',
                    'estado' => 1,
                ]);
            };
            $indice++;
        };
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
