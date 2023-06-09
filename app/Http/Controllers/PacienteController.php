<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Persona;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
            'insurance' => 'required',
            'password_1' => 'required',
            'password_2' => 'required',
        ]);
    
        $request->merge(['id_persona' => $id_persona]);
    
        Paciente::create($request->all());
    
        return redirect()->route('pacientes.index')->with('success', 'Paciente creado correctamente.');
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.show', compact('paciente'));
    } 

    // public function show(Paciente $paciente)
    // {
        //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Paciente $paciente)
    // {
        //
    // }


    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Paciente $paciente)
    // {
        //
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'insurance' => 'required',
            'password_1' => 'required',
            'password_2' => 'required',
            'id_persona' => 'required',
            'estado' => 'required',
        ]);

        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Paciente $paciente)
    // {
        //
    // }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado correctamente.');
    }
}
