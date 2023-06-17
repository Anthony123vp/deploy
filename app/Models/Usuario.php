<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'email',
        'password',
        'password_2',
        'estado',
        'id_rol',
    ];


    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }
}

