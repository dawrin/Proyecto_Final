<?php include'includes/header.php'; ?>
<table class="table">
  <thead>
    <tr>
    <th><a href="form_insert_prestamo.php">Agregar Prestamo </a> </th>
    <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
    <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
    <th><form action="select_by_prestamo.php" method="post"><b>Buscar:</b>
    <input type="number" name="id"  placeholder="Buscar por ID" autofocus>
    <input type="submit" class="btn btn-success" value="buscar">
  </form></th>
    </tr>
  </thead>


</table>
  <div class="container">
  <table class="table">
    <thead class="thead-dark">
				<tr>
          <th>ID</th>
					<th>Nombre del Cliente</th>
					<th>Cantidad Prestada</th>
          <th>Tiempo Máximo de Entrega</th>
          <th>Cuota Mensual</th>
          <th>Acción</th>
				</tr>
      </thead >

<?php
include'Conexion.php';

$registros = mysqli_query($conexion, "select Id,Nomcliente,Cantidad,Tiempo,Cuota
from prestamo") or
die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {

   ?>
    <tr>
      <th class="table-success" scope=\"row\"><?php echo $reg['Id']?></th>
      <td class="table-success"><?php echo $reg['Nomcliente']?></td>
      <td class="table-success"><?php echo $reg['Cantidad']?></td>
      <td class="table-success"><?php echo $reg['Tiempo']?></td>
      <td class="table-success"><?php echo $reg['Cuota']?></td>
      <td class="table-success"><a href="update_prestamo.php?id=<?php echo $reg['Id']?>"><button class="btn btn-primary">Editar</button></a>
        <a href="delete_prestamo.php?id=<?php echo $reg['Id'] ?>"><button class="btn btn-danger">Eliminar</button></a>
      </td>

    </tr>
<?php

}
mysqli_close($conexion);
?>
</table>
</div>
<?php include'includes/footer.php'; ?>
