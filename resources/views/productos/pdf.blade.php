@extends('layout.plantilla')
@section('content')
    
  <div class="container">
    <table class="table table-striped table-hover">
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

        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
  </div>
@endsection