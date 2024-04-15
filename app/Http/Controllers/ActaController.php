<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Matrimonio;
use Barryvdh\DomPDF\Facade\Pdf;

class ActaController extends Controller
{
    
    public function index()
    {
        
        $actas = Matrimonio::all();
        return view('acta.index', compact('actas'));
    }

    public function destroy($id)
    {
        $acta = Matrimonio::find($id);

        $marido = Persona::find($acta->persona1_id);
        $mujer = Persona::find($acta->persona2_id);

        // Actualizar estado civil de las personas
        $marido->estado_civil = 'Soltero';
        $marido->save();

        $mujer->estado_civil = 'Soltero';
        $mujer->save();

        // Eliminar acta
        $acta->delete();

        return redirect()->route('acta.index')->with('success', 'Acta de matrimonio eliminada con éxito.');
    }

    public function imprimirActa($id)
    {
        // $matrimonios = Matrimonio::all();
        $acta = Matrimonio::find($id);
    
        $pdf = PDF::loadView('acta.imprimir', compact('acta'));  // Vista que contiene el diseño del PDF
        return $pdf->download('acta_matrimonio.pdf');
    }
    
    
}
