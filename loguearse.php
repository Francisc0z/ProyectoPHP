<!DOCTYPE html>
<html>
<head>
	<title>Loguearse</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link  rel="icon"   href="imagenes/logo.png" type="image/png" />
</head>
<body>
				<div class="cuadricula">
		<div class="a">
			<div class="nav">
					<input type="checkbox" id="btn-menu">
					<label for="btn-menu" id="imgbtn"><img src="imagenes/lista.png"></label>
					<nav class="barra">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="#">Consultas</a></li>
							<li><a href="#">Sobre nosotros</a></li>
							<li><a href="#">Soporte</a></li>
							<li><a href="#">FAQ</a></li>	
							<li><a href="lista.php">Listar</a></li>						
							<li><a href="form.html">Registrarse</a></li>
							<li><a href="loguearse.php">Iniciar sesion </a></li>
						</ul>
					 </nav>
				</div>
		</div>
		<div class="b">
				<div class="formulario">
					<h2>Iniciar Sesion</h2>
					<div class="cajaform">
						<div class="inputbox w50">
							<input type="text" name="" required>
							<span>Nombre</span>
						</div>
						<div class="inputbox w50">
							<input type="text" name="" required>
							<span>Apellido</span>
						</div>
						<div class="inputbox w50">
							<input type="text" name="" required>
							<span>Email</span>
						</div>
						<div class="inputbox w50">
							<input type="password" name="" required>
							<span>Contraseña</span>
						</div>
						<?php 
							include("registro.php");
		 				?>
						<div class="inputbox w100">
							<input type="submit" name="Ingresar">
						</div>
					</div>
			</div>
		</div>
		<div class="d">
			Derechos reservados Salud Instantanea ©<br>
			Creadores: <a href="">Francisco Silva</a> y <a href="">Valentino Roggeroni.</a> <br>
			<a href="https://instagram.com/pancho.silva9?igshid=73hjcjr3xg0x"><img src="imagenes/facebook.png"></a>
			<a href="https://instagram.com/pancho.silva9?igshid=73hjcjr3xg0x"><img src="imagenes/instagram.png"></a>
			<a href="https://instagram.com/pancho.silva9?igshid=73hjcjr3xg0x"><img src="imagenes/youtube.png"></a>
		</div>
	</div>
</body>
</html>