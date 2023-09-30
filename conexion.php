<?php 
try {
	$base = new PDO('mysql:host=localhost; dbname=roperia_brillo','root','');
	echo 'conexion ok';
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET UTF8");

	$select = "SELECT * FROM PRODUCTOS; "
} catch (Exception $e) {
	
}

 ?>
