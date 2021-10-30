<?php 
include("db.php");

if (isset($_POST['Ingresar']))  {
	if (strlen($_POST['nombre']) >=1 && (strlen($_POST['email']) >= 1)){

		$nombre=trim($_POST['nombre']);
		$apellido=trim($_POST['apellido']);
		$dni=trim($_POST['dni']);
		$fechanacimiento=trim($_POST['fechanacimiento']);
		$estudios=trim($_POST['estudios']);
		$email=trim($_POST['email']);
		$contraseña=trim($_POST['contraseña']);

		if ($fechanacimiento!="") {
		$fecha=explode('-', $fechanacimiento);
		$fechan=(string)$fecha[2]."/".$fecha[1]."/".$fecha[0];
		$añonac= (int)$fecha[0];
		$mesnac= (int)$fecha[1];
		$dianac= (int)$fecha[2];

		$hoy=date("yy-m-d");
		$hoy= explode('-', $hoy);
		$año=(int)$hoy[0];
		$edad= $año-$añonac;

		if ($edad>0) {
			if ($edad<15) {
				$franjaeterea="nino";
			}elseif (($edad>15) && ($edad  < 18)) {
				$franjaeterea="adolescente";
			}elseif ($edad<60){
				$franjaeterea="adulte";
			}else{
				$franjaeterea="adultemayor";
			}
		}

		$consulta="INSERT INTO medico(nombre,apellido,email,dni,fechanacimiento,estudios,contraseña,fechaingreso,franjaeterea,edad) VALUES ('$nombre','$apellido','$email','$dni','$fechanacimiento','$estudios','$contraseña',now(),'$franjaeterea','$edad')";

		$resultado= mysqli_query($conex,$consulta);

		if ($resultado) {
			?>
				<h3 class="ok">Tu pedido se ha realizado correctamente</h3>
			<?php
		}else{
			?>
			<h3 class="bad">Ha ocurrido un error</h3>
			<?php
		}
	   }else{
            ?>
            <h3 class="bad">Por favor complete todos los campos</h3>
		  <?php
	   }
	   }else{
			echo "Ingrese una edad valida";
		}
	}

?>