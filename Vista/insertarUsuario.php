<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/styles.css">
   <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
   <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   <title>MeDSyS</title>

</head>
<body>
  <div class="container">
    <h3 class="text-center pt-5"> Favor Agregar la siguiente información</h3>
  <hr />
    <div class="form-horizontal">
      <form id="form1" name="form1" action="../Controlador/validarInsertarUsuario.php" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label" >Usuario</label>
           <input name="usuario" type="text" id="usuario" placeholder="Digite el nombre del usuario" class="form-control col-sm-5" required>
        </div>
         <div class="form-group">
          <label class="col-sm-4 control-label" >Password</label>
           <input name="password" type="password" id="password" placeholder="Digite la contraseña" class="form-control col-sm-5" required>
        </div>
       
        <div class="form-group">    
              <label class="col-sm-4 control-label" > Estado   </label>             
              <select class="col-sm-5 form-control input-lg " name="estado">    
                  <option class="col-sm-4 control-label text-left">Seleccione el estado</option>
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
              </select>              
        </div>  
       
        <div class="form-group">    
              <label class="col-sm-4 control-label" > Rol del sistema  </label>             
              <select class="col-sm-5 form-control input-lg " name="rol">    
                  <option class="col-sm-4 control-label text-left">Rol del Sistema</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Medico">Medico</option>
                  <option value="Paciente">Paciente</option>
                  <option value="Auxiliar">Auxiliar</option>
              </select>              
        </div>      
        <div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-dark btn-block"> Guardar</button>        
            </div>    
          </div>   
        </div>   
      </form>
      <hr />
    </div>
  </div>

</body>
  
  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>

<?php
if($msj==1){
  ?>
    <script type="text/javascript">
    alert("El registro se ha guardado correctamente!");
    window.location.href='index2.php';
    </script>
    <?php
  };
if($msj==2){
  ?>
  <script type="text/javascript">
  alert("El registro no pudo ser guardado, favor validar!");
  window.location.href='index2.php';
  </script>
  <?php
}
?>