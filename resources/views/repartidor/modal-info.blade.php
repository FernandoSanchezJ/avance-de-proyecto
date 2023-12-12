
<!-- Modal edit-->
<div class="modal fade" id="edit{{ $repartidor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{ route('repartidores.update',$repartidor->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
          <div class="modal-body">
              
              <label for="text">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" value="{{$repartidor->nombre}}">
              
              <label for="text">Apellidos</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{$repartidor->apellidos}}">
              
              <label for="text">Edad</label>
              <input type="text" name="edad" id="edad" class="form-control" value="{{$repartidor->edad}}">
              
              <label for="text">Fecha de Nacimiento</label>
              <input type="text" name="cumpleaños" id="cumpleaños" class="form-control" value="{{$repartidor->cumpleaños}}">
              
              <label for="text">CURP</label>
              <input type="text" name="curp" id="curp" class="form-control" value="{{$repartidor->curp}}">

              <label for="text">Genero</label>
              <input type="text" name="genero" id="genero" class="form-control" value="{{$repartidor->genero}}">

              <label for="text">Telefono</label>
              <input type="text" name="telefono" id="telefono" class="form-control" value="{{$repartidor->telefono}}">

              <label for="text">Email</label>
              <input type="text" name="email" id="email" class="form-control" value="{{$repartidor->email}}">

              <label for="text">Licencia</label>
              <input type="text" name="licencia" id="licencia" class="form-control" value="{{$repartidor->licencia}}">

              <label for="text">Carro</label>
              <input type="text" name="idCarro" id="idCarro" class="form-control" value="{{$repartidor->idCarro}}">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
  </div>
</div>







<!-- Modal delete-->
<div class="modal fade" id="delete{{ $repartidor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('repartidores.destroy',$repartidor->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('DELETE')
          <div class="modal-body">
            ¿Estas seguro de eliminar el Carro: <strong>{{$repartidor->nombre}}, {{$repartidor->apellidos}}?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>