<div style="margin-left:5%; overflow: scroll; background: white; margin-right: 5%;">
    <?php 
    include("conexion.php");
    $sql2="select id,imagen,titulo,autor,ideditorial,anio 
from libros";
    $query=mysqli_query ($con, $sql2);
    ?>
    <div style=" width: 100%;">
    <table border="1">
        <tr style="color: white; background: blue;">
            <th width="5%">id</th>
            <th width="20%">imagen</th>
            <th width="20%">titulo</th>
            <th width="20%">autor</th>
            <th width="5%">ideditorial</th>
            <th width="5%">anio</th>
            <th width="20%">Operaciones</th>
        </tr>
    <?php while ($fila = mysqli_fetch_array($query))
         {
    ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><img src="images/<?php echo $fila['imagen'];?>" width="100px"></td>
            <td><?php echo $fila['titulo'] ?></td>
            <td><?php echo $fila['autor'] ?></td>
            <td><?php echo $fila['ideditorial'] ?> </td>
            <td><?php echo $fila['anio'] ?> </td>
            <td>
                <a href="editar.php">Editar</a>
                <a href="delete.php">Eliminar</a>     	
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div>
    <?php 
    mysqli_close ($con);
    ?>

</div>