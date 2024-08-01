<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location:../index1.php?x=2");
    //x=2 significa que no han iniciado sesión

if (!isset($_REQUEST['pag']))
    $pag='contenido';

if (!isset($_REQUEST['msj']))
    $msj=0;
?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centro Médico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

    <div id="divEncabezado"><?php include "encabezado.php";?></div>
	<div id="divMenu"> <?php include "menu.php";?> </div>
	<div id="divContenido"> <?php include $pag.".php" ;?> </div>
    <div id="divPiePagina"><?php include "piePagina.php";?> </div>

</body>
</html>
