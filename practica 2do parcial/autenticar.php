<?php
$correo=$_POST['correo'];

include("conexion.php");
$sql="select id,nombre,correo,nivel 
from usuarios
 where correo='$correo'";
$query=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($query);
if ($fila!=null) {
 	$_SESSION['nivel']=$fila['nivel'];
 	$_SESSION['nombre']=$fila['nombre'];
 	$_SESSION['correo']=$fila['correo'];
 	
 	echo("conexion buena");
 	header('Location: listar.php');
}else{
?>
Datos erróneos
<meta http-equiv="refresh" content="3;URL=login.html">
<?php
}
?>
