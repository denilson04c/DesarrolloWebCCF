<?php session_start();
//include ("verificar.php");
//include ("verificarnivel.php");
$nro=$_POST['nro'];
$idtipohabitacion=$_POST['idtipohabitacion'];
$banoprivado=$_POST['banoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];
$id=$_POST['id'];
/*if (isset($_FILES['fotografia']))
{$separado=explode(".",$_FILES['fotografia']['name']);
$extension=$separado[1];
$fotografia=uniqid().".".$extension;
copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);
}
else
$fotografia=$_POST['foto'];*/

include("conexion.php");


$sql2="update habitacion set nro='$nro',idtipohabitacion='$idtipohabitacion',banoprivado='$banoprivado',espacio='$espacio',precio='$precio' where id=$id";

$query=mysqli_query ($con, $sql2);

mysqli_close ($con);


?>
Se actualizó con éxito
<meta http-equiv="refresh" content="5;URL=read.php">