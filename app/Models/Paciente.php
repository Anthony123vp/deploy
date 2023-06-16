<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';

    protected $primaryKey = 'id_paciente';

    protected $fillable = [
        'id_user',
        'nombres',
        'ape_paterno',
        'ape_materno',
        'sexo',
        'celular',
        'dni',
        'f_nacimiento',
        'insurance',
        'estado',
    ];
}
