<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio_Especialidad extends Model
{
    use HasFactory;

    protected $table = 'servicios_especialidades';

    protected $primaryKey = 'id_servicio_especialidad';

    protected $fillable = [
        'id_servicio',
        'id_especialidad',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }
    
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'id_especialidad');
    }
}

