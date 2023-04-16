<?php include('../template/cabecera.php') ;
include('../config/db.php');

$query = "SELECT * FROM PRODUCTOS";
$Resultado = $conexion->query($query);
while($row = $Resultado->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
        <table>
            <th><td><?php echo $row['id']?></td></th>
            <th><td><?php echo $row['nombre']?></td></th>
            <th><td><img src="../../img/1.jpg"></td>
            </th>
        </table>
    </tr>
    <?php
    
    }
    
    ?>
    



<main>
    <div>

    </div>
</main>