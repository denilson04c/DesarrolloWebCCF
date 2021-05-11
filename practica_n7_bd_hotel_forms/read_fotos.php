<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
include("conexion.php");
$sql="select fotoshabitacion.id,fhabitacion,fotografia from fotoshabitacion 
left join habitacion on fhabitacion.idhabitacion=habitacion.id";

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
		<th>Imagen</th>
		<th><a href="read_fotos.php?orden=fhabitacion">Habitación</a></th>
		
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		
		
		<td><img width="100px" src="images/<?php echo $fila['fotografia'];  ?>" alt=""></td>
		<td><?php echo $fila['fhabitacion'] ?></td>
        <td>	
        	<a href="form_edit_fotos.php">Editar</a>
        	<a href="delete_fotos.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
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
