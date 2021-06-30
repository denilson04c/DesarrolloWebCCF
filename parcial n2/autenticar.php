<?php

$password=$_POST['password'];
include("conexion.php");
$sql="select id,usuario,nombrecompleto,cu,password,idcarrera,nivel 
from usuarios
 where password='$password'";
$query=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($query);
if ($fila!=null) {
    $_SESSION['nivel']=$fila['nivel'];
 	$_SESSION['nombrecompleto']=$fila['nombrecompleto'];
 	
    $_SESSION['password']=$fila['password'];
    echo("autenticado correctamente");
    header('Location: buena.html');
    echo('<meta http-equiv="refresh" content="3;URL=login.html">');
}else{
?>
no autenticado
<meta http-equiv="refresh" content="3;URL=login.html">
<?php
}
?>
