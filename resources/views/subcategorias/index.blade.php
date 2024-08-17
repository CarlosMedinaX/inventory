@extends('layout.plantilla')

@section('content')
    
<div class="text-center">
  <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal"  data-bs-target="#create" >
    Nueva subcategoria
  </button>
</div>

<div class="contrainer">
    <div class="row">



    </div>
    <div class="row justify-content-center">
          <div class="col-md-6">
              <table
                class="table table-striped table-hover"
                id="inventory" style="width:700px"           >
                <thead class="bg-dark text-white">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Subcategoria</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subcategorias as $s)
                   <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->nombreSubcategoria}}</td>
                    <td>{{$s->nombreCategoria}}</td>
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"   data-bs-target="#edit{{$s->id}}">
                        <i class="bi bi-pencil-square" title="EDITAR"></i>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"    data-bs-target="#delete{{$s->id}}">          <i class="bi bi-trash" title="ELIMINAR"></i>
                      </button>
                    </td>
                   </tr>
                   <div>
                    @include('subcategorias.update')
                  </div>
                   
                   <div>
                    @include('subcategorias.delete')
                  </div>
                  @endforeach
                </tbody>
              </table>
            
            

          </div>
    </div>
    {{-- <div class="d-flex justify-content-center">
      {{ $subcategorias->links() }}
    </div> --}}
</div>

<br>
@include('subcategorias.msj')


@include('subcategorias.create')


@section('js')
    <script>
      $('#inventory').DataTable({
        lengthMenu: [
           [10, 5, 3, -1],
             [10, 5, 3, 'All']
        ],
        columnDefs: [
        { targets: 3, orderable: false } // Desactiva el ordenamiento para la  primera columna (índice 0)
         ]
      });
      </script>
    @endsection
@endsection