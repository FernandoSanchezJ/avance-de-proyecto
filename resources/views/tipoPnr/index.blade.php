@extends('welcome')

@section('content')

<div class="row">
    <div></div>
    <div>
        <br></br>
        <h1>Tipos de PNRs </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agregar Tipo de PNR
        </button>
        <div class="table-responsive text-center">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tipopnrs as $tipopnr)
                    <tr>
                        <td> {{ $tipopnr->id }} </td>
                        <td> {{ $tipopnr->tipo }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#edit{{ $tipopnr->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $tipopnr->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('tipopnr.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('tipopnr.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>






@endsection