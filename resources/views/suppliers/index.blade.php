@extends('layout.plantilla')

@section('content')

<div class="text-center">
  <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal"         data-bs-target="#create">
    Nuevo proveedor
  </button>
  &nbsp;
  <a href="{{url('suppliers/pdf')}}">
  <button type="button" class="btn btn-light border border-dark mb-4">
    Reporte PDF
    </button>
  </a>
</div>
<div class="container">
  <div class="row justify-content-center">
    <!-- Button trigger modal -->
    {{-- el data-bs-target="#create" se relaciona con el id="create" de create.blade.php --}}

  </div>
  <div class="row justify-content-center">
    <div class="col-md-6 d-flex justify-content-center">
      <table class="table table-striped table-hover"  id="inventory" style="width:500px">
        <thead class="bg-dark text-white">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>

          </tr>
        </thead>
        <tbody>
                       
          @foreach ($suppliers as $s)
              
             <tr>
               <td>{{$s->id}}</td>
               <td>{{$s->supplier_name}}</td>

               <td>
                <button type="button"  class="btn btn-warning" data-bs-toggle="modal"         data-bs-target="#edit{{$s->id}}" style="--bs-btn-padding-y: .05rem; --bs-btn-padding-x: .5rem">
                  <i class="bi bi-pencil-square" title="EDITAR"></i>
                 </button>

                   <button type="button"class="btn btn-danger btn-sm"     data-bs-toggle="modal"    data-bs-target="#delete{{$s->id}}" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .5rem">
                    <i class="bi bi-trash" title="ELIMINAR"></i>
                  </button>  
               </td>
            </tr>

            <div>
                @include('suppliers.delete')
            </div>
            <div>
                @include('suppliers.edit')

            </div>
          @endforeach


        </tbody>
      </table>

    </div>

  </div>
  {{-- <div class="d-flex justify-content-center">
    {{ $suppliers->links() }}
  </div> --}}
</div>

<br>
@include('suppliers.msj')

@include('suppliers.create')

    @section('js')
     <script>
      $('#inventory').DataTable({
        lengthMenu: [
           [3, 5, 10, -1],
             [3, 5, 10, 'All']
        ],
        columnDefs: [
        { targets: 2, orderable: false } // Desactiva el ordenamiento para la  primera columna (índice 0)
                    ]
      });
      </script>
    @endsection
    {{-- <div class="mb-2">

    </div> --}}
    

    
@endsection