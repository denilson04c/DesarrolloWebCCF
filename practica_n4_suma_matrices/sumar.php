<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>La suma es: </p>
<?php

	$n=$_GET['n'];
	$a=$_GET['a'];
	$b=$_GET['b'];
	
	for ($i=0; $i <$n ; $i++) { 
		
		echo $a[$i]+$b[$i]."&nbsp&nbsp&nbsp";
		
	}
	
?>
</body>
</html>