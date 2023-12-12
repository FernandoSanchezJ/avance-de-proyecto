
<!-- Modal edit-->
<div class="modal fade" id="edit{{ $llegada->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('llegadas.update',$llegada->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
          <div class="modal-body">
              
          <label for="text">Dia</label>
              <input type="text" name="dia" id="dia" class="form-control" value="{{$llegada->dia}}">
              
              <label for="text">Mes</label>
              <input type="text" name="mes" id="mes" class="form-control" value="{{$llegada->mes}}">
              
              <label for="text">Año</label>
              <input type="text" name="año" id="año" class="form-control" value="{{$llegada->año}}">
              
              <label for="text">Hora</label>
              <input type="text" name="hora" id="hora" class="form-control" value="{{$llegada->hora}}">

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
<div class="modal fade" id="delete{{ $llegada->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('llegadas.destroy',$llegada->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('DELETE')
          <div class="modal-body">
            ¿Estas seguro de eliminar el Carro: <strong>{{$llegada->marca}}, {{$llegada->modelo}}, {{$llegada->color}}?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>