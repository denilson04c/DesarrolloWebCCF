<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
session_start();
include ("conexion.php");
?>
<?php
$nombrecompleto=$_POST['nombre'];
$password=sha1($_POST['password']);

$sql="select id,nombrecompleto,password,email,cu,nivel 
from usuarios
 where nombrecompleto='$nombrecompleto' and password='$password'";
$query=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($query);
if ($fila!=null) {

 	$_SESSION['nivel']=$fila['nivel'];
 	$_SESSION['nombrecompleto']=$fila['nombrecompleto'];
 	$_SESSION['email']=$fila['email'];
 	
 	echo("Autenticado correctamente");
 	//header('Location: menu.php');
}else{
?>
No autenticado
<meta http-equiv="refresh" content="3;URL=login.html">
<?php
}
?>
</body>
</html>