<?php   
$host = 'localhost';
$db = 'roperia_brillo';
$usuario = 'root';
$contrasenia='';

try{
    $conexion = new PDO("mysql:host=$host; dbname=$db",$usuario,$contrasenia);
    if ($conexion) {
    }
    
}catch(Exception $ex){
    echo $ex->getMessage();

}





?>