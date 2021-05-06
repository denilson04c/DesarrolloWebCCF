<?php session_start();
//include ("verificar.php");
//include ("verificarnivel.php");
//$id=$_POST['id'];
$descripcion=$_POST['descripcion'];
$nrocamas=$_POST['nrocamas'];

//$separado=explode(".",$_FILES['fotografia']['name']);
$extension=$separado[1];


//$fotografia=uniqid().".".$extension;



include("conexion.php");

$sql="insert into tipohabitaciones(descripcion,nrocamas) values ($id,$descripcion,$nrocamas)";
$query=mysqli_query ($con, $sql);

mysqli_close ($con);

//copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

?>

<meta http-equiv="refresh" content="3;URL=read.php">