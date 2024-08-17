{{-- editar --}}
<div class="modal fade" id="edit{{$categoria->id}}" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('categorias.update', $categoria->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <!-- Contenido del modal -->
          <div class="mb-3">
            <label for="nombreCategoria" class="form-label">Nombre de la categoría</label>
            <input type="text"  class="form-control" name="nombreCategoria" placeholder="Ingresa el nombre de la categoría" id="nombreCategoria"  value="{{old('nombreCategoria', $categoria->nombreCategoria)}}" required maxlength="40">
            <div id="errorNombreCategoria" class="text-danger"></div>
            @error('nombreCategoria')
                    <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-warning">Editar</button>
          </div>
        </form>
      </div>
    </div>
  </div>














