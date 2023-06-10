<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password_1' => 'required',
            'password_2' => 'required',
            'estado' => 'required',
            'email' => 'required|unique:usuarios',
            'id_rol' => 'required',
        ]);
    
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
    
    public function edit2($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.destroy', compact('usuario'));
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'email' => 'required|unique:usuarios,email,'.$id,
    //         'password_1' => 'required',
    //         'password_2' => 'required',
    //         'estado' => 'required',
    //         'id_rol' => 'required',
    //     ]);
    
    //     $usuario = Usuario::findOrFail($id);
    //     $usuario->update([
    //         'email' => $request->email,
    //         'password_1' => $request->password_1,
    //         'password_2' => $request->password_2,
    //         'estado' => $request->estado,
    //         'id_rol' => $request->id_rol,
    //         'updated_at' => now()
    //     ]);
    
    //     return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|unique:usuarios,email,'.$id.',id_usuarios',
            'password_1' => 'required',
            'password_2' => 'required',
            'estado' => 'required',
            'id_rol' => 'required',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update([
            'email' => $request->email,
            'password_1' => $request->password_1,
            'password_2' => $request->password_2,
            'estado' => $request->estado,
            'id_rol' => $request->id_rol,
            'updated_at' => now()
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }


    public function destroy($id)
{
    $usuario = Usuario::findOrFail($id);
    $usuario->estado = 0;
    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario desactivado correctamente.');
}

}
