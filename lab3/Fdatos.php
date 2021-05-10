<!DOCTYPE html>
<html>
<head>
	<title>datos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilostablas.css">
</head>
<body>
	<form action="lista_alumnos.php" method="GET">
<table>	
<?php
include("conexion.php");
$sql="select alumnos.id,nombres ,apellidos,cu,sexo,codigocarrera from alumnos ";
$sql2="select carreras.codigo,carrera from carreras ";

$query=mysqli_query ($con, $sql);
$query2=mysqli_query ($con, $sql2);

$filas=$_GET["n"];

?>
    	<tr>
    	<th><label for="nombres">Nombres</label></th>
    	<th><label for="apellidos">Apellidos</label></th>
    	<th><label for="cu">CU</label></th>
    	<th><label>Sexo</label></th>
    	<th><label>Carrera</label></th>
    	</tr>
       	
<?php
    	for ($j=0; $j <$filas ; $j++) { 
?>
        	<tr>
            <td><input type="text" name="nombres"></td>
            <td><input type="text" name="apellidos"></td>
            <td><input type="number" name="cu"></td>
            <td>
            	
            	<label class="radio-inline" for="F">F
				<input type="radio" name="lista" value="F" id="mujer" onchange="">
            	</label>
            	
            	<label class="radio-inline" for="M">M
            	<input type="radio" name="lista" value="M" id="hombre" onchange="">	
            	</label>
            	
            	
            </td>
            <?php /*while ($carrera=mysql_fetch_array($query2))
            { */?>
            <td><select>
            	<option>Ingeniería de Sistemas</option>
            	<option>Ingeniería en Telecomunicaciones</option>
            	<option>Ingeniería en TI</option>
            	<option>Ingeniería en Seguridad Informatica</option>
            	<option>Ingeniería en Computación</option>
            	<?php
           // } ?>
            </select>
        	</tr>
            
<?php  
        }
?>	
 
	</table>
	<input type="submit" name="" value="enviar">
	<input type="reset" name="" value="limpiar">
</form>
</body>
</html>