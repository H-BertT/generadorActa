<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'primer_apellido' => 'required',
            'entidad_nacimiento' => 'required',
            'municipio_nacimiento' => 'required',
            'nacionalidad' => 'required',
            'estado_civil' => 'required|in:Soltero,Casado',
            'sexo' => 'required|in:Masculino,Femenino',
            'edad' => 'required|integer|min:0',
            'padre' => 'nullable',
            'madre' => 'nullable',
            'nacionalidad_padre' => 'nullable',
            'nacionalidad_madre' => 'nullable',
        ]);
    
        Persona::create($request->all());
    
        return redirect()->route('personas.index')
                         ->with('success', 'Persona creada exitosamente.');
    }
    

    public function show($id)
    {
        $persona = Persona::find($id);
        return view('personas.show', compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::find($id);
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'nullable',
            'entidad_nacimiento' => 'required',
            'municipio_nacimiento' => 'required',
            'nacionalidad' => 'required',
            'estado_civil' => 'required|in:Soltero,Casado',
            'sexo' => 'required|in:Masculino,Femenino',
            'edad' => 'required|integer|min:0',
            'padre' => 'nullable',
            'madre' => 'nullable',
            'nacionalidad_padre' => 'nullable',
            'nacionalidad_madre' => 'nullable',
        ]);
    
        $persona = Persona::find($id);
        $persona->update($request->all());
    
        return redirect()->route('personas.index')
                         ->with('success', 'Persona actualizada exitosamente.');
    }
    

    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente');
    }
}
