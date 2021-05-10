
<?php
include("conexion.php");
$sql="select alumnos.id,nombres ,apellidos,cu,sexo,codigocarrera from alumnos ";

if (isset($_GET['orden']))
{
    $orden=$_GET['orden'];
    $tipo=$_GET['tipo'];
    if ($tipo=='ASC')
    	$nuevotipo='DESC';
    else
    	$nuevotipo='ASC';
	$sql=$sql.' ORDER BY '.$orden.' '.$tipo;

}
else
 $orden="";

$query=mysqli_query ($con, $sql);
?>


<table border="1">
	<tr>
		
		<th><a href="read.php?orden=nombres">Nombres</a></th>
		<th><a href="read.php?orden=apellidos">Apellidos</a></th>
		<th><a href="read.php?orden=cu">CU</a></th>
		<th><a href="read.php?orden=sexo">Sexo</a></th>
		<th><a href="read.php?orden=codigocarrera">Codigo Carrera</a></th>
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		
		<td><?php echo $fila['nombres'] ?></td>
		<td><?php echo $fila['apellidos'] ?></td>
		<td><?php echo $fila['cu'] ?></td>
		<td><?php echo $fila['sexo'] ?></td>
		<td><?php echo $fila['codigocarrera'] ?> </td> 
        <td>
        	
        	<a href="formedit.php">Editar</a>
        	<a href="delete.php">Eliminar</a>
        	
        </td>
	</tr>
     <?php
 }
 ?>

</table>


<?php 
 


mysqli_close ($con);

?>
