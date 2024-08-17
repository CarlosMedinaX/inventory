<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo proveedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Contenido del modal -->
          <form id="myForm" action="{{route('suppliers.store')}}" method="post">
            @csrf       
            <div class="mb-3">
              <label for="supplierName" class="form-label">Nombre</label>
              <input type="text" class="form-control @error ('supplier_name') is-invalid @enderror" name="supplier_name" id="supplierName" placeholder="Ingresa el nombre del proveedor"  value="{{old('supplier_name')}}" required maxlength="45">
              {{-- @error('supplier_name')
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
  //   $(document).ready(function() {
  //     $('#myForm').submit(function(event) {
  //         var isValid = true;
  //         var supplierName = $('#supplierName').val().trim();
        
  
  //         // Ejemplo de validación simple en el lado del cliente
  //         if (supplierName === '') {
  //             event.preventDefault();
              
  //         }
  
  //         // Si la validación falla, evitar el envío del formulario
         
  //     });
  // });
    </script>
    




