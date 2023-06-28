<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HistorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
    }

    public function create()
    {
    $medicos = Medico::all();
    return view('Medico_botones.recetas.create', compact('medicos'));
    }

    public function edit()
    {
        $medicos = Medico::all();
        return view('Medico_botones.recetas.editar', compact('medicos'));
    }

    public function store(Request $request){

        // $request->validate([
        //     'name'=>'required|max:10',
        //     'descripcion'=>'required|min:10',
        //     'categoria'=>'required'
        // ]);

        $receta = new Receta();
            
        $receta->diagnostico = $request->diagnostico;
        $receta->tipo = $request->tipo;
        $receta->resultado = $request->resultado;
        $receta->examen_medico = $request->examen_medico;
        $receta->Prescripcion = $request->Prescripcion;
        $receta->medico = $request->medico;
        $receta->save();
        return redirect()->route('recetas.index', $receta);
    }

}
