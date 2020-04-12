<?php include'includes/header.php'; ?>
<?php include'includes/form_container_header.php'; ?>
    <?php
include 'Conexion.php';
$registros = mysqli_query($conexion, "select Nomcliente,Cantidad,Tiempo,Cuota
from prestamo where Id='$_REQUEST[id]'") or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
     ?>
     <h2 class="text-center">Editar prestamo</h2>
<form class="form-group" action="new_update_prestamo.php" method="post">
  <div class="form-group">
  <?php echo"<b>Cliente: ". $reg['Nomcliente']."</b>"?>
</div>
  <div class="form-group">
  <input type="text" name="newcantidad" class="form-control" placeholder="Ingrese nueva Cantidad" value="<?php echo $reg['Cantidad']?>">
  <input type="hidden" name="oldcantidad" value="<?php echo $reg['Cantidad']?>">
</div>
  <div class="form-group">
  <input type="text" name="newtiempo" class="form-control" placeholder="Ingrese nueva Fecha yyyy-mm-dd" value="<?php echo $reg['Tiempo']?>">
  <input type="hidden" name="oldtiempo" value="<?php echo $reg['Tiempo']?>">
</div>
  <div class="form-group">
  <input type="text" name="newcuota" placeholder="Ingrese nueva cuota" value="<?php echo $reg['Cuota']?>">
  <input type="hidden" name="oldcuota" value="<?php echo $reg['Cuota']?>">
</div>
  <input type="submit" value="Enviar" class="btn btn-success">
</form>

<?php
 } else
 echo "No existe Prestamo con dicho ID";
 ?>
 <?php include'includes/form_container_footer.php'; ?>
<?php include'includes/footer.php'; ?>
