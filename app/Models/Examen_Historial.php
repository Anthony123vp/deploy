<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen_Historial extends Model
{
    use HasFactory;
    protected $connection = 'medhosthistorial';
    protected $primaryKey = "id_examen";
    protected $table = 'examen_resultado';
}
