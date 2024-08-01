<!DOCTYPE html>
<html lang="en">
<head>
  <title>CITRAMED</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/stylemenu.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>
<body>
    <div class="container-fluid cabecera fixed-top">
      <div class="row">
        <div class="col-md-2 logo">
          <span class="float-left">
            <em><p>CITRAMED</p></em></span>
          <span class="lema">
            <span class="negrita"><a href="index2.php">REGRESAR</a></span><br>
            <span class="negrita"><em>Usuario:</em></span><?php echo $_SESSION['user'] ?>
          </span>
        </div>
       <div class="col-md-10 menu navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Usuarios </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarUsuario">Agregar Usuarios</a>
                <a class="dropdown-item" href="index2.php?pag=consultarUsuario">Consultar Usuarios</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarUsuario">Editar Usuarios</a>
                <a class="dropdown-item" href="index2.php?pag=listarUsuarios">Listar Usuarios</a>
              </div>
            </li>
            <!-- Repite este bloque para Pacientes, Citas, Consultorio, Tratamientos, Médicos -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pacientes </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarPaciente">Agregar Pacientes</a>
                <a class="dropdown-item" href="index2.php?pag=ConsultarPaciente">Consultar Pacientes</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarPaciente">Editar Pacientes</a>
                <a class="dropdown-item" href="index2.php?pag=listarPacientes">Listar Pacientes</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Citas </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarCita">Agregar Cita</a>
                <a class="dropdown-item" href="index2.php?pag=consultarCita">Consultar Cita</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarCita">Editar Cita</a>
                <a class="dropdown-item" href="index2.php?pag=listarCitas">Listar Cita</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Consultorio </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarConsultorio">Agregar Consultorio</a>
                <a class="dropdown-item" href="index2.php?pag=buscarConsultorio">Buscar Consultorio</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarConsultorio">Editar Consultorio</a>
                <a class="dropdown-item" href="index2.php?pag=listarConsultorios">Listar Consultorios</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tratamientos </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarTratamiento">Agregar Tratamiento</a>
                <a class="dropdown-item" href="index2.php?pag=consultarTratamiento">Consultar Tratamiento</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarTratamiento">Editar Tratamiento</a>
                <a class="dropdown-item" href="index2.php?pag=listarTratamiento">Listar Tratamiento</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Médicos </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarMedico">Agregar Médicos</a>
                <a class="dropdown-item" href="index2.php?pag=ConsultarMedico">Consultar Médicos</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarMedico">Editar Médicos</a>
                <a class="dropdown-item" href="index2.php?pag=listarMedicos">Listar Médicos</a>
              </div>
            </li>
            <li class="nav-item navbar-nav navbar-right">
              <a class="nav-link text-light" href="salir.php">
                <span class="glyphicon glyphicon-log-in text-light"></span> Cerrar Sesión
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
