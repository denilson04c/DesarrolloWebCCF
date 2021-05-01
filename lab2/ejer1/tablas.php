<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php

    $filas=$_POST["filas"];
    $columnas=$_POST["columnas"];
    
    for ($i=0; $i <= $filas; $i++) { 
        echo "<tr>";
    	for ($j=0; $j <=$columnas ; $j++) { 
        	if ($i==0 || $j==0){
                    echo "<td style='backgroud-color:blue; color:white; background: #3b59ef;'>" ;

            }else{
                echo "<td>";
            }	
        	echo $i+$j;
            echo "</td>";
            
        }
        echo "</tr>";
    }
    ?>	
 
	</table>

</body>
</body>
</html>