<!-- Modal Editar -->
<div class="modal fade" id="edit{{ $s->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form  action="{{route('suppliers.update', $s)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Editar Proveedor</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="edit_proveedor_name" class="form-label">Nombre del Proveedor</label>
                      <input type="text" class="form-control" id="edit_proveedor_name" name="supplier_name" value="{{old('supplier_name', $s->supplier_name)}}" required maxlength="45">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-warning">Guardar Cambios</button>
              </div>
          </form>
      </div>
  </div>
</div>
