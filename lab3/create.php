<?php session_start();

$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];
$cu=$_GET['cu'];
$sexo=$_GET['sexo'];
$codigocarrera=$_GET['codigocarrera'];
$carrera=$_GET['carrera'];

$apellidos=uniqid().".".$extension;



include("conexion.php");



$sql="insert into alumnos(nombres,apellidos,cu,sexo,codigocarrera) values ('$nombres','$apellidos',$cu,'$sexo',$codigocarrera)";
$sql2="insert into carreras(carrera values($carrera))";

$query=mysqli_query ($con, $sql);
$query2=mysqli_query ($con, $sql2);
mysqli_close ($con);


?>

<meta http-equiv="refresh" content="3;URL=lista_alumnos.php">