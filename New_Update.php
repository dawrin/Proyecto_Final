<?php include'includes/header.php'; ?>
<?php
include'Conexion.php';
mysqli_query($conexion, "update clientes
set Nombre='$_REQUEST[newnombre]'
where Nombre='$_REQUEST[oldnombre]'") or
die("Problemas en el select:" . mysqli_error($conexion));

mysqli_query($conexion, "update clientes
set Apellido='$_REQUEST[newapellido]'
where Apellido='$_REQUEST[oldapellido]'") or
die("Problemas en el select:" . mysqli_error($conexion));

mysqli_query($conexion, "update clientes
set Edad='$_REQUEST[newedad]'
where Edad='$_REQUEST[oldedad]'") or
die("Problemas en el select:" . mysqli_error($conexion));

mysqli_query($conexion, "update clientes
set Telefono='$_REQUEST[newtelefono]'
where Telefono='$_REQUEST[oldtelefono]'") or
die("Problemas en el select:" . mysqli_error($conexion));

mysqli_query($conexion, "update clientes
set Email='$_REQUEST[newemail]'
where Email='$_REQUEST[oldemail]'") or
die("Problemas en el select:" . mysqli_error($conexion));

echo "El cliente fue modificado con exito";
?>
<?php include'includes/footer.php'; ?> 
