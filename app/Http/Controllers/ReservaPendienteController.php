<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cita_Pendiente;
class ReservaPendienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(Auth::user()->id_rol!=1){
            return redirect()->route('Dashboard');
        }
        $id_user=Auth::user()->id_user;
        $paciente=Paciente::where('id_user',$id_user)->firstOrFail();
        $id_paciente=$paciente->id_paciente;
        $citas_atendidas = Cita_Pendiente::where('id_paciente',$id_paciente)->get();
        return view ('Paciente_botones.citas_pendiente.index',['citas'=>$citas_atendidas]);
    }
}
