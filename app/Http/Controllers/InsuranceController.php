<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index()
    {
        $insurances = Insurance::all();
        return view('pacientes.index', compact('insurances'));
    }

    public function create()
    {
        $insurances = Insurance::all();
        return view('pacientes.index', compact('insurances'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_rol' => 'required',
        ]);
    
        Rol::create($request->all());
    
        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }


    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.show', compact('rol'));
    } 


    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.edit', compact('rol'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_rol' => 'required',
            'estado' => 'required',
        ]);

        $rol = Rol::findOrFail($id);
        $rol->update($request->all());

        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente.');
    }

    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();

        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }
}
