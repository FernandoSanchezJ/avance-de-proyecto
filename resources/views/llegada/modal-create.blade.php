
<!-- Modal create-->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('llegadas.store') }}" method="post" enctype="multipart/form-data">
@csrf
          <div class="modal-body">
              
              <label for="text">Dia</label>
              <input type="text" name="dia" id="dia" class="form-control">
              
              <label for="text">Mes</label>
              <input type="text" name="mes" id="mes" class="form-control">
              
              <label for="text">Año</label>
              <input type="text" name="año" id="año" class="form-control">
              
              <label for="text">Hora</label>
              <input type="text" name="hora" id="hora" class="form-control">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>