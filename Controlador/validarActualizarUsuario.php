
<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/usuario.php";


$objUsuario=New Usuario();
$objUsuario->CrearUsuario($_POST['usuario'],$_POST['password'],$_POST['estado'],$_POST['rol']);
$resultado=$objUsuario->actualizarUsuario();

if($resultado)
	header("location:../Vista/index2.php?pag=actualizarUsuario&msj=1"); //error
else
	header("location:../Vista/index2.php?pag=actualizarUsuario&msj=2");
	