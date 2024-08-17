<div class="modal fade" id="edit{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR PRODUCTO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenido del modal -->
        <form action="{{route('productos.update',$p->id)}}" method="POST">
          @csrf    
          @method('PUT')   
          <div
            class="row justify-content-center align-items-center g-2"
            >
            <div class="col-md-4">
              <label for="subcategoria_id" class="form-label">Subcategorias</label>
              <select name="subcategoria_id" id="subcategoria_id" class="form-control" required>
                @foreach ($subcategorias as $subcategoria)
                    <option value="{{ $subcategoria->id }}" {{ $subcategoria->id == $p->subcategoria_id ? 'selected' : '' }}>
                        {{ $subcategoria->nombreSubcategoria }}
                    </option>
                @endforeach
            </select>
            
            </div>

            <div class="col-md-4">
              <label for="nombreProducto" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" placeholder="ej: cebollas" value="{{old('nombreProducto', $p->nombreProducto)}}" required maxlength="30">
            </div>
            <div class="col-md-3">
              <label for="precioUnitario" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precioUnitario" id="precioUnitario" placeholder="ej: 12$ | 438,36bs" value="{{old('precioUnitario', $p->precioUnitario)}}" required minlength="2" maxlength="20">
            </div>
          </div>
          <br>

          <div class="row justify-content-center align-items-center g-2">
          <div class="col-md-4">
            <label for="min" class="form-label">Stock mínimo</label>
            <input type="text" class="form-control" name="stockMinimo" id="min" placeholder="ej: 12kg | 200g" value="{{old('stockMinimo', $p->stockMinimo)}}"   required minlength="2" maxlength="20">
            
          </div>
          <div class="col-md-4">
            <label for="max" class="form-label">Stock máximo</label>
          <input type="text" class="form-control" name="stockMaximo" id="max" placeholder="ej: 20kg | 950g" value="{{old('stockMaximo', $p->stockMaximo)}}" required minlength="2" maxlength="20">
          </div>
          <div class="col-md-3">
            <label for="cantidad" class="form-label">Cantidad</label>
          <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="ej: 15kg | 460g" value="{{old('cantidad', $p->cantidad)}}" required maxlength="20">
          </div>
         </div>
        <br>
        
         <div class="row justify-content-center align-items-center g-2">
          <div class="col-md-4">
            <label for="estante" class="form-label">Estante</label>
            <select name="estante_id" id="estante" class="form-control"  required>
              <option disabled>Selecciona una</option>
              @foreach ($estantes as $e)
              <option value="{{$e->id}}" {{$e->id == $p->estante_id ? 'selected' : ''}}>{{$e->nombreEstante}}
              </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-4">
            <label for="supplier" class="form-label">Proveedor</label>
             <select name="supplier_id[]" id="supplier" class="form-control"  required>
              <option disabled>Selecciona una</option>
              @foreach ($suppliers as $su)
              <option value="{{$su->id}}" {{$su->id == $p->supplier_id ? 'selected' : ''}}>{{$su->supplier_name}}</option>
              @endforeach
            </select> 
          </div>
         </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-warning">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>



</div>