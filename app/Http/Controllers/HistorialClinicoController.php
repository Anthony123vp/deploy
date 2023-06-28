<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialClinico;
use Illuminate\Support\Facades\Auth;
use App\Models\Paciente;
use App\Models\Cita_Medica_Historial;
class HistorialClinicoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $id_user=Auth::user()->id_user;
        $paciente=Paciente::where('id_user',$id_user)->firstOrFail();
        $id_paciente=$paciente->id_paciente;
        $citas_atendidas = HistorialClinico::where('id_paciente',$id_paciente)->get();
        return  view('Paciente_botones\historial\index',['citas_atendidas'=>$citas_atendidas]);
    }

    public function getResultadoCitaMedica(HistorialClinico $id){
        $resultado=Cita_Medica_Historial::where('id_reserva',$id->id_reserva)->FirstOrFail();
         
        return view('Paciente_botones\resultados\index',['reserva'=>$id,'resultado'=>$resultado]);
    }
}
