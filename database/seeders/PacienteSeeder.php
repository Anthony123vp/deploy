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
        $paciente->nombres = 'Nombre del paciente';
        $paciente->ape_paterno = 'Apellido paterno';
        $paciente->ape_materno = 'Apellido materno';
        $paciente->sexo = 'M'; 
        $paciente->celular = '123456789';
        $paciente->dni = '18345678';
        $paciente->f_nacimiento = '2000-01-01';
        $paciente->estado = '1';
        $paciente->created_at = now();
        $paciente->updated_at = now();
        $paciente->save();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}