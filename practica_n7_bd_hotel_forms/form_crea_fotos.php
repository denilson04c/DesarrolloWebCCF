<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Producto</title>
</head>
<body>
	<?php
	include("conexion.php");

	$sql="select id,idhabitacion from fotoshabitacion";

	$query=mysqli_query ($con, $sql);


	?>
	<form action="create_fotos.php" method="POST" enctype="multipart/form-data" >
		<label for="numero">Numero</label>
		<input type="text" name="numero" required> <br>

		<label for="fotografia">Fotografia</label>
		<input type="file" name="fotografia" required> <br>

       
        <br>
		<input type="submit" value="Crear">
		<input type="reset" value="borrar">
	</form>
	
</body>
</html>