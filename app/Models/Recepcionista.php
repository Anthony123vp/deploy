<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcionista extends Model
{
    use HasFactory;

    protected $table = 'recepcionistas';

    protected $primaryKey = 'id_recepcionista';

    protected $fillable = [
        'id_user',
        'nombres',
        'ape_paterno',
        'ape_materno',
        'sexo',
        'celular',
        'dni',
        'f_nacimiento',
        'estado',
    ];
}

