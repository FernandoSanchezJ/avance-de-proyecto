@extends('welcome')

@section('content')

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <br></br>
        <h1>Lista de ruta </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agregar Carro
        </button>
        <div class="table-responsive text-center">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rutas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rutas as $ruta)
                    <tr>
                        <td> {{ $ruta->id }} </td>
                        <td> {{ $ruta->ruta }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $ruta->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $ruta->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('ruta.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('ruta.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>






@endsection