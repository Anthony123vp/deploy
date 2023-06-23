<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Medico;
use App\Models\Cita_Pendiente;
class ReservaProgramada extends Controller
{
    //VISTA PARA EL MEDICO SUS CITAS PROGRAMADAS

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $id_user=Auth::user()->id_user;
        $medico=Medico::where('id_user',$id_user)->firstOrFail();
        $id_medico=$medico->id_medico;
        $citas_pendientes = Cita_Pendiente::where('id_medico',$id_medico)->get();
        return view('Medico_botones\citas_programadas\index',['citas'=>$citas_pendientes]);
    }
}
