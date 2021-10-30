<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link  rel="icon"   href="imagenes/logo.png" type="image/png" />
	<link rel="stylesheet" type="text/css" href="csslista.css">
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
				<form method="post" action="lista.php">
<div class="select">
	<select name="filtro">
		<option value="todos">Todos</option>
		<option value="nino">Niñes</option>
		<option value="joven">Joven</option>
		<option value="adulto">Adulto</option>
		<option value="adultomayor">Adulto Mayor</option>
	</select><br>
</div>
	<input type="submit" value="Filtrar">
</form>
<?php 
		include("db.php");
			if (!$conex) {
				echo "error en la conexion";		
			}else{
				if (isset($_POST['filtro'])) {
					switch ($_POST['filtro']) {
					case 'todos':
						$mysqli="SELECT nombre,apellido,email,dni,fechanacimiento,estudios,contraseña,fechaingreso,franjaeterea,edad FROM `medico`";
					break;
					case 'nino':
						$mysqli="SELECT nombre,apellido,email,dni,fechanacimiento,estudios,contraseña,fechaingreso,franjaeterea,edad FROM `medico` WHERE franjaeterea='nino'";
					break;
					case 'joven':
					$mysqli="SELECT nombre,apellido,email,dni,fechanacimiento,estudios,contraseña,fechaingreso,franjaeterea,edad FROM `medico` WHERE franjaeterea='adolescente'";
					break;
					case 'adulto':
						$mysqli="SELECT nombre,apellido,email,dni,fechanacimiento,estudios,contraseña,fechaingreso,franjaeterea,edad FROM `medico` WHERE franjaeterea='adulte'";
					break;
					default:
						$mysqli="SELECT nombre,apellido,email,dni,fechanacimiento,estudios,contraseña,fechaingreso,franjaeterea,edad FROM `medico` WHERE franjaeterea='adultemayor'";
					break;
				}
				$resultado = mysqli_query($conex,$mysqli);
				if (!$resultado) {
					die('Ocurrio un error al obtener los valores').mysqli_error();
				}
				echo " <center><table><thead>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Dni</th>
				<th>Fecha de nacimiento</th>
				<th>Estudios</th>
				<th>Contraseña</th>
				<th>Fecha de registro</th>
				<th>Franja eterea</th>
				<th>Edad</th></thead>";
				while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
					echo "<tr><td>{$row['nombre']}</td>".
					"<td>{$row['apellido']}</td>".
					"<td>{$row['email']}</td>".
					"<td>{$row['dni']}</td>".
					"<td>{$row['fechanacimiento']}</td>".
					"<td>{$row['estudios']}</td>".
					"<td>{$row['contraseña']}</td>".
					"<td>{$row['fechaingreso']}</td>".
					"<td>{$row['franjaeterea']}</td>".
					"<td>{$row['edad']}</td></tr><br>";	
				}
				echo "</table> </center>";
				mysqli_close($conex);
			}
		}
 ?>
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
