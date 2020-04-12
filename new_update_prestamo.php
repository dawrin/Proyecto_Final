<?php include'includes/header.php'; ?>
<?php
include'Conexion.php';

mysqli_query($conexion, "update prestamo
set Cantidad='$_REQUEST[newcantidad]'
where Cantidad='$_REQUEST[oldcantidad]'") or
die("Problemas en el select:" . mysqli_error($conexion));

mysqli_query($conexion, "update prestamo
set Tiempo='$_REQUEST[newtiempo]'
where Tiempo='$_REQUEST[oldtiempo]'") or
die("Problemas en el select:" . mysqli_error($conexion));

mysqli_query($conexion, "update prestamo
set Cuota='$_REQUEST[newcuota]'
where Cuota='$_REQUEST[oldcuota]'") or
die("Problemas en el select:" . mysqli_error($conexion));

echo "El prestamo fue modificado con exito";
?>
<?php include'includes/footer.php'; ?>
