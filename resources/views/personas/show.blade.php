@extends('layout.plantilla')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Detalles de Persona</h2>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Nombres: {{ $persona->nombres }}</p>
                    <p class="card-text">Primer Apellido: {{ $persona->primer_apellido }}</p>
                    <p class="card-text">Segundo Apellido: {{ $persona->segundo_apellido }}</p>
                    <p class="card-text">Entidad de Nacimiento: {{ $persona->entidad_nacimiento }}</p>
                    <p class="card-text">Municipio de Nacimiento: {{ $persona->municipio_nacimiento }}</p>
                    <p class="card-text">Nacionalidad: {{ $persona->nacionalidad }}</p>
                    <p class="card-text">Estado Civil: {{ $persona->estado_civil }}</p>
                    <p class="card-text">Sexo: {{ $persona->sexo }}</p>
                    <p class="card-text">Edad: {{ $persona->edad }}</p>
                    <p class="card-text">Padre: {{ $persona->padre }}</p>
                    <p class="card-text">Madre: {{ $persona->madre }}</p>
                    <p class="card-text">Nacionalidad Padre: {{ $persona->nacionalidad_padre }}</p>
                    <p class="card-text">Nacionalidad Madre: {{ $persona->nacionalidad_madre }}</p>
                    <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-primary">Editar</a>
                    <a href="{{ route('personas.index') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
