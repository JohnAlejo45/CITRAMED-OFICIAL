<?php
session_start();
extract($_POST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/tratamiento.php";

$objTratamiento = new Tratamiento();
$resultado = $objTratamiento->consultarTratamiento($_POST['nombre']);

if ($resultado && $resultado->num_rows > 0) {
  // Redirigir a la vista con los datos del tratamiento
  header("location:../Vista/consultarTratamiento.php?nombre={$_POST['nombre']}&msj=1");
} else {
  // Redirigir a la vista con un mensaje de error
  header("location:../Vista/consultarTratamiento.php?msj=2");
}
