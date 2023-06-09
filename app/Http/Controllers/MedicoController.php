<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medico = Medico::all();
        return view('medicos.index', compact('medico'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|unique:personas',
            'nombres' => 'required',
            'apellidos_paternos' => 'required',
            'apellidos_maternos' => 'required',
            'sexo' => 'required',
            'dia' => 'required',
            'month' => 'required',
            'anio' => 'required',
            'email' => 'required|unique:personas',
            'celular' => 'required',
        ]);

        $persona = Persona::create($request->all());
        $id_persona = $persona->id;
    
        $request->validate([
            'id_especialidad' => 'required',
            'password_1' => 'required',
            'password_2' => 'required',
        ]);
    
        $request->merge(['id_persona' => $id_persona]);
    
        Medico::create($request->all());
    
        return redirect()->route('medicos.index')->with('success', 'Medico creado correctamente.');
    }


    public function show($id)
    {
        $medico = Medico::findOrFail($id);
        return view('medicos.show', compact('medico'));
    } 


    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
        return view('medicos.edit', compact('medico'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_especialidad' => 'required',
            'password_1' => 'required',
            'password_2' => 'required',
            'id_persona' => 'required',
            'estado' => 'required',
        ]);

        $medico = Medico::findOrFail($id);
        $medico->update($request->all());

        return redirect()->route('medicos.index')->with('success', 'Medico actualizado correctamente.');
    }

    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();

        return redirect()->route('medicos.index')->with('success', 'Medico eliminado correctamente.');
    }
}
