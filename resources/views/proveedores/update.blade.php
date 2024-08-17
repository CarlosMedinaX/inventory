{{-- editar --}}
<div class="modal fade" id="edit{{$proveedor->id}}" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('proveedores.update', $proveedor)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <!-- Contenido del modal -->
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreProveedor" placeholder="Ingresa el nombre del proveedor"  value="{{old('nombreProveedor', $proveedor->nombreProveedor)}}">

            {{-- <div id="errorNombreCategoria" class="text-danger"></div> --}}
            {{-- @error('nombreCategoria')
                    <div class="alert alert-danger">{{$message}}</div>
            @enderror --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
        </form>
      </div>
    </div>
  </div>







