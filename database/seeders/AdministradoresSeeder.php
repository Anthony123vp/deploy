<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Administrador;

class AdministradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $administrador = new Administrador();
        $administrador->id_user = 2; 
        $administrador->nombres = 'Nombadministrador2';
        $administrador->ape_paterno = 'Apellido paterno2';
        $administrador->ape_materno = 'Apellido materno2';
        $administrador->sexo = 'M'; 
        $administrador->celular = '123456789';
        $administrador->dni = '92345676';
        $administrador->f_nacimiento = '2000-01-01';
        $administrador->estado = '1';
        $administrador->created_at = now();
        $administrador->updated_at = now();
        $administrador->save();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}