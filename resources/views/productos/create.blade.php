<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NUEVO PRODUCTO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <form action="{{route('productos.store')}}" method="post">
          @csrf       
          <div
            class="row justify-content-center align-items-center g-2"
            >
            <div class="col-md-4">
              <label for="sub" class="form-label">Subcategoría</label>
              <select name="subcategoria_id" id="sub" class="form-control"  required>
                <option disabled>Selecciona una</option>
                @foreach ($subcategorias as $s)
                <option value="{{$s->id}}">{{$s->nombreSubcategoria}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <label for="nombreProducto" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" placeholder="ej: cebollas" required maxlength="30">
            </div>
            <div class="col-md-3">
              <label for="precioUnitario" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precioUnitario" id="precioUnitario" placeholder="ej: 12$ ó 438,36bs" required minlength="2" maxlength="20">
            </div>
          </div>
          <br>

          <div class="row justify-content-center align-items-center g-2">

          <div class="col-md-4">
            <label for="stockMinimo" class="form-label">Stock mínimo</label>
            <input type="text" class="form-control" name="stockMinimo" id="stockMinimo" placeholder="ej: 12kg | 200g"  required maxlength="20">
          </div>

          <div class="col-md-4">
            <label for="stockMaximo" class="form-label">Stock máximo</label>
             <input type="text" class="form-control" name="stockMaximo" id="stockMaximo"   placeholder="ej: 20kg | 950g" required minlength="2" maxlength="20">
          </div>

          <div class="col-md-3">
            <label for="cantidad" class="form-label">Cantidad</label>
          <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="ej: 15kg | 460g" required maxlength="20">
          </div>
        </div>
        <br>
        
        <div class="row justify-content-center align-items-center g-2">
          <div class="col-md-4">
            <label for="estante" class="form-label">Estante</label>
            <select name="estante_id" id="estante" class="form-control"  required>
              <option disabled>Selecciona una</option>
              @foreach ($estantes as $e)
              <option value="{{$e->id}}">{{$e->nombreEstante}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-4">
            <label for="supplier" class="form-label">Proveedor</label>
            <select name="supplier_name[]" id="supplier" class="form-control"  required>
              <option disabled>Selecciona una</option>
              @foreach ($suppliers as $su)
              <option value="{{$su->id}}">{{$su->supplier_name}}</option>
              @endforeach
            </select>
          </div>
        </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>



</div>