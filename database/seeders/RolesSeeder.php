<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('roles')->insert([
            'nombre_rol' => 'Paciente',
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'nombre_rol' => 'Administrador',
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'nombre_rol' => 'Recepcionista',
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('roles')->insert([
            'nombre_rol' => 'Médico',
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}