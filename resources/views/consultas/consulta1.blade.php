@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br> <br>
        <h1>Consulta Usuario-Tipo de perfil</h1>
        <br>
        <div class="text-center">
           
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                   
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Rol Perfil</th>
                    </tr>
                </thead>
                <tbody>
             

@foreach ($datos as $dato)
                    <tr>
                   
                        <td scope="row">{{$dato->nombreU}}</td>
                        <td>{{$dato->perfil}}</td>
                      
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
     
    </div>
    <div class="col-md-2"></div>
</div>

@endsection












