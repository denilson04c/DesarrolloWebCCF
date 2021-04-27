<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<p>b es multiplo de a si b=a*c</p>

<?php

$n=$_POST['n'];
$m=$_POST['m'];
	echo "¿".$n." es multiplo de ".$m."?"."<br>";
if ($n%$m==0){
	echo '<img src="images/es_multiplo.png" width="250px">';
}else{
	echo '<img src="images/no_es_multiplo.png" width="250px">';
}


	
?>
</body>
</html>