<?php include'includes/header.php'; ?>
<?php
include 'Conexion.php';
$registros = mysqli_query($conexion, "select Nombre,Apellido,Edad,Telefono,Email
from clientes where Id='$_REQUEST[id]'") or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
echo "Nombre:" . $reg['Nombre'] . "<br>";
echo "Apellidos:" . $reg['Apellido'] . "<br>";
echo "Edad:" .$reg['Edad']. "<br>";
echo "Telefono:" . $reg['Telefono'] . "<br>";
echo "Email:" . $reg['Email'] . "<br>";

echo "<br>";
echo "<hr>";
}
else
{
echo "No existe un Cliente con ese ID.";
}
mysqli_close($conexion);
?>
<?php include'includes/footer.php'; ?>
