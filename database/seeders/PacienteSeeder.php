<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $paciente = new Paciente();
        $paciente->id_user = 1; 
        $paciente->id_insurance = 1;
        $paciente->nombres = 'Anthony';
        $paciente->ape_paterno = 'Vilcatoma';
        $paciente->ape_materno = 'Palacios';
        $paciente->sexo = 'M'; 
        $paciente->celular = '987352145';
        $paciente->dni = '72861324';
        $paciente->f_nacimiento = '2004-10-19';
        $paciente->estado = '1';
        $paciente->created_at = now();
        $paciente->updated_at = now();
        $paciente->save();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}