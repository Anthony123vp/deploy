<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RolController extends Controller
{
    public function index()
    {
        if(Auth::user()->id_rol!=4){
            return redirect()->route('Dashboard');
        }
        
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        if(Auth::user()->id_rol!=4){
            return redirect()->route('Dashboard');
        }
        
        return view('roles.create');
    }

    public function store(Request $request)
    {
        if(Auth::user()->id_rol!=4){
            return redirect()->route('Dashboard');
        }
        
        $request->validate([
            'nombre_rol' => 'required',
        ]);
    
        Rol::create($request->all());
    
        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }


    public function show($id)
    {
        if(Auth::user()->id_rol!=4){
            return redirect()->route('Dashboard');
        }
        
        $rol = Rol::findOrFail($id);
        return view('roles.show', compact('rol'));
    } 


    public function edit($id)
    {
        if(Auth::user()->id_rol!=4){
            return redirect()->route('Dashboard');
        }

        $rol = Rol::findOrFail($id);
        return view('roles.edit', compact('rol'));
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->id_rol!=4){
            return redirect()->route('Dashboard');
        }
        
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
        if(Auth::user()->id_rol!=4){
            return redirect()->route('Dashboard');
        }
        
        $rol = Rol::findOrFail($id);
        $rol->delete();

        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }
}
