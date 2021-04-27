<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('libreria.php');
$p=new Estante(2);

$p->insertar("algebra");
echo "<br>";
$p->insertar("literatura");
echo "<br>";
$p->insertar("fisica");

echo $p->mostrar();
echo $p->eliminar();
?>
</body>
</html>