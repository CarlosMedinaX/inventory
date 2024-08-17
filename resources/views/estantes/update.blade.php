{{-- editar --}}
<div class="modal fade" id="edit{{$estante->id}}" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar estante</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="validation" action="{{route('estantes.update', $estante)}}" method="post">
        @csrf
        @method('PUT')

          <div class="mb-3">
            <label class="form-label" for="nombreEstante">Nombre</label>
            <input type="text" class="form-control" id="nombreEstante" name="nombreEstante" placeholder="Ingresa el nombre del estante" value="{{old('nombreEstante', $estante->nombreEstante)}}" required maxlength="30">
          </div>

          <div>
            <label for="pisoEstante" class="form-label">Piso</label>
            <input type="number" id="pisoEstante" class="form-control mb-1" name="pisoEstante" placeholder="Piso del estante ubicado" value="{{old('pisoEstante', $estante->pisoEstante)}}" required min="1">
            {{-- <div id="errorNombreCategoria" class="text-danger"></div> --}}
            {{-- @error('nombreCategoria')
                    <div class="alert alert-danger">{{$message}}</div>
            @enderror --}}
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-warning">Editar</button>
          </div>
        </form>
      </div>
    </div>
  </div>






