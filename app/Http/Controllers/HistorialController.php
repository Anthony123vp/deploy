<?php

namespace App\Http\Controllers;

use App\Models\Medico;
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
}
