<?php
namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Medico;
use App\Models\Cita_Pendiente;
use App\Models\Paciente;
use App\Models\Insurance;
use App\Models\Examen;
use Carbon\Carbon;
use App\Models\Reserva;

class ExamenesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $id_user=Auth::user()->id_user;
        $medico=Medico::where('id_user',$id_user)->firstOrFail();
        $id_medico=$medico->id_medico;
        $citas_pendientes = Cita_Pendiente::where('id_medico',$id_medico)->get();
        return view('citas_programadas.index',['citas'=>$citas_pendientes]);
    }

    public function create(){

    return view('Medico_botones/examenes/create');
    }

    public function edit($id, $id2)
    {
        // $recepcionista = Recepcionista::findOrFail($id);
        // $id_user = $recepcionista->id_user;
        // $usuario = Usuario::findOrFail($id_user);
        
        // return view('recepcionistas.edit', compact('recepcionista', 'usuario'));

        $pacientes = Paciente::findOrFail($id);
        $fechaNacimiento = $pacientes->f_nacimiento;
        $edad = Carbon::parse($fechaNacimiento)->diffInYears(Carbon::now());
        $id_insurance = $pacientes->id_insurance;
        $seguros = Insurance::findOrFail($id_insurance);
        $reserva = Cita_Pendiente::where('id_reserva', $id2)->firstOrFail();
        $horaFin = Carbon::parse($reserva->hora_inicio)->addMinutes(30);
        return view('examenes.edit', compact('pacientes', 'seguros','edad','reserva','horaFin'));
        // return view('Medico_botones\citas_programadas\edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'paciente'=>'required',
            'diagnostico'=>'required',
            'terapias'=>'required',
            'examenes'=>'required',
            'medicinas'=>'required',
            'recomendacion'=>'required'
        ]);

        /*Creando nueva cita**/
        $examenes_nueva= new Terapia_Resultado();
        $examenes_nueva->diagnostico= $request->diagnostico;
        $examenes_nueva->tipo = $request->tipo;
        $examenes_nueva->resultado= $request->resultado;
        $examenes_nueva->examen= $request->examen;
        $examenes_nueva->medicamentos= $request->medicamentos;
        $examenes_nueva->terapias= $request->terapias;
        $examenes_nueva->comentario= $request->comentario;
        $examenes_nueva->fecha= $request->fecha;
        $examenes_nueva -> save();
        return redirect()->route('examenes.index', $examenes_nueva);
    }
}
