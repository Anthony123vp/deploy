<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Receta extends Model
{
    use HasFactory;
   protected $table = 'receta_medica';

   protected $primaryKey = 'id_receta';

   protected $fillable = [
        'terapias',
        'examenes',
        'id_reserva',
        'motivo_ingreso',
        'diagnostico_ingreso',
        'comorbilidades',
        'procedimientos',
        'medicamentos_recibidos',
        'comentario_doctor',
        'estado_paciente',
        'medicamentos_casa',
        'img_firma_doctor',
        'estado',
   ];
//    public function reserva(){
//     return $this->belongsTo(Reserva::class, 'id_reserva');
//    }
}
