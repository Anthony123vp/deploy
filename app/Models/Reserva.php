<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'cita_medica';
    protected $primaryKey  ='id_reserva';

    protected $fillable = [
        'id_paciente',
        'estado',
    ];
}
