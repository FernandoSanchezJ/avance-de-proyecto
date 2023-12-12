@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br> <br>
        <h1>Vista de Relación Paciente-Recetas</h1>
        <br>
        <div class="text-center">
           
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                       
                        <th scope="col">Codigo Paquete</th>
                        <th scope="col">Nombre Cliente</th>
                    </tr>
                </thead>
                <tbody>
             

@foreach ($datos as $dato)
                    <tr>
                        <td scope="row">{{$dato->idML}}</td>
                        <td>{{$dato->nombre_cliente}}</td>
                      
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
     
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
