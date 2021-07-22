<?php 
session_start();
if (isset($_COOKIE['contador']))
{
    $valor=$_COOKIE['contador']+1;
	echo "es la visita $valor";
	setcookie("contador",$valor,time()+5); 
	}
else
{
	echo "es su primera visita";
	setcookie("contador",1,time()+5); 
}
echo ("<br>");
echo "Nombre:".$_SESSION['nombrecompleto'];
?>
