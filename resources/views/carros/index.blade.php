@extends('welcome')

@section('content')

<div class="row">
    <div></div>
    <div>
        <br></br>
        <h1>Lista de carro </h1>
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
                    @foreach($carros as $carro)
                    <tr>
                        <td> {{ $carro->id }} </td>
                        <td> {{ $carro->marca }} </td>
                        <td> {{ $carro->modelo }} </td>
                        <td> {{ $carro->color }} </td>
                        <td> {{ $carro->matricula }} </td>
                        <td> {{ $carro->año }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $carro->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $carro->id }}">
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