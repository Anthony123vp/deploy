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
        'id_reserva',
        'terapias',
        'examenes',
        'medicinas',
        'comentario',
        'estado',
   ];

//    public function reserva(){
//     return $this->belongsTo(Reserva::class, 'id_reserva');
//    }
}
