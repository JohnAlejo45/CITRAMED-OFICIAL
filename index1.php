<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>CITRAMED</title>	
</head>
<body>
	 <?php include "Vista/iniciarSesion.php" ?> 
</body>
</html>
