<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos2.css">
</head>
<body>
<?php
include("conexion.php");
$sql="select id,nombre,descripcion,precio from producto";
$query=mysqli_query ($con, $sql);
?>
<div style="height: 50px;"></div>
<table border="1">
	<tr>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Descripción</th>
		<th>Precio</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		<td><?php echo $fila['id'] ?></td>
		<td><?php echo $fila['nombre'] ?></td>
		<td><?php echo $fila['descripcion'] ?></td>
		<td><?php echo $fila['precio'] ?></td>
        
	</tr>
     <?php
 }
 ?>
</table>

<?php 
mysqli_close ($con);
?>

</body>
</html>
