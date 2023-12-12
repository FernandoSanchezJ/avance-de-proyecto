
<!-- Modal edit-->
<div class="modal fade" id="edit{{ $comparativa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('comparativas.update',$comparativa->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
          <div class="modal-body">
              
              <label for="text">Marca</label>
              <input type="text" name="idCodigo" id="" class="form-control" value="{{$comparativa->idCodigo}}">
              
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
<div class="modal fade" id="delete{{ $comparativa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('comparativas.destroy',$comparativa->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('DELETE')
          <div class="modal-body">
            ¿Estas seguro de eliminar el Carro: <strong>{{$comparativa->idCodigo}}</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>