@extends('home')

@section('content')

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <br></br>
        <h1>Lista de Carros </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agregar Carro
        </button>
        <div class="table-responsive text-center">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Matricula</th>
                        <th>Año</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carro as $carros)
                    <tr>
                        <td> {{ $carros->id }} </td>
                        <td> {{ $carros->marca }} </td>
                        <td> {{ $carros->modelo }} </td>
                        <td> {{ $carros->color }} </td>
                        <td> {{ $carros->matricula }} </td>
                        <td> {{ $carros->año }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $carros->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $carros->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('carros.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('carros.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>






@endsection