<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBaseDatos.php";

$pass = md5($_POST['pass']);
$login = $_POST['login'];
$objConexion=Conectarse();

$sql="select * from usuarios where usuLogin = '$login' and usuPassword = '$pass'";

$resultado=$objConexion->query($sql);

$existe = $resultado->num_rows;

if ($existe==1)  
{
	$usuario=$resultado->fetch_object() or die ("Error");
	$_SESSION['user']= $usuario->usuLogin;
	header("location:../Vista/index2.php?pag=contenido");
}
else
{
	header("location:../Vista/index2.php?pag=iniciarSesion&x=2");  
	//x=2, quiere decir que el usuario no esta registrado
}
?>
