<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Bienvenido al sitio web</h1>
<?php 
if (isset($_COOKIE['contador']))
{
    $valor=$_COOKIE['contador']+1;
	echo "Gracias por ser un visitante frecuente usted visito este sitio $valor veces";
	setcookie("contador",$valor,time()+5); 
	}
else
{
	echo "Bienvenido";
	setcookie("contador",1,time()+5); 
}

?>
</body>
</html>