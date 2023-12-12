
<!-- Modal create-->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Carro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action=" {{ route('repartidores.store') }}" method="post" enctype="multipart/form-data">
@csrf
          <div class="modal-body">
              
          <label for="text">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
              
              <label for="text">Apellidos</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control">
              
              <label for="text">Edad</label>
              <input type="text" name="edad" id="edad" class="form-control">
              
              <label for="text">Fecha de Nacimiento</label>
              <input type="text" name="cumpleaños" id="cumpleaños" class="form-control">
              
              <label for="text">CURP</label>
              <input type="text" name="curp" id="curp" class="form-control">

              <label for="text">Genero</label>
              <input type="text" name="genero" id="genero" class="form-control">

              <label for="text">Telefono</label>
              <input type="text" name="telefono" id="telefono" class="form-control">

              <label for="text">Email</label>
              <input type="text" name="email" id="email" class="form-control">

              <label for="text">Licencia</label>
              <input type="text" name="licencia" id="licencia" class="form-control">
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
  </div>
</div>