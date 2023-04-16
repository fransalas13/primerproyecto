<?php
include('db.php');
   
    
    
    $fecha = new DateTime();
    $nombreArchivo=($imagen=!"")?$fecha->getTimestamp()."_".$_FILES["Imagen"]["name"]:"imagen.jpg";





?>