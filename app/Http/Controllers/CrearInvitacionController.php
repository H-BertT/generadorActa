<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrimonio;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreosMailable;

class CrearInvitacionController extends Controller
{
    public function index()
    {
        $acta = Matrimonio::latest()->first();

        return view('correos.index', compact('acta'));
    }

    public function create($id)
    {
        $acta = Matrimonio::findOrFail($id);

        return view('acta.crearInvitacion', compact('acta'));
    }

public function store(Request $request)
{
    $request->validate([
        'lugar' => 'required',
        'hora' => 'required',
        'fecha' => 'required',
    ]);

    $acta = Matrimonio::with('persona1', 'persona2')->findOrFail($request->acta_id);

    // Enviar el correo electrónico
    $data = array_merge($acta->toArray(), $request->all());
    Mail::to('hilberreyess@gmail.com')->send(new CorreosMailable($data));

    return redirect()->route('acta.crearInvitacion', $acta->id)->with('info', 'Invitación enviada correctamente');
}

    
}
