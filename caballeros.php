<?php 
require "conexion.php"



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/roperiasteel.css">

	<title>Boutique Brillo</title>
</head>
<body>
	<header class="cabecera">
		<div class="logo">
			<img src="img/logo.jpg">
		</div>
		<nav class="menu">
			<ul class="menu-principal">

				<li class="li-item"><a href="#" class="item">Damas</a>
					<ul class="sub-menu">
						<li class="sub-litem"><a href="#" class="sub-item">Ropa Interior</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bermudas</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Crossfit</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Abrigos</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Formal</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bikinis</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Jean's</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Remeras</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Short</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Disfraces</a></li>
					</ul>
				</li>
				<li class="li-item"><a href="caballeros.php" class="item">Caballeros</a>
					<ul class="sub-menu">
						<li class="sub-litem"><a href="#" class="sub-item">Ropa Interior</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bermudas</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Crossfit</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Abrigos</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Formal</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bikinis</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Jean's</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Remeras</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Short</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Disfraces</a></li>
					</ul>
				</li>
				<li class="li-item"><a href="#" class="item">Niños</a>
					<ul class="sub-menu">
						<li class="sub-litem"><a href="#" class="sub-item">Mayas</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Ropa Interior</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bermudas</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Crossfit</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Abrigos</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Formal</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bikinis</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Jean's</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Remeras</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Short</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Disfraces</a></li>
					</ul>
				</li>
				<li class="li-item"><a href="#" class="item">Hogar</a>
					<ul class="sub-menu">
						<li class="sub-litem"><a href="#" class="sub-item">Mayas</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Ropa Interior</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bermudas</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Crossfit</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Abrigos</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Formal</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Bikinis</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Jean's</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Remeras</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Short</a></li>
						<li class="sub-litem"><a href="#" class="sub-item">Disfraces</a></li>
					</ul>
				</li>
			</ul>
			
		</nav>
	</header>

<div class="main1">
		<img src="Img/ropa.jpg">
		<h1>Bienvenidos a "Boutique Brillo" donde encontraras lo ultimo en la moda.</h1>
			<main>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</main>
			<div class="welcome">
				<h2>
				<?php
				
				include("conexion.php");
				
				?>	
				</h2>
			</div>


	</div>
	<footer class="footer">
		<div class="contactos">
			<ul >
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Twitter</a></li>
				<li>Email@gmail.com</li>
			</ul>
		</div>
		
	</footer>
</body>
</html>