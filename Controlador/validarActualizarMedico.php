<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/medico.php";


$objMedico=New Medico();
$objMedico->CrearMedico($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['especialidad'],$_POST['telefono'],$_POST['correo']);
$resultado=$objMedico->actualizarMedico();

if($resultado)
	header("location:../Vista/index2.php?pag=actualizarMedico&msj=1"); //error
else
	header("location:../Vista/index2.php?pag=actualizarMedico&msj=2");