<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class ReservaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Tipo_Servicio($servicio,$especialidad){
        $consulta = DB::select("call ServicioMedhost($servicio,$especialidad) ");
        return response()->json($consulta);
    }
 
    public function PrecioServicio($id){
        $consulta = DB::select("SELECT precio From serviciosmedhost where id_servicio_medhost=$id");
        return response()->json($consulta);
    }

    public function InformacionPaciente(String $dni){
        $paciente = DB::select("SELECT * FROM paciente WHERE dni=$dni");
        return response()->json($paciente);
    }

    public function getMedicos($especialidad){
        $medicos=DB::select("SELECT * FROM medicos WHERE id_especialidad=$especialidad");
        return response()->json($medicos);
    }

    public function getHorarioMedico($medico){
        $horario_medico = DB::select("
        select a.id_medico_horario,b.fecha,b.hora_inicio,b.hora_final from medico_horarios a
        INNER JOIN horarios b on a.id_horario = b.id_horario where a.id_medico=$medico and a.estado=1");
        return response()->json($horario_medico);
    }

    public function getConsultorios($especialidad){
        $consultorios = DB::select("select * from consultorios where id_especialidad =$especialidad");
        return response()->json($consultorios);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $reservas=DB::select("
        SELECT a.id_reserva,pac.dni,f.nombre AS especialidad,serv.nombre AS servicio ,concat(h.nombres,' ',h.ape_paterno)AS medico,horario.fecha,horario.hora_inicio,
		a.estado

<<<<<<< HEAD
    FROM cita_medica a
=======
        FROM cita_medica a
>>>>>>> 592db52da92aab9cedb740d53194202abc16c82b
        
        INNER JOIN serviciosmedhost c ON a.id_servicio_medhost = c.id_servicio_medhost
        INNER JOIN servicios_especialidades e ON c.id_servicio_especialidad=e.id_servicio_especialidad
        INNER JOIN especialidades f ON e.id_especialidad=f.id_especialidad
        INNER JOIN servicios serv ON e.id_servicio=serv.id_servicio
        
        INNER JOIN medico_horarios g ON a.id_medico_horario=g.id_medico_horario
        INNER JOIN horarios horario ON g.id_horario = horario.id_horario
        INNER JOIN medicos h ON g.id_medico = h.id_medico
        
        INNER JOIN paciente pac ON a.id_paciente=pac.id_paciente");

        return view('Reserva.index',['reservas'=>$reservas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicios=DB::select("Select * from SERVICIOS");
        $especialidades=DB::select("SELECT * FROM especialidades");
        return view('Reserva.create',['servicios'=>$servicios,'especialidades'=>$especialidades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $request->validate([
            'dni'=>'required',
            'servicio_medhost'=>'required',
            'medico_horario'=>'required',
            'consultorio'=>'required'
        ]);

        /** Consiguiendo el Id del paciente por medio del dni*/
        $paciente = Paciente::where('dni',$request->dni)->firstOrFail();
        $id_paciente = $paciente->id_paciente;

        /*Creando nueva cita**/
        $cita_nueva= new Reserva();
        $cita_nueva->id_paciente = $id_paciente;
        $cita_nueva->id_servicio_medhost= $request->input('servicio_medhost');
        $cita_nueva->id_medico_horario = $request->input('medico_horario');
        $cita_nueva->id_consultorio= $request->input('consultorio');
        $cita_nueva -> save();
        return redirect()->route('reservas.index');
<<<<<<< HEAD
=======


>>>>>>> 592db52da92aab9cedb740d53194202abc16c82b
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
