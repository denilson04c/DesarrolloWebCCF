<?php 
//session_start();

$nro=$_POST['nro'];
$idtipohabitacion=$_POST['idtipohabitacion'];
$banoprivado=$_POST['banoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];

//$extension=$separado[1];

include("conexion.php");

$sql2="insert into habitacion( nro, idtipohabitacion, banoprivado, espacio, precio) values ( $nro, $idtipohabitacion, $banoprivado,$espacio, $precio)";
$query=mysqli_query ($con, $sql2);

mysqli_close ($con);

?>
<h1>creacion exitosa</h1>
<meta http-equiv="refresh" content="3;URL=read.php">