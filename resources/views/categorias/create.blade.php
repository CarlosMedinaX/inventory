

{{-- con este create relaciono data-bs-target="#create" para que abra la modal --}}
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <form action="{{route('categorias.store')}}" method="post">
          @csrf       
          <div class="mb-3">
            <label for="nombreCategoria" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreCategoria" id="nombreCategoria" placeholder="Ingresa el nombre de la categoría" required maxlength="40">
            @error('nombreCategoria')
                    <div class="alert alert-danger">{{$message}}</div>
            @enderror
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

{{-- <script>
  $(document).ready(function() {
      $('form').submit(function(event) {

          var nombreCategoriaValue = $('#nombreCategoria').val().trim();
          if (nombreCategoriaValue.length < 3) {
              event.preventDefault();
          }
      });

    
  });
</script>  --}}
