<div class="modal fade" id="delete{{$estante->id}}" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <form action="{{route('estantes.destroy', $estante->id)}}" method="post">
          @csrf
          @method('DELETE')
          <div class="modal-body">
              ¿Estás seguro de que deseas eliminar el estante "<strong>{{$estante->nombreEstante}}</strong>"?"
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger">Proceder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
