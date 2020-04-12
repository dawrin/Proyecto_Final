<?php include'includes/header.php'; ?>
<?php include'includes/form_container_header.php'; ?>
    <?php
include 'Conexion.php';
$registros = mysqli_query($conexion, "select Nombre,Apellido,Edad,Telefono,Email
from clientes where Id='$_REQUEST[id]'") or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
     ?>
     <h2 class="text-center">Editar Cliente</h2>
<form class="form-group" action="New_Update.php" method="post">
  <div class="form-group">
  <input type="text" name="newnombre" class="form-control" placeholder="Ingrese nuevo Nombre" value="<?php echo $reg['Nombre']?>"autofocus>
  <input type="hidden" name="oldnombre" value="<?php echo $reg['Nombre']?>">
</div>
  <div class="form-group">
  <input type="text" name="newapellido" class="form-control" placeholder="Ingrese nuevo Apellido" value="<?php echo $reg['Apellido']?>">
  <input type="hidden" name="oldapellido" value="<?php echo $reg['Apellido']?>">
</div>
  <div class="form-group">
  <input type="number" name="newedad" class="form-control" placeholder="Ingrese nueva Edad" value="<?php echo $reg['Edad']?>">
  <input type="hidden" name="oldedad" value="<?php echo $reg['Edad']?>">
</div>
  <div class="form-group">
  <input type="text" name="newtelefono" placeholder="Ingrese nuevo Numero de teléfono" value="<?php echo $reg['Telefono']?>">
  <input type="hidden" name="oldtelefono" value="<?php echo $reg['Telefono']?>">
</div>
  <div class="form-group">
  <input type="text" name="newemail" placeholder="Ingrese nuevo Email" value="<?php echo $reg['Email']?>">
  <input type="hidden" name="oldemail" value="<?php echo $reg['Email']?>">
</div>
  <input type="submit" value="Enviar" class="btn btn-success">
</form>

<?php
 } else
 echo "No existe Cliente con dicho ID";
 ?>
 <?php include'includes/form_container_footer.php'; ?>
<?php include'includes/footer.php'; ?>
