<?php

namespace App\Http\Controllers;

use App\Models\Servicio_Especialidad;
use Illuminate\Http\Request;

class Servicio_especialidadController extends Controller
{
    public function index()
    {
        $servicios_especialidades = Servicio_Especialidad::with('servicio','especialidad')->get();
        return view('servicios_especialidades.index', compact('servicios_especialidades'));
    }

    public function create()
    {
        return view('servicios_especialidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        Servicio::create($request->all());
        
    
        return redirect()->route('servicios.index')->with('success', 'Servicio creado correctamente.');
    }


    public function show($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.show', compact('servicio'));
    } 


    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.edit', compact('servicio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
        ]);

        $servicio = Servicio::findOrFail($id);
        $servicio->update($request->all());

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado correctamente.');
    }

    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado correctamente.');
    }
}
