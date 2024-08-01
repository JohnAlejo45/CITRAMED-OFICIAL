<!DOCTYPE html>
<html lang="en">
<head>
  <title>MeDSyS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- Código de JavaScript para mostrar mensajes emergentes -->
  <?php
  if (isset($_GET['msj'])) {
    if ($_GET['msj'] == 1) {
      echo '<script type="text/javascript">
              alert("Los Datos del Tratamiento Fueron Actualizados");
              window.location.href="index2.php?pag=actualizarTratamiento";
            </script>';
    } elseif ($_GET['msj'] == 2) {
      echo '<script type="text/javascript">
              alert("La Información No Pudo Ser Actualizada");
              window.location.href="index2.php";
            </script>';
    }
  }
  ?>
</body>
</html>

<?php
extract($_POST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/tratamiento.php";

if (isset($_POST['nombre'])) {
  $objTratamiento = new Tratamiento();
  $resultado = $objTratamiento->consultarTratamiento($_POST['nombre']);
  if (isset($resultado)) {
    if ($resultado->num_rows > 0) { ?>

      <h1 align="center">DATOS DEL TRATAMIENTO</h1>
      <table class="table table-hover text-center mt-3">
        <thead>
          <th class="text-center">Nombre</th>
          <th class="text-center">Duración</th>
          <th class="text-center">Costo</th>
          <th class="text-center">Acción</th>
        </thead>
        <?php while ($registro = $resultado->fetch_object()) { ?>
          <tr>
            <td><?php echo $registro->tratNombre ?></td>
            <td><?php echo $registro->tratDuracion ?></td>
            <td><?php echo $registro->tratCosto ?></td>
            <td>
              <a href="index2.php?pag=editarTratamiento&nombre=<?php echo $registro->tratNombre ?>">
                <span class="class btn btn-warning">Editar</span>
              </a>
            </td>
          </tr>
        <?php } // Cerrando el ciclo while ?>
      </table>
    <?php } else { echo '<div class="alert alert-danger text-center">El Tratamiento No existe en la base de datos</div>'; }
  }
}
?>
