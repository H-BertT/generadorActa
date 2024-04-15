@extends('layout.plantilla')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Lista de Personas</h2>
            <a href="{{ route('personas.create') }}" class="btn btn-success">Agregar Persona</a>
            <a href="{{ route('matrimonio.create') }}" class="btn btn-success">Crear Matrimonio</a>
            <a href="{{ route('acta.index') }}" class="btn btn-success">Crear Acta de Matrimonio</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Estado Civil</th>
                        <th>Sexo</th>
                        <th>Edad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                        <tr>
                            <td>{{ $persona->nombres }}</td>
                            <td>{{ $persona->primer_apellido }}</td>
                            <td>{{ $persona->segundo_apellido }}</td>
                            <td>{{ $persona->estado_civil }}</td>
                            <td>{{ $persona->sexo }}</td>
                            <td>{{ $persona->edad }}</td>
                            <td>
                                <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
