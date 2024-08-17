<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva subcategoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <form action="{{route('subcategorias.store')}}" method="post">
          @csrf       
          <div class="mb-3">
            <label for="nombreSubcategoria" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreSubcategoria" id="nombreSubcategoria" placeholder="Ingresa el nombre de la subcategoría" required maxlength="30">
            <br>

            <div class="mb-3">
              <label for="categoria_id" class="form-label">Categoría</label>
              <select name="categoria_id" id="categoria_id" class="form-control"  required>
                <option disabled>Selecciona una</option>
                @foreach ($categorias as $c)
                <option value="{{ $c->id }}">{{ $c->nombreCategoria }}</option>
                @endforeach
              </select>
            </div>


           

            {{-- @error('nombreCategoria')
                    <div class="alert alert-danger">{{$message}}</div>
            @enderror --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>



</div>