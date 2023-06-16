<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $horarios = DB::SELECT('call listar_medico_horario()'); 
        return view('Medico_botones/horario/index',['horarios'=>$horarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Medico_botones/horario/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha'=>'required',
            'hora_inicio'=>'required',
            'hora_final'=>'required',
        ]);

        $horario = new Horario();
        $horario->fecha = $request->input('fecha');
        $horario->hora_inicio = $request->input('hora_inicio');
        $horario->hora_final = $request->input('hora_final');
        DB::select("CALL hora_create('$horario->fecha','$horario->hora_inicio','$horario->hora_final',@horas)");
        DB::select("CALL registro_total(1)");
        return redirect()->route('Horario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
