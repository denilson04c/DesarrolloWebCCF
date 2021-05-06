<!DOCTYPE html>
<html>
<head>
	<title>crear habitacion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
	//session_start();
	//include ("verificar.php");
	//include ("verificarnivel.php");
	include("conexion.php");

	//$sql="select id,categoria from tipohabitaciones";

	$query=mysqli_query ($con, $sql);
	$sql2="select id,nro, idtipohabitacion, banoprivado,espacio, precio from habitacion";
	

	$query2=mysqli_query ($con, $sql2);



	?>
	<form action="create_TipoHabitacion.php" method="POST" enctype="multipart/form-data" >
		<label for="nro">Nro</label>
		<input type="text" name="nro" required> <br>

		<label for="idtipohabitacion">id tipo habitacion</label>
		<input type="radio" name="idtipohabitacion" required> <br>

		<label for="idtipohabitacion">id tipo habitacion</label>
		<?php while ($idtipohabitacion = mysqli_fetch_array($query))
	    {?>
         <input type="radio" name="idcategoria" value="<?php echo $idtipohabitacion['id'];?>"><?php echo $idtipohabitacion['idtipohabitacion'];?>
        <?php 
        }
        ?> 
		<label for="banoprivado">Baño privado</label>
		<input type="radio" name="banoprivado" required> <br>
        
		<label for="espacio">Espacio</label>
		<input type="number" name="espacio" required> <br>

		<label for="precio">Precio</label>
		<input type="number" name="precio" required> <br>
        <br>
		
		<input type="submit" value="Crear">

	</form>
	
</body>
</html>