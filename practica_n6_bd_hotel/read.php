<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
include("conexion.php");
$sql="select id,procedencia,codigopais from procedencias";

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
		
		<th><a href="read.php?orden=procedencia">Procedencias</a></th>
		<th><a href="read.php?orden=codigopais">Código País</a></th>
		
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		
		<td><?php echo $fila['procedencia'] ?></td>
		<td><?php echo $fila['codigopais'] ?></td>
		
        
        <td>
        <a href="form_read.php">Editar</a>	
        <a href="delete_read.php">Eliminar</a>
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
