<!-- acta.crearInvitacion.blade.php -->
@extends('layout.plantilla')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Crear Invitación de Boda</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Marido</th>
                        <th>Mujer</th>
                    </tr>
                </thead>
                <tbody>
                    @if($acta->persona1->sexo === 'Masculino')
                    <tr>
                        <td>{{ $acta->persona1->nombres }} {{ $acta->persona1->primer_apellido }} {{ $acta->persona1->segundo_apellido }}</td>
                        <td>{{ $acta->persona2->nombres }} {{ $acta->persona2->primer_apellido }} {{ $acta->persona2->segundo_apellido }}</td>
                    </tr>
                    @else
                    <tr>
                        <td>{{ $acta->persona2->nombres }} {{ $acta->persona2->primer_apellido }} {{ $acta->persona2->segundo_apellido }}</td>
                        <td>{{ $acta->persona1->nombres }} {{ $acta->persona1->primer_apellido }} {{ $acta->persona1->segundo_apellido }}</td>
                    </tr>
                    @endif
                </tbody>
            </table>

            <form method="POST" action="{{ route('correos.store') }}">
                @csrf
                <input type="hidden" name="acta_id" value="{{ $acta->id }}">
                
                <div class="form-group">
                    <label for="lugar">Lugar del Matrimonio</label>
                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ingrese el lugar del matrimonio">
                </div>
                
                <div class="form-group">
                    <label for="hora">Hora del Matrimonio</label>
                    <input type="time" class="form-control" id="hora" name="hora">
                </div>
                
                <div class="form-group">
                    <label for="fecha">Fecha del Matrimonio</label>
                    <input type="date" class="form-control" id="fecha" name="fecha">
                </div>

                <button type="submit" class="btn btn-primary">Enviar invitación</button>
            </form>
        </div>
    </div>
@endsection
