<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos_tablas.css">
</head>
<body>
	

<?php
	$nf=$_GET['nf'];
	$mc=$_GET['mc'];
	
	function c1(){
		echo "<td class='c1'>columna 1</td>";
	}
	function c2(){
		echo "<td class='c2'>columna 2 </td>";
	}
	
	function f1(){
		echo "<td class='f1'> fila 1</td>";
	}
	function f2(){
		echo "<td class='f2'> fila 2 </td>";
	}
	function f3(){
		echo "<td class='f3'> fila 3 </td>";
	}
		
?>
<table id="primera">	
<?php 


for ($i=0; $i<$mc; $i++) { 
	
    echo "<tr>";
	c1();
	echo "</tr>";
	

	echo "<tr>";
	c2();
	echo "</tr>";
    echo '<tr id="clear"></tr>';
}
?>

<?php
for ($i=0; $i < $nf; $i++) { 
	
		echo "<tr>";
		f1();
		echo "</tr>";
		
		echo "<tr>";
		f2();
		echo "</tr>";

		echo "<tr>";
		f3();
		echo "</tr>";
		
}
?>	
</table>
</body>
</html>