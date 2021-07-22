<?php
//session_start();

//include ("verificar.php");

?>

<?php
include("conexion.php");
$sql2="SELECT id,origen,asunto,mensaje,fecha 
FROM entradas";
$query2=mysqli_query ($con, $sql2);
?>

	<div style=" width: 100%;">
    <table border="1">
        <tr style="color: white; background: blue;">
            <th width="5%">id</th>
            <th width="20%">origen</th>
            <th width="20%">asunto</th>
            <th width="20%">mensaje</th>
            <th width="5%">fecha</th>
            
            <th width="20%">Operaciones</th>
        </tr>
	
<?php while ($fila = mysqli_fetch_array($query2))
	 {
?>
	<tr>
		<td><?php echo $fila['id'] ?></td>
		<td><?php echo $fila['origen'] ?></td>
		
		<td><?php echo $fila['asunto'] ?></td>
		<td><?php echo $fila['mensaje'] ?></td>
		<td><?php echo $fila['fecha'] ?></td>
		
        <td>
        	<a href="editar.php">Editar</a>
        	<a href="delete.php">Eliminar</a>     	
        </td>
	</tr>
    <?php
}
?>
</table>
</div>
<?php 
mysqli_close ($con);
?>