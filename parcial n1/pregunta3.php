<!DOCTYPE html>
<html>
<head>
	<title>preguntas 3</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
include("conexion.php");
$sql="select usuarios.id,nombres ,apellidos,correo from usuarios ";



$query=mysqli_query ($con, $sql);
?>


<table border="1">
	<tr id="tabla1">
		
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Correo</th>
		
	</tr>
	<?php 
	while ($fila = mysqli_fetch_array($query)){
	if ($fila['nombres']=='Juan') {
		echo "<tr style='backgroud-color:red; color:white; background: red;'>" ;
	}else{
           echo "<tr>";
          }	

	 
    ?>

	
		
		<td><?php echo $fila['nombres'] ?></td>
		<td><?php echo $fila['apellidos'] ?></td>
		<td><?php echo $fila['correo'] ?></td>
		
       
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