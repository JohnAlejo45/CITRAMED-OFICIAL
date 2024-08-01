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
        <h3 class="text-center pt-5">Digite el ID de la Cita a Consultar...</h3>
        <hr />
        <div class="form-horizontal">
            <form id="form1" name="form1" action="" method="POST">
                <div class="form-group">
                    <label class="col-sm-4 control-label">ID de la Cita</label>
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
</body>
</html>

<?php
extract ($_POST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/cita.php";

if (isset($_POST['idCita'])) {
    $objCita = new Cita();
    $resultado = $objCita->consultarCita($_POST['idCita']);
    if (isset($resultado) && $resultado->num_rows > 0) {
        echo '<h1 align="center">DATOS DE LA CITA</h1>';
        echo '<table class="table table-hover text-center mt-3">';
        echo '<thead>';
        echo '<th class="text-center">ID Cita</th>';
        echo '<th class="text-center">Fecha</th>';
        echo '<th class="text-center">Hora</th>';
        echo '<th class="text-center">Paciente</th>';
        echo '<th class="text-center">Medico</th>';
        echo '<th class="text-center">Consultorio</th>';
        echo '<th class="text-center">Estado</th>';
        echo '<th class="text-center">Observaciones</th>';
        echo '</thead>';

        while ($registro = $resultado->fetch_object()) {
            echo '<tr>';
            echo '<td>' . $registro->idCita . '</td>';
            echo '<td>' . $registro->citFecha . '</td>';
            echo '<td>' . $registro->citHora . '</td>';
            echo '<td>' . $registro->citPaciente . '</td>';
            echo '<td>' . $registro->citMedico . '</td>';
            echo '<td>' . $registro->citConsultorio . '</td>';
            echo '<td>' . $registro->citEstado . '</td>';
            echo '<td>' . $registro->citObservaciones . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<div class="alert alert-danger text-center">La cita no existe en la base de datos</div>';
    }
}
?>
