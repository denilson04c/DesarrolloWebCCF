<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$n=$_GET['n'];
?>
<form action='sumar.php' method='GET'>
	<input type="hidden" name="n" value="<?php echo $n; ?>">
<?php
echo "<label for='a[]'></label>";
for ($i=0; $i <$n ; $i++) { 
	
	echo "<input type='number' name='a[$i]'>";

}
echo "<br>";
echo "<br>";
echo "<label for='b[]'></label>";
for ($i=0; $i <$n ; $i++) { 
	
	echo "<input type='number' name='b[$i]'>";
}
echo "<br>";
echo "<br>";
echo "<input type='submit' value='sumar'>";

?>
</form>
</body>
</html>