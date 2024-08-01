<!DOCTYPE html>
<html lang="en">
<head>
  <title>Actualizar Cita</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h3 class="text-center pt-5">Digite el ID de la Cita a Consultar...</h3>
    <hr />
    <div class="form-horizontal">
      <form id="form1" name="form1" action="" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label">ID Cita</label>
          <input name="idCita" type="text" id="idCita" class="form-control col-sm-5" required>
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
              alert("Los Datos de la Cita Fueron Actualizados");
              window.location.href="index2.php?pag=actualizarCita";
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
require "../Modelo/cita.php";

if (isset($_POST['idCita'])) {
  $objCita = new Cita();
  $resultado = $objCita->consultarCita($_POST['idCita']);
  if (isset($resultado)) {
    if ($resultado->num_rows > 0) { ?>

      <h1 align="center">DATOS DE LA CITA</h1>
      <table class="table table-hover text-center mt-3">
        <thead>
          <th class="text-center">Fecha</th>
          <th class="text-center">Hora</th>
          <th class="text-center">Paciente</th>
          <th class="text-center">Médico</th>
          <th class="text-center">Consultorio</th>
          <th class="text-center">Estado</th>
          <th class="text-center">Observaciones</th>
          <th class="text-center">Acción</th>
        </thead>
        <?php while ($registro = $resultado->fetch_object()) { ?>
          <tr>
            <td><?php echo $registro->citFecha ?></td>
            <td><?php echo $registro->citHora ?></td>
            <td><?php echo $registro->citPaciente ?></td>
            <td><?php echo $registro->citMedico ?></td>
            <td><?php echo $registro->citConsultorio ?></td>
            <td><?php echo $registro->citEstado ?></td>
            <td><?php echo $registro->citObservaciones ?></td>
            <td>
              <a href="index2.php?pag=editarCita&idCita=<?php echo $registro->idCita ?>">
                <span class="class btn btn-warning">Editar</span>
              </a>
            </td>
          </tr>
        <?php } // Cerrando el ciclo while ?>
      </table>
    <?php } else { echo '<div class="alert alert-danger text-center">La Cita No existe en la base de datos</div>'; }
  }
}
?>
