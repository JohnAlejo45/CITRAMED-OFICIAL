<?php
require_once '../Modelo/Cita.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $telefono = $_POST['phone'];

  $cita = new Cita();
  $resultado = $cita->crearCita($nombre, $email, $telefono);

  echo $resultado;
}
?>
