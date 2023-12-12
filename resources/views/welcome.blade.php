<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{'/' }}" aria-current="page">CRUDS <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('repartidores')}}">Repartidores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('clientes')}}">Cliente</a>

            <li class="nav-item">
                <a class="nav-link" href="{{url('carros')}}">Carro</a>
       
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('llegadas')}}">Llegadas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('comparativas')}}">Comparativa</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="{{url('rutas')}}">Rutas</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="{{url('pnrs')}}">PNR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('tipopnrs')}}">Tipo de PNR</a>
            </li>
            
            <a href="{{ url('/backup') }}" class="btn btn-success">Crear Backup</a>
        
        </ul>
    </nav>
    <nav class="navbar navbar-expand navbar-dark bg-dark responsive">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page"
                    ><h5>VISTAS</h5> <span class="visually-hidden">(current)</span></a
                >
            </li>
                    <li><a class="nav-link" href="{{url('/vistas/vista1')}}">Paquete y Cliente</a></li>
                    <li><a class="nav-link" href="{{url('/vistas/vista2')}}">Comparativa y Paquete</a></li>
                    <li><a class="nav-link" href="{{url('/vistas/vista3')}}">Cliente y Carro</a></li>
                    <li><a class="nav-link" href="{{url('/vistas/vista4')}}">Repartidor y Ruta</a></li>
                    <li><a class="nav-link" href="{{url('/vistas/vista5')}}">Usuarios y Perfil</a>
                    </li>
        </ul>
    </nav>
    

    <nav class="navbar navbar-expand navbar-dark bg-dark responsive">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page"
                    ><h5>Consultas</h5> <span class="visually-hidden">(current)</span></a
                >
            </li>
                    <li><a class="nav-link" href="{{url('/consultas/consulta1')}}">Paquete y Cliente</a></li>
                    <li><a class="nav-link" href="{{url('/consultas/consulta2')}}">Comparativa y Paquete</a></li>
                    </li>
        </ul>
    </nav>


    <main class="container"></main>

    <div class="row">
        <div class="col-2"></div>

        <div class="col-8">

            @yield('content')

        </div>

        <div class="col-2"></div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>