<!-- Modal create-->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agredar PNR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('pnrs.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="idT">Tipo de PNR</label>
                    <ol>
                        @foreach($tipopnrs as $tipopnr)
                        <li>{{$tipopnr->tipo}}</li>
                        @endforeach
                    </ol>
                    <input type="text" name="idT" id="idT" class="form-control my-3" value="inserte un numero de la lista"
                        onclick="borrarTexto()">
                        
                        <label for="idT">Tipo de PNR</label>
                    <ol>
                      @foreach($repartidores as $repartidor)
                      <li>{{$repartidor->nombre}}</li>
                      @endforeach
                    </ol>
                    <input type="text" name="idT" id="idT" class="form-control my-3">
                        
                        <label for="text">Descripcion</label>
                        <input type="text" name="descripcion" id="" class="form-control my-3">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </div>
        </form>
    </div>
</div>

<script>
  function borrarTexto() {
    document.getElementById('idT').value = ''; // Borra el contenido del campo de texto
}
</script>