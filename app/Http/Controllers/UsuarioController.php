<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Persona;

class UsuarioController extends Controller
{
    public function index()
    {
        $medico = Usuario::all();
        return view('usuarios.index', compact('usuario'));
    }

    public function create()
    {
        return view('usuarios.create');
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
            'id_rol' => 'required',
            'password_1' => 'required',
            'password_2' => 'required',
        ]);
    
        $request->merge(['id_persona' => $id_persona]);
    
        Usuario::create($request->all());
    
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }


    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    } 


    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_rol' => 'required',
            'password_1' => 'required',
            'password_2' => 'required',
            'estado' => 'required',
            'id_persona' => 'required',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
