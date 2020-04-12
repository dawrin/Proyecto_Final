<?php include'includes/header.php'; ?>
<?php

include 'Conexion.php';
$registros = mysqli_query($conexion, "select Id from clientes
 where Id='$_REQUEST[id]'") or
 die("Problemas en el select:" . mysqli_error($conexion));
 if ($reg = mysqli_fetch_array($registros)) {
 mysqli_query($conexion, "delete from clientes where Id='$_REQUEST[id]'") or
 die("Problemas en el select:" . mysqli_error($conexion));
 echo "Se efectuó el borrado del cliente con dicho ID.";
 } else {
 echo "No existe un cliente con ese ID.";
 }
 mysqli_close($conexion);
?>
<?php include'includes/footer.php'; ?>
