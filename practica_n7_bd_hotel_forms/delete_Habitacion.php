<?php session_start();
//include ("verificar.php");
//include ("verificarnivel.php");
	 include ("conexion.php");
	 $id=$_GET['id'];
	 $sqlh="delete from habitacion where id=".$id;
	 $queryh=mysqli_query ($con, $sqlh);
     
   ?>

   Se elimino el producto
<meta http-equiv="refresh" content="5;URL=read_Habitacion.php">