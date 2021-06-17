<!DOCTYPE html>
<html>
<head>
	<title>crear formulario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
	include("conexion.php");
	$sql="id,select nombre,descripcion,precio from producto";
	$query=mysqli_query ($con, $sql);
?>
<div style="height: 50px;"></div>
	<form action="create_producto.php" method="GET" enctype="multipart/form-data">
		<input type="hidden" name="id" value="0">
		<label for="nombre">Producto: </label>
		<input type="text" name="nombre" required> <br><br>

		<label for="descripcion">Descripción: </label>
		<textarea name="descripcion" required></textarea><br> <br><br><br>
		<label for="precio">Precio: </label>
		<input type="number" name="precio" step="any" min="0" required> <br>
        <br>
		
		<input type="submit" value="Crear Producto" class="boton">

	</form>
	
</body>
</html>