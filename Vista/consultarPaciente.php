<!DOCTYPE html>
<html lang="en">
 <head>
  <title>MeDSyS</title>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
   <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h3 class="text-center pt-5">Digite el Documento de Identidad del Paciente a Consultar...</h3>
      <hr />
  <div class="form-horizontal">
    <form id="form1" name="form1" action="" method="POST">
      <div class="form-group">
         <label class="col-sm-4 control-label">Identificacion</label>
          <input name="identificacion" type="text" id="identificacion" class="form-control  col-sm-5" required>
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
</body>

  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>
<?php
extract ($_POST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/paciente.php";

if (isset($_POST['identificacion'])) {
$objPaciente= new Paciente();
$resultado=$objPaciente->ConsultarPaciente($_POST['identificacion']);
if (isset($resultado))  
{ if($resultado->num_rows >0 ){?>
    
  <h1 align="center">DATOS DEL PACIENTE</h1>
 <table class="table table-hover text-center mt-3">
  <thead>
        <th class="text-center">Identficacion.</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellidos</th>
        <th class="text-center">Fecha Nacimiento</th>
        <th class="text-center">Sexo </th>
        
      </thead>
 <?php
while($registro=$resultado->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->pacIdentificacion?></td>
    <td><?php echo $registro->pacNombres?></td>
    <td><?php echo $registro->pacApellidos?></td>
    <td><?php echo $registro->pacFechaNacimiento?></td>
    <td><?php echo $registro->pacSexo?></td>
    
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>
<?php 
}else{  echo '<div class="alert alert-danger text-center">El paciente No existe en la base de datos</div>';}
}
}
?>
