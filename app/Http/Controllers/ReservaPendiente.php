<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaPendiente extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $citas_pendientes = DB::select("
        SELECT a.id_reserva,f.nombre AS especialidad,serv.nombre as servicio  ,concat(h.nombres,' ',h.ape_paterno)AS medico,horario.fecha,horario.hora_inicio FROM cita_medica a
        
        INNER JOIN serviciosmedhost c ON a.id_servicio_medhost = c.id_servicio_medhost
        INNER JOIN servicios_especialidades e ON c.id_servicio_especialidad=e.id_servicio_especialidad
        INNER JOIN especialidades f ON e.id_especialidad=f.id_especialidad
        INNER JOIN servicios serv ON e.id_servicio=serv.id_servicio
        
        INNER JOIN medico_horarios g ON a.id_medico_horario=g.id_medico_horario
        INNER JOIN horarios horario ON g.id_horario = horario.id_horario
        INNER JOIN medicos h ON g.id_medico = h.id_medico");

        return view ('Paciente_botones\citas_pendiente\index',['citas'=>$citas_pendientes]);
    }
}
