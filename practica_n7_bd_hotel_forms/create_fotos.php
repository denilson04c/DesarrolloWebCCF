<?php 

$idhabitacion=$_POST['numero'];
$separado=explode(".",$_FILES['fotografia']['name']);
$extension=$separado[1];
$fotografia=uniqid().".".$extension;


include("conexion.php");



$sql="insert into fotoshabitacion(idhabitacion,fotografia) values ('$idhabitacion,$fotografia')";
$query=mysqli_query ($con, $sql);

mysqli_close ($con);

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

?>

<meta http-equiv="refresh" content="3;URL=read_fotos.php">