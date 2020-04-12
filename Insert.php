<?php include'includes/header.php'; ?>
 <?php
include 'Conexion.php';
 mysqli_query($conexion, "insert into clientes(Nombre,Apellido,Edad,Telefono,Email) values
 ('$_REQUEST[nombre]','$_REQUEST[apellido]',$_REQUEST[edad],'$_REQUEST[telefono]','$_REQUEST[email]')")
 or die("Problemas en el select" . mysqli_error($conexion));
 mysqli_close($conexion);
 echo "Cliente ingresado.";
 ?>
<?php include'includes/footer.php'; ?>
