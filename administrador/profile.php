<?php 
session_start();
if(empty($_SESSION['id'])){
    header("Location:index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/roperiasteel.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="profile">

            <h2>Perfil</h2>
            <span>Completa el formulario con tus datos</span>
            <form action="">
                <input type="text" name="nombres" placeholder="Nombres">
                <input type="text" name="apellidos" placeholder="Apellidos">
                <input type="text" name="telefono" placeholder="Telefono">
                <input type="file" class="form-control" name="imagen">
            </form>
        </div>
        <?php
        if(!empty($_POST['nombres'] and  !empty))
        ?>

    </main>    
    
</body>
</html>