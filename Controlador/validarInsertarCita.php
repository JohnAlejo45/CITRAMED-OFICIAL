<?php
require_once "../Modelo/cita.php";

// Extraer los datos del formulario
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$paciente = $_POST['idPaciente'];
$medico = $_POST['idMedico'];
$consultorio = $_POST['idConsultorio']; // Asegúrate de que el campo del formulario sea idConsultorio
$estado = $_POST['estado'];
$observaciones = $_POST['observaciones'];

// Crear una instancia de la clase Cita
$objCita = new Cita();

// Insertar los datos en la base de datos
$resultado = $objCita->insertarCita($fecha, $hora, $paciente, $medico, $consultorio, $estado, $observaciones);

if ($resultado) {
    // Redirigir con mensaje de éxito
    header("Location: ../Vista/insertarCita.php?msj=1");
} else {
    // Redirigir con mensaje de error
    header("Location: ../Vista/insertarCita.php?msj=2");
}
?>
