@extends('layout.plantilla')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Editar Persona</h2>
            <form action="{{ route('personas.update', $persona->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombres">Nombres:</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $persona->nombres }}" required>
                </div>
                <div class="form-group">
                    <label for="primer_apellido">Primer Apellido:</label>
                    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="{{ $persona->primer_apellido }}" required>
                </div>
                <div class="form-group">
                    <label for="segundo_apellido">Segundo Apellido:</label>
                    <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="{{ $persona->segundo_apellido }}">
                </div>
                <div class="form-group">
                    <label for="entidad_nacimiento">Entidad de Nacimiento:</label>
                    <input type="text" class="form-control" id="entidad_nacimiento" name="entidad_nacimiento" value="{{ $persona->entidad_nacimiento }}" required>
                </div>
                <div class="form-group">
                    <label for="municipio_nacimiento">Municipio de Nacimiento:</label>
                    <input type="text" class="form-control" id="municipio_nacimiento" name="municipio_nacimiento" value="{{ $persona->municipio_nacimiento }}" required>
                </div>
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad:</label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="{{ $persona->nacionalidad }}" required>
                </div>
                <div class="form-group">
                    <label for="estado_civil">Estado Civil:</label>
                    <select class="form-control" id="estado_civil" name="estado_civil" required>
                        <option value="Soltero" {{ $persona->estado_civil == 'Soltero' ? 'selected' : '' }}>Soltero</option>
                        <option value="Casado" {{ $persona->estado_civil == 'Casado' ? 'selected' : '' }}>Casado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <select class="form-control" id="sexo" name="sexo" required>
                        <option value="Masculino" {{ $persona->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Femenino" {{ $persona->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" class="form-control" id="edad" name="edad" value="{{ $persona->edad }}" required>
                </div>
                <div class="form-group">
                    <label for="padre">Padre:</label>
                    <input type="text" class="form-control" id="padre" name="padre" value="{{ $persona->padre }}">
                </div>
                <div class="form-group">
                    <label for="madre">Madre:</label>
                    <input type="text" class="form-control" id="madre" name="madre" value="{{ $persona->madre }}">
                </div>
                <div class="form-group">
                    <label for="nacionalidad_padre">Nacionalidad Padre:</label>
                    <input type="text" class="form-control" id="nacionalidad_padre" name="nacionalidad_padre" value="{{ $persona->nacionalidad_padre }}">
                </div>
                <div class="form-group">
                    <label for="nacionalidad_madre">Nacionalidad Madre:</label>
                    <input type="text" class="form-control" id="nacionalidad_madre" name="nacionalidad_madre" value="{{ $persona->nacionalidad_madre }}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
