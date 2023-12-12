@extends('welcome')

@section('content')

<div class="row">
    <div></div>
    <div>
        <br></br>
        <h1>Lista de cliente </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agregar Cliente
        </button>
        <div class="table-responsive text-center">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>CP</th>
                        <th>Municipio</th>
                        <th>Calle</th>
                        <th>No. Interio/Exterior</th>
                        <th>Referencia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td> {{ $cliente->id }} </td>
                        <td> {{ $cliente->nombre }} </td>
                        <td> {{ $cliente->apellidos }} </td>
                        <td> {{ $cliente->telefono }} </td>
                        <td> {{ $cliente->cp }} </td>
                        <td> {{ $cliente->municipio }} </td>
                        <td> {{ $cliente->calle }} </td>
                        <td> {{ $cliente->numI }}/{{ $cliente->numE }} </td>
                        <td> {{ $cliente->referencia }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1 col-9" data-bs-toggle="modal" data-bs-target="#edit{{ $cliente->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger col-10 text-center" data-bs-toggle="modal" data-bs-target="#delete{{ $cliente->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('cliente.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('cliente.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>






@endsection