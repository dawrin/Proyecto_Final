<?php include'includes/header.php'; ?>
<?php
include 'Conexion.php';
$registros = mysqli_query($conexion, "select Id,Nomcliente,Cantidad,Tiempo,Cuota
from prestamo where Id='$_REQUEST[id]'") or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {

  echo "Nombre del Cliente: " . $reg['Nomcliente'] . "<br>";
  echo "Cantidad Prestada: " . $reg['Cantidad'] . "<br>";
  echo "Tiempo Maximo de Entrega: " .$reg['Tiempo']. "<br>";
  echo "Cuota Mensual: " . $reg['Cuota'] . "<br>";
  echo "<hr>";
}
else
{
echo "No existe un Prestamo con ese Id.";
}
mysqli_close($conexion);
?>
<?php include'includes/footer.php'; ?>
