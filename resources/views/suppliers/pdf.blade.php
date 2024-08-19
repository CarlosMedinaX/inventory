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
<h1>Listado de proveedores</h1>
<table class="table table-striped table-hover"  id="inventory" style="width:500px">
        <thead class="bg-dark text-white">
          <tr>
            <th >Id</th>
            <th >Nombre</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($suppliers as $s)
             <tr>
               <td>{{$s->id}}</td>
               <td>{{$s->supplier_name}}</td>
            </tr>
          @endforeach


        </tbody>
      </table>