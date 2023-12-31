
<!-- Modal edit-->
<div class="modal fade" id="edit{{ $carro->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('carros.update',$carro->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
          <div class="modal-body">
              
              <label for="text">Marca</label>
              <input type="text" name="marca" id="marca" class="form-control" value="{{$carro->marca}}">
              
              <label for="text">Modelo</label>
              <input type="text" name="modelo" id="modelo" class="form-control" value="{{$carro->modelo}}">
              
              <label for="text">Color</label>
              <input type="text" name="color" id="color" class="form-control" value="{{$carro->color}}">
              
              <label for="text">Matricula</label>
              <input type="text" name="matricula" id="matricula" class="form-control" value="{{$carro->matricula}}">
              
              <label for="text">Año</label>
              <input type="text" name="año" id="año" class="form-control" value="{{$carro->año}}">
              
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
<div class="modal fade" id="delete{{ $carro->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('carros.destroy',$carro->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('DELETE')
          <div class="modal-body">
            ¿Estas seguro de eliminar el Carro: <strong>{{$carro->marca}}, {{$carro->modelo}}, {{$carro->color}}?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>