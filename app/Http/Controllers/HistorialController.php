<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Receta;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
    $medicos = Medico::all();
    return view('Paciente_botones.historial.create', compact('medicos'));
    }

    public function edit()
    {
        $medicos = Medico::all();
        return view('Paciente_botones.historial.editar', compact('medicos'));
    }

    public function store(Request $request){

        // $request->validate([
        //     'name'=>'required|max:10',
        //     'descripcion'=>'required|min:10',
        //     'categoria'=>'required'
        // ]);

        $receta = new Receta();
        $receta->nombres = $request->nombres;
        $receta->ape_paterno = $request->ape_paterno;
        $receta->ape_materno = $request->ape_materno;
        $receta->dni = $request->dni;
        $receta->consultorio = $request->consultorio;
        $receta->discapacidad = $request->discapacidad;
        $receta->medicamentos = $request->medicamentos;
        $receta->terapias = $request->terapias;
        $receta->Prescripcion = $request->Prescripcion;
        $receta->diagnostico = $request->diagnostico;
        $receta->medico = $request->medico;
        $receta->save();
        return redirect()->route('recetas.index', $receta);
    }

}
