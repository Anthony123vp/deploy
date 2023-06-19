<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index()
    {
        $insurances = Insurance::all();
        return view('insurances.index', compact('insurances'));
    }

    public function create()
    {
        $insurances = Insurance::all();
        return view('insurances.create', compact('insurances'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        Insurance::create($request->all());
    
        return redirect()->route('insurances.index')->with('success', 'Seguro creado correctamente.');
    }


    public function show($id)
    {
        $insurance = Insurance::findOrFail($id);
        return view('insurances.show', compact('insurance'));
    } 


    public function edit($id)
    {
        $insurance = Insurance::findOrFail($id);
        return view('insurances.edit', compact('insurance'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
            'updated_at' => now()
        ]);

        $insurance = Insurance::findOrFail($id);
        $insurance->update($request->all());

        return redirect()->route('insurances.index')->with('success', 'Seguro actualizado correctamente.');
    }

    public function destroy($id)
    {
        $insurance = Insurance::findOrFail($id);
        $insurance->estado = 0;
        $insurance->updated_at = now();
        $insurance->save();
    
        return redirect()->route('insurances.index')->with('success', 'Seguro desactivada correctamente.');
    }
}
