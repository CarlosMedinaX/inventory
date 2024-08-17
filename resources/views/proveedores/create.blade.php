<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <form action="{{route('proveedores.store')}}" method="post">
          @csrf       
          <div class="mb-3">
            <label for="nombreProveedor" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreProveedor" id="nombreProveedor" placeholder="Ingresa el nombre del proveedor">
            @error('nombreCategoria')
                    <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>



</div>