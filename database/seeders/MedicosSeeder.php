<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Medico;

class MedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $medico = new Medico();
        $medico->id_user = 4; 
        $medico->id_especialidad = 1;
        $medico->nombres = 'Nombre del medico';
        $medico->ape_paterno = 'Apellido paterno';
        $medico->ape_materno = 'Apellido materno';
        $medico->sexo = 'M'; 
        $medico->celular = '123456789';
        $medico->dni = '12645678';
        $medico->f_nacimiento = '2000-01-01';
        $medico->estado = '1';
        $medico->created_at = now();
        $medico->updated_at = now();
        $medico->save();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}