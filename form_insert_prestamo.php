<?php include'includes/header.php'; ?>
<?php include'includes/form_container_header.php'; ?>
<?php include'Conexion.php';

$registros = mysqli_query($conexion, "select Nombre
from clientes") or
die("Problemas en el select:" . mysqli_error($conexion));
?>
<h2 class="text-center">Agregar Prestamo</h2> <hr>
    <form action="Insert_prestamo.php" method="post">
      <div class="form-group">
        <select name="nombre">
          <option>Selecciona el nombre del cliente</option>
          <?php
          if($registros)
          {
            while ($row= mysqli_fetch_array($registros))
            {
              $Nom=$row["Nombre"];
              echo "<option>$Nom</option>";
            }
          }
          ?>
        </select>
    </div>
    <div class="form-group">
    <input type="number" name="cantidad" class="form-control" placeholder="Inserte La cantidad ">
  </div>
  <div class="form-group">
    <input type="text" name="fecha" class="form-control" placeholder="Inserte el fecha yyyy-mm-dd">
  </div>
  <div class="form-group">
    <input type="number" name="cuota" class="form-control" placeholder="Inserte La cuota">
    <br>
  </div>
    <input type="submit" value="Enviar" class="btn btn-success"></input>
    </form>
<?php include'includes/form_container_footer.php'; ?>
<?php include'includes/footer.php'; ?>
