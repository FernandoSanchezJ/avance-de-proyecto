
<!-- Modal edit-->
<div class="modal fade" id="edit{{ $pnr->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{ route('pnrs.update',$pnr->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
          <div class="modal-body">
              
          <label for="idT">Tipo de PNR</label>
                    <ol>
                        @foreach($tipopnrs as $tipopnr)
                        <li>{{$tipopnr->tipo}}</li>
                        @endforeach
                    </ol>
                    <input type="text" name="idT" id="idT" class="form-control my-3" value="{{$pnr->idT}}">
              
                    <label for="idT">Tipo de PNR</label>
                    <ol>
                      @foreach($repartidores as $repartidor)
                      <li>{{$repartidor->nombre}}</li>
                      @endforeach
                    </ol>
                    <input type="text" name="idT" id="idT" class="form-control my-3" value="{{$pnr->idRepartidor}}">
                    
                    <label for="text">Descripcion</label>
                    <input type="text" name="descripcion" id="" class="form-control my-3" value="{{$pnr->descripcion}}">

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
<div class="modal fade" id="delete{{ $pnr->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('pnrs.destroy',$pnr->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('DELETE')
          <div class="modal-body">
            ¿Estas seguro de eliminar el Carro: <strong>{{$pnr->descripcion}}?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>