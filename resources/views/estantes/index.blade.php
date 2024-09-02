@extends('layout.plantilla')

@section('content')

<div class="text-center">
  <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal"         data-bs-target="#create">
    Nuevo estante
  </button>
  &nbsp;
  <a href="{{url('estantes/pdf')}}">
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
      <table class="table table-striped table-hover" id="inventory" style="width:500px">
        <thead class="bg-dark text-white">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Piso</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
                       
          @foreach ($estantes as $estante)
              
             <tr>
               <td>{{$estante->id}}</td>
               <td>{{$estante->nombreEstante}}</td>
               <td>{{$estante->pisoEstante}}</td>
               <td>
                   <button type="button"  class="btn btn-warning btn-sm" data-bs-toggle="modal"         data-bs-target="#edit{{$estante->id}}">
                    <i class="bi bi-pencil-square" title="EDITAR"></i>
                   </button>

                   <button type="button"class="btn btn-danger btn-sm"     data-bs-toggle="modal"    data-bs-target="#delete{{$estante->id}}">
                    <i class="bi bi-trash" title="ELIMINAR"></i>
                  </button>  
               </td>
            </tr>

            <div>
                @include('estantes.delete')
            </div>
            <div>
                @include('estantes.update')

            </div>
          @endforeach


        </tbody>
      </table>

    </div>

  </div>
  {{-- <div class="d-flex justify-content-center">
    {{ $estantes->links() }}
  </div> --}}

</div>

<br>
@include('estantes.msj')

@include('estantes.create')

    @section('js')
        
    <script>
      $('#inventory').DataTable({
        lengthMenu: [
          [3, 5, 10, -1],
          [3, 5, 10, 'All']
        ],
        columnDefs: [
          { targets: 3, orderable: false } 
        ]
      });
    </script>
      @endsection
@endsection