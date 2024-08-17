    
<div class="modal fade" id="edit{{$s->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar subcategoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{ route('subcategorias.update', $s->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <label for="nombreSubcategoria">Nombre</label>
            <input type="text" name="nombreSubcategoria" class="form-control" value="{{ old('nombreSubcategoria', $s->nombreSubcategoria) }}" required maxlength="30">
            <br>

            <div class="mb-3">
              <label for="categoria_id" class="form-label">Categoría</label>
              <select name="categoria_id" id="categoria_id" class="form-control" required>
                <option disabled>Selecciona una</option>
                @foreach ($categorias as $c)
                  <option value="{{ $c->id }}" {{$c->id == $s->categoria_id ? 'selected' : '' }} >
                    {{$c->nombreCategoria}}
                  </option>
                @endforeach
              </select>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Save changes</button>
          </div>
        </form>
    </div>
  </div>
</div>

