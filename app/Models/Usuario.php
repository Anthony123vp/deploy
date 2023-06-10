<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $primaryKey = 'id_usuarios';

    protected $fillable = [
        'email',
        'password_1',
        'password_2',
        'estado',
        'id_rol',
    ];
}

