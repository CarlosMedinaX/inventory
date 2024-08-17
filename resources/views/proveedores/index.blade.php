@extends('layout.plantilla')

@section('content')

<div class="text-center">
  <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"         data-bs-target="#create">
    Nuevo proveedor
  </button>
</div>
<div class="container">
  <div class="row justify-content-center">
    <!-- Button trigger modal -->
    {{-- el data-bs-target="#create" se relaciona con el id="create" de create.blade.php --}}

  </div>
  <div class="row justify-content-center">
    <div class="col-md-6 d-flex justify-content-center">
      <table class="table table-primary table-striped table-hover">
        <thead class="bg-dark text-white">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
                       
          @foreach ($proveedores as $proveedor)
              
             <tr>
               <td>{{$proveedor->id}}</td>
               <td>{{$proveedor->nombreProveedor}}</td>
               <td>
                   <button type="button"  class="btn btn-warning btn-sm" data-bs-toggle="modal"         data-bs-target="#edit{{$proveedor->id}}">
                   Editar
                   </button>

                   <button type="button"class="btn btn-danger btn-sm"     data-bs-toggle="modal"    data-bs-target="#delete{{$proveedor->id}}">
                   Eliminar
                  </button>  
               </td>
            </tr>

            <div>
                @include('proveedores.delete')
            </div>
            <div>
                @include('proveedores.update')

            </div>
          @endforeach


        </tbody>
      </table>

    </div>

  </div>
  <div class="d-flex justify-content-center">
    {{ $proveedores->links() }}
  </div>

</div>
@include('proveedores.create')

    
@endsection