<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio_Medhost extends Model
{
    use HasFactory;

    protected $table = 'serviciosmedhost';

    protected $primaryKey = 'id_servicio_medhost';

    protected $fillable = [
        'id_servicio_especialidad',
        'nombre',
        'precio',
        'estado',
    ];

    // public function servicio_especialidad()
    // {
    //     return $this->belongsTo(Servicio_Especialidad::class, 'id_servicio_especialidad');
    // }

    public function servicio_especialidad()
    {
        return $this->belongsTo(Servicio_Especialidad::class, 'id_servicio_especialidad')->with('especialidad');
    }

}

