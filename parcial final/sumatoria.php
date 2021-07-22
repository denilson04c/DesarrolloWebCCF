	<?php
	$datos=$_POST["datos"];
	$sum=0;
	for ($i=1;$i<=$datos;$i++){
		$sum+=$i;
		echo ($i."+"."$i"."=".$sum);
	}
	echo ($sum);
	?>