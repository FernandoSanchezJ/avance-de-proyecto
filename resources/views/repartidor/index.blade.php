@extends('welcome')

@section('content')

<div class="row">
    <div>
        <br></br>
        <h1>Lista de repartidor </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agrega Repartidor
        </button>
        <div class="table-responsive text-center">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Carro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($repartidores as $repartidor)
                    <tr>
                        <td> {{ $repartidor->id }} </td>
                        <td> {{ $repartidor->nombre }} </td>
                        <td> {{ $repartidor->apellidos }} </td>
                        <td> {{ $repartidor->genero }} </td>
                        <td> {{ $repartidor->telefono }} </td>
                        <td> {{ $repartidor->email }} </td>
                        <td> {{ $repartidor->Carro->marca }}-{{ $repartidor->Carro->modelo }}-{{ $repartidor->Carro->año}} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1 col-5" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $repartidor->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger col-6" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $repartidor->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('repartidor.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('repartidor.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>






@endsection