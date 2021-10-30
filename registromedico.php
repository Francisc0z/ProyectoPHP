<!DOCTYPE html>
<html>
<head>
	<title>Registro medico</title>
	<link rel="stylesheet" type="text/css" href="registrocss.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link  rel="icon"   href="imagenes/logo.png" type="image/png" />
	<meta charset="utf-8">
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
			<form method="post">	
				<div class="formulario">
					<h2>Registrate como medico</h2>
					<div class="cajaform">

						<div class="inputbox w50">
							<input type="text" name="nombre" required>
							<span>Nombre</span>
						</div>
						<div class="inputbox w50">
							<input type="text" name="apellido" required>
							<span>Apellido</span>
						</div>
						<div class="inputbox w50">
							<input type="text" name="email" required>
							<span>Email</span>
						</div>
						<div class="inputbox w50">
							<input type="text" name="dni" required>
							<span>DNI</span>
						</div>
						<div class="inputbox w50">
							<input type="date" name="fechanacimiento" min="1950-01-01" max="2018-12-31">
							<span>Fecha de nacimiento</span>
						</div>
						<div class="inputbox w50">
							<select name="estudios">
								<option>Enfermería</option>
								<option>Biomedicina</option>
								<option>Odontología</option>
								<option>Oftalmología</option>
								<option>Psiquiatría</option>
								<option>Paramédico</option>
								<option>Nutrición</option>
								<option>Quiropráctica</option>
								<option>Terapia física</option>
								<option>Genética</option>
							</select>
								<span>Tipo de estudios completados</span>						
						</div>
						<div class="inputbox w50">
							<input type="password" name="contraseña" required>
							<span>Contraseña</span>
						</div>
						<div class="inputbox w50">
							<input type="password" name="contraseña2" required>
							<span>Repita su contraseña</span>
						</div>
						<?php 
							include("registro.php");
		 				?>
						<div class="inputbox w100">
							<input type="submit" name="Ingresar">
						</div>
					</div>
				</form>
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
	<?php 

	?>
</body>
</html>