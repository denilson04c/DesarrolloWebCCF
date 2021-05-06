<!DOCTYPE html>
<html>
<head>
	<title>base de datos hotel</title>
</head>
<body>
<?php
include("conexion.php");
$sql="select tipohabitaciones.id,descripcion,nrocamas from tipohabitaciones";
//$sql2="select id,nro, idtipohabitacion, banoprivado,espacio precio from habitacion";
//$sql3="select id,idhabitacion,fotografia from fotoshabitacion";
//$sql4="select id,codigoreserva,fechaingreso, fechasalida, id habitacion, precio, pagada, nombre, apellidos, correoelectronico from reservas";
if (isset($_GET['orden']))
{
    $orden=$_GET['orden'];
	$sql=$sql.' ORDER BY '.$orden;

}
else
 $orden="";

$query=mysqli_query ($con, $sql);
?>

<table border="1">
	<tr>
		
		<th><a href="read.php?orden=descripcion">Descripciones</a></th>
		<th><a href="read.php?orden=nrocamas">Nro camas</a></th>
		
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		
		<td><?php echo $fila['descripcion'] ?></td>
		<td><?php echo $fila['nrocamas'] ?></td>
		
        <td>
        <a href="form_crea_tiphab.php">Editar</a>	
        <a href="delete_TipoHabitacion.php">Eliminar</a>

        
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