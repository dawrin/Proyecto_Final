<?php include'includes/header.php'; ?>
<table class="table">
  <thead>
    <tr>
    <th><a href="Form_Insert.php">Agregar cliente </a> </th>
    <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
    <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>

    <th><form action="Select_By.php" method="post"> <b>Buscar:</b>
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
					<th>Nombre</th>
					<th>Apellidos</th>
          <th>Años</th>
          <th>Teléfono</th>
					<th>Email</th>
          <th>Acción</th>
				</tr>
      </thead >

<?php
include'Conexion.php';

$registros = mysqli_query($conexion, "select Id,Nombre,Apellido,Edad,Telefono,Email
from clientes") or
die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {

   ?>
    <tr>
      <th class="table-success" scope=\"row\"><?php echo $reg['Id']?></th>
      <td class="table-success"><?php echo $reg['Nombre']?></td>
      <td class="table-success"><?php echo $reg['Apellido']?></td>
      <td class="table-success"><?php echo $reg['Edad']?></td>
      <td class="table-success"><?php echo $reg['Telefono']?></td>
      <td class="table-success"><?php echo $reg['Email']?></td>
      <td class="table-success"><a href="Update.php?id=<?php echo $reg['Id']?>"><button class="btn btn-primary">Editar</button></a>
        <a href="Delete.php?id=<?php echo $reg['Id'] ?>"><button class="btn btn-danger">Eliminar</button></a>
      </td>

    </tr>
<?php
}
mysqli_close($conexion);
?>
</table>
</div>
<?php include'includes/footer.php'; ?>
