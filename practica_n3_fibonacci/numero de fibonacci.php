<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$nf=$_GET["nf"];
	$fi=array(0,1);
	if ($nf==0){
		echo "numero de fibonacci" ."<br>";
		$fi=0;
		echo $fi;
	}else{
		if ($nf==1) {
		echo "numero de fibonacci" ."<br>";
		$fi=1;
		echo $fi;
	}else{
		echo "numero de fibonacci" ."<br>";
		echo 1;
		echo "<br>";
		if ($nf>=2) {
		for ($i=2; $i <=$nf ; $i++) { 
		# code...
		echo "numero de fibonacci "."<br>";
		echo $fi[]=$fi[$i-1]+$fi[$i-2];
		echo "<br>";
		
	}

	}
	
	}
	
	
	}

	

	
	?>

</body>
</html>