@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br> <br>
        <h1>Consulta Doctor-Paciente</h1>
        <br>
        <div class="text-center">
           
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                   
                        <th scope="col">Nombre de Doctor</th>
                        <th scope="col">Nombre de Paciente</th>
                    </tr>
                </thead>
                <tbody>
             

@foreach ($datos as $dato)
                    <tr>
                   
                        <td scope="row">{{$dato->nombre_repartidor}}</td>
                        <td>{{$dato->marca_carro}}</td>
                      
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
     
    </div>
    <div class="col-md-2"></div>
</div>

@endsection










