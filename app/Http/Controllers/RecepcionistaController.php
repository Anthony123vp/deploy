<?php

namespace App\Http\Controllers;

use App\Models\Recepcionista;
use Illuminate\Http\Request;

class RecepcionistaController extends Controller
{
    public function index()
    {
        $recepcionistas = Recepcionista::all();
        return view('recepcionistas.index', compact('recepcionistas'));
    }

    public function create()
    {
        return view('recepcionistas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'ape_paterno' => 'required',
            'ape_materno' => 'required',
            'celular' => 'required',
            'dni' => 'required',
            'f_nacimiento' => 'required',
        ]);
        Recepcionista::create($request->all());
    
        return redirect()->route('recepcionistas.index')->with('success', 'Recepcionista creado correctamente.');
    }


    public function show($id)
    {
        $recepcionista = Recepcionista::findOrFail($id);
        return view('recepcionistas.show', compact('recepcionista'));
    } 


    public function edit($id)
    {
        $recepcionista = Recepcionista::findOrFail($id);
        return view('recepcionistas.edit', compact('recepcionista'));
    }
    
    public function edit2($id)
    {
        $recepcionista = Recepcionista::findOrFail($id);
        // return view('recepcionistas.destroy', compact('recepcionista'));
        return redirect()->route('recepcionistas.destroy', ['id' => $id]);
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
            'nombres' => 'required|unique:recepcionistas,nombres,'.$id.',id_recepcionista',
            'ape_paterno' => 'required',
            'ape_materno' => 'required',
            'celular' => 'required',
            'dni' => 'required',
            'f_nacimiento' => 'required',
        ]);
        

        $recepcionista = Recepcionista::findOrFail($id);
        $recepcionista->update([
            'nombres' => $request->nombres,
            'ape_paterno' => $request->ape_paterno,
            'ape_materno' => $request->ape_materno,
            'celular' => $request->celular,
            'dni' => $request->dni,
            'f_nacimiento' => $request->f_nacimiento,
            'updated_at' => now()
        ]);
        return redirect()->route('recepcionistas.index')->with('success', 'Recepcionista actualizado correctamente.');
    }


    public function destroy($id)
    {
        $recepcionista = Recepcionista::findOrFail($id);
        $recepcionista->estado = 0;
        $recepcionista->updated_at = now();
        $recepcionista->save();

        return redirect()->route('recepcionistas.index')->with('success', 'Recepcionista desactivado correctamente.');
    }



}
