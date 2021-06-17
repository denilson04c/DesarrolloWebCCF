<?php 
include("conexion.php");

$nombre=$_GET['nombre'];
$descripcion=$_GET['descripcion'];
$precio=$_GET['precio'];

$sql="INSERT INTO producto(nombre,descripcion,precio) VALUES('$nombre', '$descripcion', '$precio')";
$query=mysqli_query ($con, $sql);

mysqli_close ($con);
if ($query) {
	echo "se creo correctamente";
}else{
	echo "no se creo el producto";
}
?>
<meta http-equiv="refresh" content="3;URL=pagina.html">