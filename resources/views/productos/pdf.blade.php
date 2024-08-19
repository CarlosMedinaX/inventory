 {{-- @extends('layout.plantilla') --}}


{{--@section('content') --}}

<style>

body{

  margin: 0;
  padding: 0;
  box-sizing: border-box;

}
  h1{
      text-align: center

  }

  table{
    width: 50%;
    border-collapse: collapse; 
    margin-top: 20px

  }

  th,td{

    border: 1px solid black;
    padding: 5px;
    font-size: 18px;
    text-align: left;
  }

</style>


    <h1 class="text-center mb-4 mt-2">Listado de productos</h1>
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

{{-- @endsection

@section('header')
    
@endsection --}}



{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
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
  </div> --}}

  
{{-- </body>
</html> --}}