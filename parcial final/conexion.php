<?php 

$con=new mysqli("localhost","root","","bd_correos");
if ($con->connect_error) {
	die ("conexion fallida".$con->connect_error);
}