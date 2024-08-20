 @extends('layout.plantilla')

@section('content')


<div class="text-center">
  <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal"         data-bs-target="#create">
    Nueva categoria
  </button>
  &nbsp;
  <a href="{{url('categorias/pdf')}}">
  <button type="button" class="btn btn-light border border-black mb-4">
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
      <table class="table table-striped table-hover" id="inventory" style="width:500px">
        <thead class="bg-dark text-white">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($categorias as $categoria)              
             <tr>
               <td>{{$categoria->id}}</td>
               <td>{{$categoria->nombreCategoria}}</td>
               <td>
                   <button type="button"  class="btn btn-warning btn-sm" data-bs-toggle="modal"         data-bs-target="#edit{{$categoria->id}}">
                    <i class="bi bi-pencil-square" title="EDITAR"></i>
                   </button>

                   <button type="button"class="btn btn-danger btn-sm"     data-bs-toggle="modal"    data-bs-target="#delete{{$categoria->id}}">
                    <i class="bi bi-trash" title="ELIMINAR"></i>
                  </button>  
             </td>
            </tr>

            <div>
                @include('categorias.delete')
            </div>
            <div>
                @include('categorias.update')

            </div>


          @endforeach
        </tbody>
      </table>

    </div>

  </div>
  {{-- <div class="d-flex justify-content-center">
    {{ $categorias->links() }}
  </div> --}}

</div>

<br>
@include('categorias.msj')


@include('categorias.create')
{{-- @include('categorias.edit') --}}


@section('js')
    <script>
      $('#inventory').DataTable({
        lengthMenu: [
           [10, 5, 3, -1],
             [10, 5, 3, 'All']
        ],
        columnDefs: [
        { targets: 2, orderable: false } // Desactiva el ordenamiento para la  primera columna (índice 0)
         ]
      });
      </script>
    @endsection
@endsection



