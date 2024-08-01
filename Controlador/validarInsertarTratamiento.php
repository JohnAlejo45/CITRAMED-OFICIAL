<?php
session_start();
extract($_POST);
require "../Modelo/ConexionBaseDatos.php";
require "../Modelo/tratamiento.php";

// Crear un objeto de la clase Tratamiento
$objTratamiento = new Tratamiento();
$objTratamiento->crearTratamiento($_POST['nombre'], $_POST['duracion'], $_POST['costo']);

// Intentar agregar el tratamiento a la base de datos
$resultado = $objTratamiento->agregarTratamiento();

// Verificar el resultado de la inserción
if ($resultado) {
    header("location:../Vista/index2.php?pag=insertarTratamiento&msj=1");
} else {
    // Mensaje de depuración
    error_log("Error al insertar el tratamiento: " . $objTratamiento->getConexion()->error);
    header("location:../Vista/index2.php?pag=insertarTratamiento&msj=2");
}
?>
