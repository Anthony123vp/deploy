<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita_Medica_Historial extends Model
{
    use HasFactory;
    protected $connection = 'medhosthistorial';
    protected $primaryKey = "id_receta";
    protected $table = 'receta_medica';
}
