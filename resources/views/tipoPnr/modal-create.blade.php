
<!-- Modal create-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('home.store') }}" method="post" enctype="multipart/form-data">
@csrf
          <div class="modal-body">
              
              <label for="text">Marca</label>
              <input type="text" name="marca" id="marca" class="form-control">
              
              <label for="text">Modelo</label>
              <input type="text" name="modelo" id="modelo" class="form-control">
              
              <label for="text">Color</label>
              <input type="text" name="color" id="color" class="form-control">
              
              <label for="text">Matricula</label>
              <input type="text" name="matricula" id="matricula" class="form-control">
              
              <label for="text">Año</label>
              <input type="text" name="año" id="" class="form-control">
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>