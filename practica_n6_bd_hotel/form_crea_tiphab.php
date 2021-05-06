<!DOCTYPE html>
<html>
<head>
	<title>crear habitacion</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
	//session_start();
	//include ("verificar.php");
	//include ("verificarnivel.php");
	include("conexion.php");

	$sql="select id,categoria from tipohabitaciones";

	$query=mysqli_query ($con, $sql);
	$sql2="select id,nro, idtipohabitacion, banoprivado,espacio precio from habitacion";
	

	$query2=mysqli_query ($con, $sql2);



	?>
	<form action="create_TipoHabitacion.php" method="POST" enctype="multipart/form-data" >
		<label for="descripcion">Descripcion</label>
		<input type="text" name="descripcion" required> <br>

		<label for="nrocamas">Nro camas</label>
		<input type="number" name="nrocamas" required> <br>
		
        <br>
		
		
        <br>
		
		<input type="submit" value="Crear">

	</form>
	
</body>
</html>