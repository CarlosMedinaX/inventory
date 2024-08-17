<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo estante</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <form class="validation" action="{{route('estantes.store')}}" method="post">
          @csrf  

          <div class="mb-3">
            <label for="nombreEstante" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreEstante" id="nombreEstante" placeholder="Ingresa el nombre del estante" required maxlength="30">
           <div class="invalid-feedback">
              Este campo no puede ir vacio!!
             </div>
          </div>

          <div>
            <label for="pisoEstante" class="form-label">Piso</label>
            <input type="number" class="form-control mb-1" name="pisoEstante" id="pisoEstante" placeholder="Piso del estante ubicado" required min="1">
           <div class="invalid-feedback">
              Este campo no puede ir vacio!!
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

<script>

// document.querySelectorAll('.validation').forEach(form => {
//   form.addEventListener('submit', event => {
//     if (!form.checkValidity()) {
//       event.preventDefault();
//       form.classList.add('was-validated');
//     }
//   });
// });


</script>