{{-- este es correos.pdf --}}
@extends('layout.plantilla')

@section('title', 'Invitación de Boda')

@section('content')

<h1>Invitación de Boda</h1>
<p>Uniendo en eterno matrimonio a:</p>
<p>{{ $data['persona1']['nombres'] }} {{ $data['persona1']['primer_apellido'] }} {{ $data['persona1']['segundo_apellido'] }} y {{ $data['persona2']['nombres'] }} {{ $data['persona2']['primer_apellido'] }} {{ $data['persona2']['segundo_apellido'] }}</p>

{{-- Mostrar la información de la boda --}}
<p>Fecha del Matrimonio: {{ $data['fecha'] }}</p>
<p>Hora del Matrimonio: {{ $data['hora'] }}</p>
<p>Lugar del Matrimonio: {{ $data['lugar'] }}</p>

{{-- Otros detalles de la boda --}}
<p>Te esperamos en la celebración de nuestro amor.</p>

@endsection
