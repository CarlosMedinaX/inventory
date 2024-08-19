@extends('layout.plantilla')

@section('css')

{{-- <link href="https://cdn.datatables.net/2.1.2/css/dataTables.bootstrap5.css" rel="stylesheet"> --}}

@endsection

@section('content')


<div class="text-center">
  <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal"         data-bs-target="#create">
    Agregar producto
  </button>
  &nbsp;
  <a href="{{url('productos/pdf')}}" style="text-decoration: none; color:inherit">
    <button type="button" class="btn btn-light border border-dark mb-4">
      Reporte PDF
      </button>
  </a>
</div>


<div class="container">
      <table class="table table-striped table-hover" id="inventory">
        <thead class="bg-dark text-white">
          
          <tr>
            <th>Id</th>
            <th>Subcategoria</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Stock mínimo</th>
            <th>Stock máximo</th>
            <th>Estante</th>
            <th>Proveedor</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productos as $p)
             <tr>
              <td>{{$p->id}}</td>
              <td><a href="{{route('subcategorias.index')}}">{{$p->nombreSubcategoria}}</a></td>
               <td>{{$p->nombreProducto}}</td>
               <td>{{$p->precioUnitario}}</td>
               <td>{{$p->cantidad}}</td>
               <td>{{$p->stockMinimo}}</td>
               <td>{{$p->stockMaximo}}</td>
               <td><a href="{{route('estantes.index')}}">{{$p->nombreEstante}}</a></td>
               <td><a href="{{route('suppliers.index')}}">{{$p->supplier_name}}</a></td>
               <td>
                   <button type="button"  class="btn btn-warning btn-sm" data-bs-toggle="modal"         data-bs-target="#edit{{$p->id}}">
                    <i class="bi bi-pencil-square" title="EDITAR"></i>
                   </button>
                   <button type="button"class="btn btn-danger btn-sm"     data-bs-toggle="modal"    data-bs-target="#delete{{$p->id}}">
                    <i class="bi bi-trash" title="ELIMINAR"></i>
                  </button>  

             </td>
            </tr>

            <div>
                @include('productos.delete')
            </div>
            <div>
                @include('productos.update')

            </div>
            @endforeach


        </tbody>
      </table>
    </div>
</div>

                @include('productos.create')

                @include('productos.msj')


    
                @section('js')
                    {{-- <script src="https://cdn.datatables.net/2.1.2/js/dataTables.bootstrap5.js"></script>
                    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script> --}}
                    <script>
                    $('#inventory').DataTable({
                      lengthMenu: [
                         [10, 5, 3, -1],
                           [10, 5, 3, 'All']
                      ],
                      columnDefs: [
                         { targets: 9, orderable: false } // Desactiva el ordenamiento para la  primera columna (índice 0)
                    ]
                    });
                    </script>
                @endsection
@endsection
