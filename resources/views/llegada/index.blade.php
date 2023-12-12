@extends('welcome')

@section('content')

<div class="row">
    <div></div>
    <div>
        <br></br>
        <h1>Lista de llegadas </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agregar llegada
        </button>
        <div class="table-responsive text-center">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Dia</th>
                        <th>Mes</th>
                        <th>Año</th>
                        <th>Hora</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($llegadas as $llegada)
                    <tr>
                        <td> {{ $llegada->id }} </td>
                        <td> {{ $llegada->dia }} </td>
                        <td> {{ $llegada->mes }} </td>
                        <td> {{ $llegada->año }} </td>
                        <td> {{ $llegada->hora }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $llegada->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $llegada->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('llegada.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('llegada.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>






@endsection