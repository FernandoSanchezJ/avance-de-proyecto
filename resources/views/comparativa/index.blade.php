@extends('welcome')

@section('content')

<div class="row">
    <div></div>
    <div>
        <br></br>
        <h1>Lista de Comparativa </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agregar Codigo de compartiva
        </button>
        <div class="table-responsive text-center">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Codigo de Comparativa</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comparativas as $comparativa)
                    <tr>
                        <td> {{ $comparativa->id }} </td>
                        <td> {{ $comparativa->idCodigo }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $comparativa->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $comparativa->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('comparativa.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('comparativa.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection