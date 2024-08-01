<?php

extract ($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/consultorio.php";

if (isset($_REQUEST['idConsultorio'])) {
  
$objConsultorio= new Consultorio();
$resultado=$objConsultorio->ConsultarIdConsultorio($_REQUEST['idConsultorio']);
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
    <h3 class="text-center">Favor Verifique la Siguiente Información del Consultorio...</h3>
      <hr />
 
  <div class="form-horizontal">
    <form id="form1" name="form1" action="../Controlador/validarActualizarConsultorio.php" method="POST">
      <div class="form-group">
         <label class="col-sm-4 control-label">Nombre de Consultorio</label>
            <input class="form-control col-sm-5" name="conNombre" type="text" id="conNombre"  value="<?php echo $registro->conNombre?>" required readonly onmousedown="return false;">
      </div>
      <div class="form-group row">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            </div>
          </div>
          <input name="idConsultorio" type="hidden" value="<?php echo $registro->idConsultorio?>">
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