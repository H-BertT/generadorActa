@extends('layout.plantilla')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('personas.index') }}" class="btn btn-success">Volver</a>
            <a href="{{ route('acta.index') }}" class="btn btn-success">Crear acta de matrimonio</a> {{-- Nuevo botón --}} 
            <h2>Crear matrimonio</h2>
            <form action="{{ route('matrimonio.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="persona1">Persona 1:</label>
                    <select class="form-control" name="persona1" required onchange="updateDetails('persona1', 'details1')">
                        <option value="" selected disabled>Selecciona una persona</option>
                        @foreach($personas as $persona)
                            <option value="{{ $persona->id }}" {{ old('persona1') == $persona->id ? 'selected' : '' }}>
                                {{ $persona->nombres }} {{ $persona->primer_apellido }} {{ $persona->segundo_apellido }}
                            </option>
                        @endforeach
                    </select>
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>Estado Civil</th>
                                <th>Sexo</th>
                            </tr>
                        </thead>
                        <tbody id="details1">
                            <!-- Detalles de la persona 1 -->
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <label for="persona2">Persona 2:</label>
                    <select class="form-control" name="persona2" required onchange="updateDetails('persona2', 'details2')">
                        <option value="" selected disabled>Selecciona una persona</option>
                        @foreach($personas as $persona)
                            @if(old('persona1') != $persona->id)
                                <option value="{{ $persona->id }}" {{ old('persona2') == $persona->id ? 'selected' : '' }}>
                                    {{ $persona->nombres }} {{ $persona->primer_apellido }} {{ $persona->segundo_apellido }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>Estado Civil</th>
                                <th>Sexo</th>
                            </tr>
                        </thead>
                        <tbody id="details2">
                            <!-- Detalles de la persona 2 -->
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary">Casar</button>
            </form>
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    <script>
        function updateDetails(selectName, detailsId) {
            let select = document.querySelector(`select[name='${selectName}']`);
            let selectedPersonId = select.value;

            let details = document.getElementById(detailsId);
            details.innerHTML = ''; // Limpiar detalles anteriores

            @foreach($personas as $persona)
                if({{ $persona->id }} == selectedPersonId) {
                    let row = `<tr>
                        <td>{{ $persona->estado_civil }}</td>
                        <td>{{ $persona->sexo }}</td>
                    </tr>`;
                    details.innerHTML = row;
                }
            @endforeach
        }

        // Actualizar detalles al cargar la página
        window.onload = function() {
            updateDetails('persona1', 'details1');
            updateDetails('persona2', 'details2');
        }
    </script>
@endsection
