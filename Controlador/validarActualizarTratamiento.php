<?php
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/tratamiento.php";

extract($_POST);

if (isset($_POST['nombre'])) {
    $objTratamiento = new Tratamiento();
    $objTratamiento->crearTratamiento($_POST['nombre'], $_POST['duracion'], $_POST['costo']);
    $resultado = $objTratamiento->actualizarTratamiento();

    if ($resultado) {
        header("Location: ../Vista/index2.php?pag=actualizarTratamiento&msj=1");
    } else {
        header("Location: ../Vista/index2.php?pag=actualizarTratamiento&msj=2");
    }
}
?>
