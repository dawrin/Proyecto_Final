<?php include'includes/header.php'; ?>
 <?php
include 'Conexion.php';
$fecha = $_REQUEST['fecha'];
 mysqli_query($conexion, "insert into prestamo(Nomcliente,cantidad,Tiempo,Cuota) values
 ('$_REQUEST[nombre]',$_REQUEST[cantidad],'$fecha',$_REQUEST[cuota])")
 or die("Problemas en el select" . mysqli_error($conexion));
 mysqli_close($conexion);
 echo "Prestamo ingresado.";
 ?>
<?php include'includes/footer.php'; ?>
