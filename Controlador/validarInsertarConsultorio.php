<?php
session_start();
extract($_POST);
require"../Modelo/ConexionBaseDatos.php";
require"../Modelo/consultorio.php";

$objConsultorio=New Consultorio();
$objConsultorio->crearConsultorio($_POST['conNombre']);
$resultado=$objConsultorio->agregarConsultorio();

if($resultado)
	header("location:../Vista/index2.php?pag=insertarConsultorio&msj=1"); //Exitoso
else
	header("location:../Vista/index2.php?pag=insertarConsultorio&msj=2"); //Fallido