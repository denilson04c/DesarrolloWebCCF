<?php 

	include ("conexion.php");
	$id=$_GET['id'];
	$sql="delete from fotoshabitacion where id=".$id;
	$query=mysqli_query ($con, $sql);
     
   ?>

   Se elimino el producto
<meta http-equiv="refresh" content="5;URL=read_fotos.php">