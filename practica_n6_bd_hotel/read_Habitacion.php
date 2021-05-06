<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("conexion.php");
//$sql="select id,descripcion,nrocamas from tipohabitaciones";
$sql="select habitacion.id,nro, idth, banoprivado,espacio, precio from habitacion 
left join tipohabitaciones on tipohabitacion.idth=tipohabitaciones.id
";
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
		
		<th><a href="read.php?orden=nro">Nro</a></th>
		<th><a href="read.php?orden=idth">Id tipo habitacion</a></th>
		<th><a href="read.php?orden=banoprivado">banoprivado</a></th>
		<th><a href="read.php?orden=espacio">espacio</a></th>
		<th><a href="read.php?orden=precio">precio</a></th>
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		
		<td><?php echo $fila['nro'] ?></td>
		<td><?php echo $fila['idtipohabitacion'] ?></td>
		<td><?php echo $fila['banoprivado']==1?'si':'no'; ?></td>
		<td><?php echo $fila['espacio'] ?></td>
		<td><?php echo $fila['precio'] ?></td>
        <td>
        <a href="form_crea_hab.php?id=<?php echo $fila['id'] ?>">Editar</a>	
        <a href="delete_Habitacion.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
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