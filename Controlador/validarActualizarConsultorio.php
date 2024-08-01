<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/consultorio.php";


$objConsultorio=New Consultorio();
$objConsultorio->CrearConsultorio($_POST['conNombre']);
$resultado=$objConsultorio->actualizarConsultorio();

if($resultado)
	header("location:../Vista/index2.php?pag=actualizarConsultorio&msj=1"); //error
else
	header("location:../Vista/index2.php?pag=actualizarConsultorio&msj=2");