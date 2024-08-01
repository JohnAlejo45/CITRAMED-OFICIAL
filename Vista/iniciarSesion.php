<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

  <style>
    .modal-header, h4, .close {
        background-color: #201D1D;
        color:white !important;
        text-align: center;
        font-size: 30px;
    }
    .modal-footer {
        background-color: #201D1D;
    }
    .fondo-login{
      background-color:#201D1D;

    }
    .colorh2 { color: #E8E0DE ; }
    .colorh3 { color: #FCEEEA ; }
  </style>
  
  <body class="fondo-login">
  <div class="container py-5">
  <div class="text-center"><br><br><br><br><br><br><br><br><br>
    <h2 class="colorh2" >¡Bienvenido! a CITRAMED </h2><br><br>    
    
     <!-- Trigger the modal with a button -->
     <button type="button" class="btn btn-dark btn-lg" id="myBtn">Ingresar</button>
     <a href="./index.html" class="btn btn-danger btn-lg" >Salir al Sitio Web</a>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Sistema de Ingreso</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
          <form id="form1" name="form1" method="post" action="Controlador/validarInicioSesion.php" role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input name="login" type="text" id="login" class="form-control"  placeholder="Ingrese Usuario" required="">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input name="pass" type="password" id="pass" type="text" class="form-control"  placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-dark btn-block"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
          </form>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
      $("#myBtn").click(function(){
          $("#myModal").modal();
      });
  });
</script>

</body>
</html>

<?php

  if ($x==1)
    echo '<br><br><div class="alert alert-success text-center">Bienvenido</div>';
  if ($x==2)
    echo '<br><br><div class="alert alert-danger text-center">Error de usuario y/o contraseña ó el usuario no está registrado en la base de datos nueva</div>';
  if ($x==3)
    echo '<br><br><div class="alert alert-info text-center">El usuario cerró sesión correctamente</div>';
?>
