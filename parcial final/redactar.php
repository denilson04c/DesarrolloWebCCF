<?php 
include("conexion.php");
$destino=$_GET['destino'];
$asunto=$_GET['asunto'];
$mensaje=$_GET['mensaje'];
$fecha=$_GET['fecha'];
$sql4="INSERT INTO salidas(destino,asunto,mensaje,fecha) VALUES('$destino','$asunto','$mensaje','$fecha')";

$query4=mysqli_query ($con, $sql4);

mysqli_close ($con);
if ($query4) {
	echo "se creo correctamente";
}else{
	echo "no se creo el producto";
}
?>
<meta http-equiv="refresh" content="3;URL=index.php">

