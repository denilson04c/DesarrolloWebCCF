<?php 
include("conexion.php");
$sql="select id,nombre,correo, nivel from usuarios";
$query=mysqli_query ($con, $sql);
?>
<div style="float: left; background: blueviolet; width: 70%;" overflow: scroll;>
<table border="1">
	<tr style="color: white;background-color: blue">
		<th width="10%">Correos</th>
		<th width="40%">Nombre Completo</th>
		<th width="10%">Nivel</th>
		<?php if ('nivel'=='0') {
			// code...?>
		
		<th width="20%">Operaciones</th>
		<?php 
		}else{}
		?>
	</tr>
<?php while ($fila = mysqli_fetch_array($query))
	 {
?>
	<tr>
		<td><?php echo $fila['correo'] ?></td>
		<td><?php echo $fila['nombre'] ?></td>
		<td><?php  if ($fila['nivel']=='0'){echo ("Administardor");}else{echo ("Usuario");} ?></td>
		<?php if ($fila['nivel']=='0') 
			{
		?>
        <td>
        	<button><?php if ($fila['nivel']=='0') {
        		echo ("Cambiar a usuario");
        	}else{ echo ("Cambiar a Administardor");} ?>
        </button>    	
        </td>
        <?php
}else{
	?>

<?php	
}

        ?>
	</tr>
    <?php
}
?>
</table>
</div>
<?php 
mysqli_close ($con);
?>