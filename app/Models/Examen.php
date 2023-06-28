<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Examen extends Model
{
    use HasFactory;
   protected $table = 'examen_resultado';

   protected $primaryKey = 'id_examen';

   protected $fillable = [
        'id_reserva',
        'signos_vitales',
        'sistema_cardiovascular',
        'sistema_gastrointestinal',
        'sistema_musculoesqueletico',
        'sistema_nervioso',
        'sistema_endocrino',
        'sistema_genitourinario',
        'sistema_inmunologico',
        'sistema_mental',
        'img_firma_doctor',
        'estado',
   ];
//    public function reserva(){
//     return $this->belongsTo(Reserva::class, 'id_reserva');
//    }
}