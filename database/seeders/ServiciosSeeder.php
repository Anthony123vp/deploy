<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'nombre' => 'Cita_Medica',
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('servicios')->insert([
            'nombre' => 'Examen',
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('servicios')->insert([
            'nombre' => 'Terapia',
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}