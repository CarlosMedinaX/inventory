<style>
  body{
  
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
  }
  h1{
      text-align:left
  
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
  <h1>Listado de subcategorias</h1>
<table
class="table table-striped table-hover"
id="inventory" style="width:700px"           >
<thead class="bg-dark text-white">
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Subcategoria</th>
    <th scope="col">Categoria</th>
  </tr>
</thead>
<tbody>
  @foreach ($subcategorias as $s)
   <tr>
    <td>{{$s->id}}</td>
    <td>{{$s->nombreSubcategoria}}</td>
    <td>{{$s->nombreCategoria}}</td>
   </tr>
  @endforeach
</tbody>
</table>