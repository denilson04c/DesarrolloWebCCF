<?php session_start();
//include ("verificar.php");
//include ("verificarnivel.php");
$descripcion=$_POST['descripcion'];
$nrocamas=$_POST['nrocamas'];
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


$sql="update tipohabitaciones set descripcion='$descripcion',nrocamas='$nrocamas' where id=$id";

$query=mysqli_query ($con, $sql);

mysqli_close ($con);


?>
Se actualizó con éxito
<meta http-equiv="refresh" content="5;URL=read.php">