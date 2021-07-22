<?php
include ("conexion.php");
$sql3="SELECT id,destino,asunto,mensaje,fecha FROM salidas";

$query3=mysqli_query ($con, $sql3); 
?>
<table border="1">
	<tr style="color: white; background: blue;">
		<th width="10%">id</th>
	<th width="20%"> destino</th>
	<th width="20%"> asunto</th>
	<th width="20%"> mensaje</th>
	<th width="20%"> fecha</th>
	</tr>
	<tbody>
		
		<?php while ($fila = mysqli_fetch_array($query3))
			{?>
				<tr>
					<td><?php echo $fila['id'];?> </td>
					<td><?php echo $fila['destino'];?> </td>
					<td><?php echo $fila['asunto'];?> </td>
					<td><?php echo $fila['mensaje'];?> </td>
					<td><?php echo $fila['fecha'];?> </td>
					
				</tr>
			<?php 
			} ?>	
	</tbody>
	</table >
	<?php
mysqli_close ($con);

?>