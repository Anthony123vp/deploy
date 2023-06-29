<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terapia_Historial extends Model
{
    use HasFactory;
    protected $connection = 'medhosthistorial';
    protected $primaryKey = "id_terapia";
    protected $table = 'terapia_resultado';
}
