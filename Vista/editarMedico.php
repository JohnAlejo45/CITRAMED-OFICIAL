<?php

extract ($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/medico.php";

if (isset($_REQUEST['idMedico'])) {
  
$objMedico= new Medico();
$resultado=$objMedico->ConsultarIdMedico($_REQUEST['idMedico']);
//Asignar a una variable el resultado de la consulta

if (isset($resultado))  //quiere decir que los datos estan bien
     { if($resultado->num_rows >0 ){
    
     $registro=$resultado->fetch_object()?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body >
  <div class="container">
    <h3 class="text-center">Favor Verifique la Siguiente Información del medico a Actualizar</h3>
      <hr />
 
  <div class="form-horizontal">
    <form id="form1" name="form1" action="../Controlador/validarActualizarMedico.php" method="POST">
      
      <div class="form-group">
         <label class="col-sm-4 control-label">Identificacion</label>
            <input class="form-control col-sm-5" name="identificacion" type="text" id="identificacion"  value="<?php echo $registro->medIdentificacion?>" required readonly onmousedown="return false;">
      </div>

      <div class="form-group">
         <label class="col-sm-4 control-label">Nombres</label>
         <input class="form-control col-sm-5" name="nombres" type="text" id="nombres"  value="<?php echo $registro->medNombres?>">
      </div>

      <div class="form-group">
         <label class="col-sm-4 control-label">Apellidos</label>
          <input class="form-control col-sm-5"  name="apellidos" type="text" id="apellidos"  value="<?php echo $registro->medApellidos?>">
      </div>

      <div class="form-group">
         <label class="col-sm-4 control-label">Especialidad</label>
          <input class="form-control col-sm-5"  name="especialidad" type="text" id="especialidad"  value="<?php echo $registro->medEspecialidad?>">
      </div>

      <div class="form-group">
         <label class="col-sm-4 control-label">Telefono</label>
          <input class="form-control col-sm-5"  name="telefono" type="text" id="telefono"  value="<?php echo $registro->medTelefono?>">
      </div>

      <div class="form-group">
         <label class="col-sm-4 control-label">Correo</label>
          <input class="form-control col-sm-5"  name="correo" type="email" id="correo"  value="<?php echo $registro->medCorreo?>">
      </div>

  

      <div class="form-group row">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            </div>
          </div>
          <input name="idMedico" type="hidden" value="<?php echo $registro->idMedico?>">
    </form>

    <hr />
  </div>
</div>
</body>
</html>
 
    <?php
  }
  }
}
?>