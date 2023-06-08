<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

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
    ];
}
