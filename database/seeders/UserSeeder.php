<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $user1 = new Usuario();
        $user1->id_rol = 1;
        $user1->email = 'usuario1@example.com';
        $user1->password = bcrypt('contraseña1');
        $user1->password_2 = bcrypt('contraseña1');
        $user1->estado = '1';
        $user1->save();
        
        $user2 = new Usuario();
        $user2->id_rol = 2;
        $user2->email = 'usuario2@example.com';
        $user2->password = bcrypt('contraseña2');
        $user2->password_2 = bcrypt('contraseña2');
        $user2->estado = '1';
        $user2->save();

        $user3 = new Usuario();
        $user3->id_rol = 3;
        $user3->email = 'usuario3@example.com';
        $user3->password = bcrypt('contraseña3');
        $user3->password_2 = bcrypt('contraseña3');
        $user3->estado = '1';
        $user3->save();

        $user4 = new Usuario();
        $user4->id_rol = 4;
        $user4->email = 'usuario4@example.com';
        $user4->password = bcrypt('contraseña4');
        $user4->password_2 = bcrypt('contraseña4');
        $user4->estado = '1';
        $user4->save();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
