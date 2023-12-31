<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Reserva;
use App\Models\Horario;
use App\Models\Especialidad;
use App\Models\Servicio;
use App\Models\Medico;
use App\Models\Consultorio;
use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\Auth;
class ReservaController extends Controller
{

    



    
    
    public function Tipo_Servicio($servicio,$especialidad){
        $consulta = DB::select("SELECT * FROM SERVICIOMEDHOST where  id_servicio=$servicio and id_especialidad=$especialidad");
        return response()->json($consulta);
    }
    
    public function PrecioServicio($id){
        $consulta = DB::select("SELECT precio FROM SERVICIOMEDHOST where id_servicio_medhost=$id");
        return response()->json($consulta);
    }
    
    public function InformacionPaciente(String $dni){
        $paciente = DB::select("SELECT * FROM paciente INNER JOIN insurances ON (paciente.id_insurance = insurances.id_insurance) where  dni=$dni");
        // $paciente = Paciente::where('dni',$dni)->get();
        return response()->json($paciente);
    }

    public function getMedicos($especialidad){
        $medicos=Medico::where('id_especialidad',$especialidad)->get();
        return response()->json($medicos);
    }

    public function getHorarioMedico($medico){
        $horario_medico = DB::select(" SELECT * FROM HORARIO_MEDICO WHERE id_medico=$medico and estado=1");
        return response()->json($horario_medico);
    }

    public function getConsultorios($medico){
        $medico = Medico::where('id_medico',$medico)->FirstOrFail();
        $consultorios = Consultorio::where('id_consultorio',$medico->id_consultorio)->FirstOrFail();
        return response()->json($consultorios);
    }

    public function getConsultoriosEspecialidad($especialidad){
        $consultorios = DB::select("select * from consultorios where id_especialidad =$especialidad and estado=1");
        return response()->json($consultorios);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $reservas=DB::select("SELECT * FROM CITA_MEDICA_RECEPCIONISTA");

        return view('Reserva.index',['reservas'=>$reservas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicios=Servicio::get();
        $especialidades=Especialidad::get();
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
        $cita_nueva -> save();

        /*Cambiando de estado el horario del medico seleccionado */
        $horario_medico=Horario::findOrFail($request->input('medico_horario'));
        $horario_medico->estado='0';
        $horario_medico->save();
        return redirect()->route('reservas.index');

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
    public function edit($id)
    {
        $reserva=DB::select("Select * from cita_pendiente where id_reserva=$id");
        $servicios=Servicio::get();
        $especialidades=Especialidad::get();
        $dniPaciente = Paciente::where('id_paciente',$reserva[0]->id_paciente)->FirstOrFail();        
        return view('Reserva.editar',['reserva'=>$reserva,'paciente'=>$dniPaciente,'servicios'=>$servicios,'especialidades'=>$especialidades]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $id)
    {
        $request->validate([
            'dni'=>'required',
            'servicio_medhost'=>'required',
            'medico_horario'=>'required',
            'consultorio'=>'required'
        ]);

        $id_horario_medico=$id->id_medico_horario;
        /** Consiguiendo el Id del paciente por medio del dni*/
        $paciente = Paciente::where('dni',$request->dni)->firstOrFail();
        $id_paciente = $paciente->id_paciente;

        /*Creando nueva cita**/
        $id->id_paciente = $id_paciente;
        $id->id_servicio_medhost= $request->input('servicio_medhost');
        $id->id_medico_horario = $request->input('medico_horario');
        $id -> save();

        /*Cambiando de estado el horario del medico seleccionado */
        if($id_horario_medico!=$request->medico_horario){
            $horario_medico=Horario::findOrFail($request->input('medico_horario'));
            $horario_medico->estado='0';
            $horario_medico->save();

            $horario_medico=Horario::findOrFail($id_horario_medico);
            $horario_medico->estado='1';
            $horario_medico->save();
        }
        return redirect()->route('reservas.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $id)
    {
        $horario_medico=Horario::findOrFail($id->id_horario_medico);
        $horario_medico->estado='1';
        $horario_medico->save();
        $id->delete();
        return redirect()->route('reservas.index');
    }

    public function generateInforme(){
        DB::select('CALL generadorInforme()');
        return redirect()->route('reservas.index');
    }
}
