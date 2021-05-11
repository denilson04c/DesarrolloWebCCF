<!DOCTYPE html>
<html>
<head>
	<title>habitacion</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
include("conexion.php");
//$sql="select id,descripcion,nrocamas from tipohabitaciones";
$sqlh="select habitacion.id, nro, tipohabitaciones.idth idtipohabitacion, banoprivado,espacio, precio from habitacion 
left join tipohabitaciones on habitacion.idtipohabitacion=tipohabitaciones.id
";
//$sql3="select id,idhabitacion,fotografia from fotoshabitacion";
//$sql4="select id,codigoreserva,fechaingreso, fechasalida, id habitacion, precio, pagada, nombre, apellidos, correoelectronico from reservas";
if (isset($_GET['ordenh']))
{
    $ordenh=$_GET['ordenh'];
	$sqlh=$sqlh.' ORDER BY '.$ordenh;

}
else
 $ordenh="";

$queryh=mysqli_query ($con, $sqlh);
?>

<table border="1">
	<tr>
		
		<th><a href="read_Habitacion.php?ordenh=nro">Nro</a></th>
		<th><a href="read_Habitacion.php?ordenh=idtipohabitacion">Id tipo habitacion</a></th>
		<th><a href="read_Habitacion.php?ordenh=banoprivado">banoprivado</a></th>
		<th><a href="read_Habitacion.php?ordenh=espacio">espacio</a></th>
		<th><a href="read_Habitacion.php?ordenh=precio">precio</a></th>
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($queryh))
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