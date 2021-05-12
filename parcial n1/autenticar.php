<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
</head>
<body>
<?php session_start();
$nombres=$_POST['nombres'];
//$correoelectronico=$_POST['correoelectronico'];
$password=sha1($_POST['password']);
include ("conexion.php");
$sql="select nombres,nivel from usuarios 
where and nombres='$nombres' and password='$password'";
$query=mysqli_query ($con, $sql);
$fila=mysqli_fetch_array($query);

if ($fila!=null)
{
$_SESSION['nivel']=$fila['nivel'];
$_SESSION['nombres']=$fila['nombres'];
//$_SESSION['correo']=$fila['correo'];
header('Location: indeex.php');
}
else
{
?>
<p class="titulo">Datos de Autenticaión Equivocados</p>
<meta http-equiv="refresh" content="3;URL=login.html">
<?php

}

?>
<?php 
if (isset($_COOKIE['contador']))
{
    $valor=$_COOKIE['contador']+1;
	echo "pudo logerase $valor veces";
	setcookie("contador",$valor,time()+3600); /* expira en 1 hora */
	}
else
{
	echo "no pudo logearse";
	setcookie("contador",1,time()+3600); /* expira en 1 hora */
}

?>
</body>
</html>