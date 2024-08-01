<?php
  require "../Modelo/conexionBaseDatos.php";
  require "../modelo/tratamiento.php";
  $objTratamiento = New Tratamiento();
  $tratamientos = $objTratamiento->listarTratamientos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MeDSyS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="js/sweetalert/sweetalert2.min.css">
</head>
<body>
  <div class="container-fluid">
    <h1 align="center" class="mt-5">Información de los tratamientos registrados</h1>
    <table class="table table-hover text-center">
      <thead>
        <tr align="center" bgcolor="#ffc800">
          <th class="text-center">Nombre</th>
          <th class="text-center">Duración</th>
          <th class="text-center">Costo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($tratamiento = $tratamientos->fetch_object()) {
        ?>
          <tr>
            <td><?php echo $tratamiento->tratNombre ?></td>
            <td><?php echo $tratamiento->tratDuracion ?></td>
            <td><?php echo $tratamiento->tratCosto ?></td>
          </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>

  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
