<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <title>MedSys</title>
</head>
<body>
   <div class="container">
      <h3 class="text-center pt-5">Favor Agregar la siguiente información</h3>
      <hr />
      <div class="form-horizontal">
         <form id="form1" name="form1" action="../Controlador/validarInsertarCita.php" method="POST">
            <div class="form-group">
               <label class="col-sm-4 control-label">Fecha</label>
               <input name="fecha" type="date" id="fecha" class="form-control col-sm-5" required>
            </div>
            <div class="form-group">
               <label class="col-sm-4 control-label">Hora</label>
               <input name="hora" type="time" id="hora" class="form-control col-sm-5" required>
            </div>
            <div class="form-group">
               <label class="col-sm-4 control-label">Paciente (ID)</label>
               <input name="idPaciente" type="number" id="idPaciente" class="form-control col-sm-5" required>
            </div>
            <div class="form-group">
               <label class="col-sm-4 control-label">Médico (ID)</label>
               <input name="idMedico" type="number" id="idMedico" class="form-control col-sm-5" required>
            </div>
            <div class="form-group">
               <label class="col-sm-4 control-label">Consultorio (ID)</label>
               <input name="idConsultorio" type="number" id="idConsultorio" class="form-control col-sm-5" required>
            </div>
            <div class="form-group">    
              <label class="col-sm-4 control-label" >Estado</label>             
              <select class="col-sm-5 form-control input-lg " name="estado ">    
                  <option class="col-sm-4 control-label text-left">Estado</option>
                  <option value="Asignado">Asignado</option>
                  <option value="Atendido">Atendido</option>
              </select>              
        </div> 
            <div class="form-group">
               <label class="col-sm-4 control-label">Observaciones</label>
               <textarea name="observaciones" id="observaciones" class="form-control col-sm-5" required></textarea>
            </div>
            <div class="form-group">
               <label class="col-sm-4 control-label"></label>
               <div class="col-sm-5">
                  <button type="submit" class="btn btn-warning btn-block">Guardar</button>
               </div>
            </div>
         </form>
         <hr />
      </div>
   </div>

   <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>

   <?php
   if (isset($_GET['msj'])) {
      if ($_GET['msj'] == 1) {
         echo "<script type='text/javascript'>
               alert('El registro se ha guardado correctamente!');
               window.location.href='index2.php';
               </script>";
      } else if ($_GET['msj'] == 2) {
         echo "<script type='text/javascript'>
               alert('El registro no pudo ser guardado, favor validar!');
               window.location.href='index2.php';
               </script>";
      }
   }
   ?>
</body>
</html>
