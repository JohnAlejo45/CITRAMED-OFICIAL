<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consultar Tratamiento</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h3 class="text-center pt-5">Digite el Nombre del Tratamiento a Consultar...</h3>
    <hr />
    <div class="form-horizontal">
      <form id="form1" name="form1" action="" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label">Nombre</label>
          <input name="nombre" type="text" id="nombre" class="form-control col-sm-5" required>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label"></label>
          <div class="col-sm-5">
            <button type="submit" class="btn btn-warning btn-block">Buscar</button>
          </div>
        </div>
      </form>
      <hr />
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if (isset($_POST['nombre'])) {
  require "../Modelo/conexionBaseDatos.php";
  require "../Modelo/tratamiento.php";

  $objTratamiento = new Tratamiento();
  $resultado = $objTratamiento->consultarTratamiento($_POST['nombre']);
  if ($resultado && $resultado->num_rows > 0) {
    echo '<h1 class="text-center">DATOS DEL TRATAMIENTO</h1>';
    echo '<table class="table table-hover text-center mt-3">';
    echo '<thead><tr><th>Nombre</th><th>Duración</th><th>Costo</th></tr></thead>';
    while ($registro = $resultado->fetch_object()) {
      echo '<tr>';
      echo '<td>' . $registro->tratNombre . '</td>';
      echo '<td>' . $registro->tratDuracion . '</td>';
      echo '<td>' . $registro->tratCosto . '</td>';
      echo '</tr>';
    }
    echo '</table>';
  } else {
    echo '<div class="alert alert-danger text-center">El tratamiento no existe en la base de datos</div>';
  }
}
?>
