<!DOCTYPE html>
<html>
<head>
	<title>Mostrar calendario</title>
</head>
<body>
<?php
$mes=$_GET['mes'];
$ano=$_GET['ano'];
echo $mes."-".$ano;
?>
<table>
	

<tr>
		
		<th>lunes</th>
		<th>martes</th>
		<th>miércoles</th>
		<th>jueves</th>
		<th>viernes</th>
		<th>sábado</th>
		<th>domingo</th>
		
</tr>
<tr>
<?php
for ($j=1; $j <=31 ; $j++) { 
        	
                    echo "<td style='backgroud-color:blue; color:white; background: #3b59ef;'>" ;

            	
        	echo $j;
            echo "</td>";
            
   }     
?>	
</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>

</table>
</body>
</html>