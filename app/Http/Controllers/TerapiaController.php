<?php

namespace App\Http\Controllers;

use App\Models\Terapia_Resultado;
use Illuminate\Http\Request;

class TerapiaController extends Controller
{
    public function index(){
        return view('Medico_botones/terapia/index');
    }

    public function create(){

    return view('Medico_botones/terapia/create');
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
        $terapia_nueva= new Terapia_Resultado();
        $terapia_nueva->terapia= $request->terapia;
        $terapia_nueva->evaluacion = $request->evaluacion;
        $terapia_nueva->medicamentos= $request->medicamentos;
        $terapia_nueva->tiempo= $request->tiempo;
        $terapia_nueva->comentario= $request->comentario;
        $terapia_nueva->diagnostico= $request->diagnostico;
        $terapia_nueva -> save();
        return redirect()->route('terapia.index', $terapia_nueva);
    }
}
