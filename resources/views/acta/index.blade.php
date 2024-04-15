@extends('layout.plantilla')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('personas.index') }}" class="btn btn-success">Volver</a>
            <h2>Actas de Matrimonio</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Marido</th>
                        <th>Mujer</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actas as $acta)
                        <tr>
                            <td>{{ $acta->persona1->nombres }} {{ $acta->persona1->primer_apellido }} {{ $acta->persona1->segundo_apellido }}</td>
                            <td>{{ $acta->persona2->nombres }} {{ $acta->persona2->primer_apellido }} {{ $acta->persona2->segundo_apellido }}</td>
                            <td>
                                <form action="{{ route('acta.destroy', $acta->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Divorciar</button>
                                </form>
                                <a href="{{ route('acta.imprimirActa', ['id' => $acta->id]) }}" class="btn btn-primary">Imprimir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
