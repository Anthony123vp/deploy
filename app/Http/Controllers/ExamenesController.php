<?php

namespace App\Http\Controllers;

use App\Models\Terapia_Resultado;
use Illuminate\Http\Request;

class ExamenesController extends Controller
{
    public function index(){
        return view('Medico_botones/examenes/index');
    }

    public function create(){

    return view('Medico_botones/examenes/create');
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
