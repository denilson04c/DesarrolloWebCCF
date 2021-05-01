<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<form action=' <?php echo $_SERVER['PHP_SELF']?>' method=get>
	<div id="valora">
	<label for="a">valor a</label>
		<div>
			<input type="number" name="a">
		</div>
	</div>
	<div id="valorb">
	<label for="b">valor b</label>
		<div>
			<input type="number" name="b">
		</div>
	</div>
	<div id="valorc">
	<label for="c">valor c</label>
		<div>
			<input type="number" name="c">
		</div>
	
	</div>
	<div id="boton">
		<input type="submit" name="" value="calcular">
	</div>
	
</form>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
?>
<div >
	<div id="mult"><label>Multiplicación</label></div>
	<div class="multipli">
		<?php  echo $a*$b*$c; ?>
	</div>
</div>

<div >
	<div id="men"><label>Menor</label></div>
	<div class="menor">
		<?php 
		if ($a<$b && $a<$c){
			echo $a." es el menor";
		}
		if ($b<$a && $b<$c){
			echo $b." es el menor";
		}
		if ($c<$a && $c<$b){
			echo $c." es el menor";
		}
		?>
	</div>


</div>
</body>
</html>