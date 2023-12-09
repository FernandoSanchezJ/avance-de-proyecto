@extends('welcome')

@section('content')

<div class="row">
    <div></div>
    <div>
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
                        <th>Tipo de PNR</th>
                        <th>Descripcion</th>
                        <th>Repartidor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pnrs as $pnr)
                    <tr>
                        <td> {{ $pnr->id }} </td>
                        <td> {{ $pnr->idT }} </td>
                        <td> {{ $pnr->descripcion }} </td>
                        <td> {{ $pnr->idRepartidor }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $pnr->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $pnr->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="col-md-2"></div>
</div>






@endsection