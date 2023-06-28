<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terapia extends Model
{
    use HasFactory;
    protected $table = 'terapia_resultado';
 
    protected $primaryKey = 'id_terapia';
 
    protected $fillable = [
         'id_reserva',
         'objetivos_tratamiento',
         'modalidad_terapia',
         'frecuencia_sesiones',
         'duracion_tratamiento',
         'intervenciones_terapeuticas',
         'recomendaciones',
         'img_firma_doctor',
         'estado',
    ];
 //    public function reserva(){
 //     return $this->belongsTo(Reserva::class, 'id_reserva');
 //    }


}
