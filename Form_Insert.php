<?php include'includes/header.php'; ?>
<?php include'includes/form_container_header.php'; ?>
<h2 class="text-center">Agregar Cliente</h2> <hr>
    <form action="Insert.php" method="post">
      <div class="form-group">
    <input type="text" name="nombre" class="form-control" placeholder="Inserte el Nombre" autofocus>
    </div>
    <div class="form-group">
    <input type="text" name="apellido" class="form-control" placeholder="Inserte los Apellidos ">
  </div>
  <div class="form-group">
    <input type="number" name="edad" class="form-control" placeholder="Inserte la edad">
  </div>
  <div class="form-group">
    <input type="text" name="telefono" class="form-control" placeholder="Inserte el Teléfono">
  </div>
  <div class="form-group">
    <input type="text" name="email" class="form-control" placeholder="Inserte el Email">
    <br>
  </div>
    <input type="submit" value="Enviar" class="btn btn-success"></input>
    </form>
<?php include'includes/form_container_footer.php'; ?>
<?php include'includes/footer.php'; ?>
