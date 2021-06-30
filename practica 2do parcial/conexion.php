<?php 
$con=new mysqli("localhost","root","","bd_segundop_r");
if ($con->connect_error) {
 die("conexion fail".$con->connect_error);}
?>