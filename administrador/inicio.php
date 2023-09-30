<?php 
session_start();
if(empty($_SESSION['id'])){
    header("Location:index.php");
}
?>


<?php include('template/cabecera.php');?>

    <div class="jumbotron">
        <h1 class="display-3">Bienvenido <?php echo $_SESSION['nombreUsuario']; ?></h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p><a href="profile.php">Perfil</a>

        </p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="seccion/carga_productos.php" role="button">Administrar libros</a>
        </p>
    </div>
<? php include('template/pie.php'); ?>