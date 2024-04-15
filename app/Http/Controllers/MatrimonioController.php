<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use App\Models\Matrimonio; // Asegúrate de importar el modelo Matrimonio

class MatrimonioController extends Controller
{
    public function create()
    {
        $personas = Persona::all();
        return view('matrimonio.create', compact('personas'));
    }

    public function store(Request $request){
        $request->validate([
            'persona1' => 'required|exists:personas,id',
            'persona2' => 'required|exists:personas,id|different:persona1',
        ]);
    
        $persona1 = Persona::find($request->persona1);
        $persona2 = Persona::find($request->persona2);
    
        // Validación de las condiciones para casarse
        $validacionCasarse = 
            $persona1->edad >= 18 && 
            $persona2->edad >= 18 &&
            $persona1->estado_civil == 'Soltero' &&
            $persona2->estado_civil == 'Soltero' &&
            $persona1->sexo != $persona2->sexo;
    
        if ($validacionCasarse) {
            // Crear entrada en la tabla casados
            Matrimonio::create([
                'persona1_id' => $persona1->id,
                'persona2_id' => $persona2->id,
            ]);
    
            // Actualizar estado civil a "Casado" para ambas personas
            $persona1->estado_civil = 'Casado';
            $persona1->save();
    
            $persona2->estado_civil = 'Casado';
            $persona2->save();
    
            // Redireccionar con mensaje de éxito
            return redirect()->route('matrimonio.create')->with('success', 'Casados');
        } else {
            // Redireccionar con mensaje de error
            return redirect()->route('matrimonio.create')->with('error', 'No se pueden casar');
        }
    }
}
