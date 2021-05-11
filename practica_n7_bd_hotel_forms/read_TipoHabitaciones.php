<!DOCTYPE html>
<html>
<head>
	<title>tipo habitacion</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
include("conexion.php");
$sql2="select tipohabitaciones.id,descripcion,nrocamas from tipohabitaciones";
//$sql2="select id,nro, idtipohabitacion, banoprivado,espacio precio from habitacion";
//$sql3="select id,idhabitacion,fotografia from fotoshabitacion";
//$sql4="select id,codigoreserva,fechaingreso, fechasalida, id habitacion, precio, pagada, nombre, apellidos, correoelectronico from reservas";
if (isset($_GET['orden2']))
{
    $orden2=$_GET['orden2'];
	$sql2=$sql2.' ORDER BY '.$orden2;

}
else
 $orden2="";

$query2=mysqli_query ($con, $sql2);
?>

<table border="1">
	<tr>
		
		<th><a href="read_TipoHabitaciones.php?orden2=descripcion">Descripciones</a></th>
		<th><a href="read_TipoHabitaciones.php?orden2=nrocamas">Nro camas</a></th>
		
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query2))
	 {
    ?>
	<tr>
		
		<td><?php echo $fila['descripcion'] ?></td>
		<td><?php echo $fila['nrocamas'] ?></td>
		
        <td>
        <a href="form_crea_tiphab.php">Editar</a>	
        <a href="delete_TipoHabitaciones.php">Eliminar</a>

        
        </td>
        

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