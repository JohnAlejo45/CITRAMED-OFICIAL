<?php
require_once "../Modelo/cita.php";

// Extraer el ID de la cita del formulario
$idCita = $_POST['idCita'];

// Crear una instancia de la clase Cita
$objCita = new Cita();

// Consultar la cita en la base de datos
$cita = $objCita->consultarCita($idCita);

if ($cita) {
    // Redirigir con los datos de la cita
    header("Location: ../Vista/consultarCita.php?cita=" . urlencode(serialize($cita)));
} else {
    // Redirigir con mensaje de error
    header("Location: ../Vista/consultarCita.php?msj=2");
}
?>
