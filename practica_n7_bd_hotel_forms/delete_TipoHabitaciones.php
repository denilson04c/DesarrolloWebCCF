<?php session_start();
//include ("verificar.php");
//include ("verificarnivel.php");
	 include ("conexion.php");
	 $id=$_GET['id'];
	 $sql2="delete from tipohabitaciones where id=".$id;
	 $query2=mysqli_query ($con, $sql2);
     
   ?>

   Se elimino el producto
<meta http-equiv="refresh" content="5;URL=read_TipoHabitaciones.php">