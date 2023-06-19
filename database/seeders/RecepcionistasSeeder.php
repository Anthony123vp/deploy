<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Recepcionista;

class RecepcionistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $recepcionista = new Recepcionista();
        $recepcionista->id_user = 3; 
        $recepcionista->nombres = 'Nombrerecepcionista2';
        $recepcionista->ape_paterno = 'Apellido paterno2';
        $recepcionista->ape_materno = 'Apellido materno2';
        $recepcionista->sexo = 'M'; 
        $recepcionista->celular = '123456783';
        $recepcionista->dni = '12345660';
        $recepcionista->f_nacimiento = '2000-01-01';
        $recepcionista->estado = '1';
        $recepcionista->created_at = now();
        $recepcionista->updated_at = now();
        $recepcionista->save();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}