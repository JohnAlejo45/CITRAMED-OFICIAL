<?php
extract($_REQUEST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/cita.php";

if (isset($_REQUEST['idCita'])) {
  $objCita = new Cita();
  $resultado = $objCita->consultarCita($_REQUEST['idCita']);

  if (isset($resultado)) {
    if ($resultado->num_rows > 0) {
      $registro = $resultado->fetch_object(); ?>

      <!DOCTYPE html>
      <html lang="en">

      <head>
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      </head>

      <body>
        <div class="container">
          <h3 class="text-center">Favor Verifique la Siguiente Información de la Cita...</h3>
          <hr />
          <div class="form-horizontal">
            <form id="form1" name="form1" action="../Controlador/validarActualizarCita.php" method="POST">
              <div class="form-group">
                <label class="col-sm-4 control-label">Fecha</label>
                <input class="form-control col-sm-5" name="fecha" type="text" id="fecha"
                  value="<?php echo $registro->citFecha ?>" required>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Hora</label>
                <input class="form-control col-sm-5" name="hora" type="text" id="hora"
                  value="<?php echo $registro->citHora ?>" required>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Paciente</label>
                <input class="form-control col-sm-5" name="paciente" type="text" id="paciente"
                  value="<?php echo $registro->citPaciente ?>" required>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Médico</label>
                <input class="form-control col-sm-5" name="medico" type="text" id="medico"
                  value="<?php echo $registro->citMedico ?>" required>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Consultorio</label>
                <input class="form-control col-sm-5" name="consultorio" type="text" id="consultorio"
                  value="<?php echo $registro->citConsultorio ?>" required>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Estado</label>
                <select class="form-control col-sm-5" name="estado" id="estado" required>
                  <option value="asignado" <?php if ($registro->citEstado == 'asignado')
                    echo 'selected'; ?>>Asignado</option>
                  <option value="atendido" <?php if ($registro->citEstado == 'atendido')
                    echo 'selected'; ?>>Atendido</option>
                </select>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label">Observaciones</label>
                <input class="form-control col-sm-5" name="observaciones" type="text" id="observaciones"
                  value="<?php echo $registro->citObservaciones ?>" required>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-5">
                  <input type="hidden" name="idCita" id="idCita" value="<?php echo $registro->idCita ?>">
                  <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
                </div>
              </div>
            </form>
            <hr />
          </div>
        </div>

        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
      </body>

      </html>

      <?php
    } else {
      echo '<div class="alert alert-danger text-center">La Cita No existe en la base de datos</div>';
    }
  }
}
?>