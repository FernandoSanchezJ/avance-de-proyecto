@extends('welcome')

@section('content')

<div class="row">
    <div></div>
    <div>
        <br></br>
        <h1> PNR </h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#create">
            Agregar PNR
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
                        <td class="col-2">
                            @if(isset($pnr->TipoPNR) && $pnr->TipoPNR !== null)
                            {{ $pnr->TipoPNR->tipo }}
                            @else
                            <!-- Manejar el caso en el que TipoPNR es null -->
                            No hay tipo asignado
                            @endif
                        </td>
                        <td class="col-4"> {{ $pnr->descripcion }} </td>
                        <td> {{ $pnr->Repartidor->nombre }} </td>
                        <td>
                            <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $pnr->id }}">
                                Editar
                            </button><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $pnr->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('pnr.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('pnr.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection