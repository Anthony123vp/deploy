<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'dni',
        'nombres',
        'apellidos_paternos',
        'apellidos_maternos',
        'sexo',
        'dia',
        'month',
        'anio',
        'email',
        'celular',
        'insurance',
        'password_1',
        'password_2'
    ];
}
