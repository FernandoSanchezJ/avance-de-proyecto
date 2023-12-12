<!-- Modal edit-->
<div class="modal fade" id="edit{{ $cliente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Carro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action=" {{ route('clientes.update',$cliente->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <label for="text">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$cliente->nombre}}">

                    <label for="text">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{$cliente->apellidos}}">

                    <label for="text">Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{$cliente->telefono}}">

                    <label for="text">CP</label>
                    <input type="text" name="cp" id="cp" class="form-control" value="{{$cliente->cp}}">

                    <label for="text">Municipio</label>
                    <input type="text" name="municipio" id="municipio" class="form-control" value="{{$cliente->municipio}}">

                    <label for="text">Calle</label>
                    <input type="text" name="calle" id="calle" class="form-control" value="{{$cliente->calle}}">

                    <label for="text">No. Interior</label>
                    <input type="text" name="numI" id="numI" class="form-control" value="{{$cliente->numI}}">

                    <label for="text">No. Exterior</label>
                    <input type="text" name="numE" id="numE" class="form-control" value="{{$cliente->numE}}">

                    <label for="text">Referencia</label>
                    <input type="text" name="referencia" id="referencia" class="form-control" value="{{$cliente->referencia}}">

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
<div class="modal fade" id="delete{{ $cliente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Carro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action=" {{ route('clientes.destroy',$cliente->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    ¿Estas seguro de eliminar el Carro: <strong>{{$cliente->nombre}}, {{$cliente->apellidos}}</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </div>
        </form>
    </div>
</div>