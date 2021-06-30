<?php 
$con=new mysqli("localhost","root","","bd_biblioteca");
if ($con->connect_error) {
 die("conexion fail".$con->connect_error);}
?>