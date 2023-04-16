<?php
session_start();
if(!isset($_SESSION['usuario'])){
     
    header("Location:../inicio.php");
}else{
    if($_SESSION['usuario']=="ok"){
        $nombreUsuario = $_SESSION["nombreUsuario"];
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="menu">
           <ul>
            <li><a href="">Agregar Productos</a></li>
            <li><a href="">Revisar Stock</a></li>
            <li><a href="">Ver ventas</a></li>
            <li><a href="">Cerrar</a></li>
            <li><a href="">Dar de baja</a></li>

           </ul>
        </div>
    </header>
</body>
<div class="container">
        <div class="row">