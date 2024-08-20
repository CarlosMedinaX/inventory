<style>
  body{
  
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
  }
  h1{
      text-align:  left;
  
  }
  
  table{
    width: 100%;
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
<h1>Listado de Categorias</h1>
<table class="table table-striped table-hover" id="inventory" style="width:500px">
  <thead class="bg-dark text-white">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($categorias as $categoria)              
       <tr>
         <td>{{$categoria->id}}</td>
         <td>{{$categoria->nombreCategoria}}</td>
     
      </tr>

 

    @endforeach
  </tbody>
</table>
