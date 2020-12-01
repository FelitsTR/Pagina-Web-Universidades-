<?php
        if(isset($_POST['Registrarse'])){
            include('conexiones/conexion.php');
            $nombre_usu = $_POST['nombre_usu'];
            $telefono_usu = $_POST['telefono_usu'];
			$correo_usu = $_POST['correo_usu'];
			$clave_usu = $_POST['clave_usu'];
			$motivo_usu = $_POST['motivo_usu'];
			if ($clave_usu == $_POST["repeat-pass"]) {
				// acción en caso correcto
				$Query = "INSERT INTO usuarios (nombre_usu, telefono_usu, correo_usu, clave_usu, motivo_usu) VALUES ('$nombre_usu', '$telefono_usu', '$correo_usu', '$clave_usu', '$motivo_usu')";
				$Result = mysqli_query($conexion, $Query);
				echo "<h3 class=\"ok\">Se ha creado su cuenta</h3>";
				$asunto = "Felicidades, te has registrado exitosamente.";
				$msg = "Nos alegra que estes aquí.

Te damos la bienvenida a la Feria Universitaria Virtual, sitio ideal para consultar y trasmitir información de educación superior.

Contamos con la participacion de las diversas universidades existentes a lo largo de Quintana Roo e información detallada de cada una, además de tener una variedad de herramientas con la que esperamos hacer tu experiencia más agradable, insentivando así, la continuación de los estudios superiores.

Gracias por tu confianza.";
            	$header = "From: feriauniversitariaqroo@gmail.com"."\r\n";
            	$header.= "Reply-To: ".$correo_usu;
            	$mail = @mail($correo_usu,$asunto,$msg,$header);
				mysqli_close($conexion);
			}
			else {
				// acción en caso incorrecto
				echo "<h3>Las claves no coinciden</h3>";
			} 
            // if($mail){
            //     echo "<h4> Correo enviado. </h4>";
            // }
            // else{
            //     echo "ERROR";
            // }
        }
		?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.png');"></div>

			<a href=""></a>
 
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form method="POST" class="login100-form validate-form">
					<a href="index.php">Inicio</a><br><br>	<span class="login100-form-title p-b-59 text-center">
						Iniciar sesión
						</span>
						<!-- nombre del estudiante -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" name="nombre_usu" placeholder="Nombre Completo..." required>
						<span class="focus-input100"></span>
					</div>
					<!-- Email del estudiante -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="correo_usu" placeholder="Correo electronico..." required>
						<span class="focus-input100"></span>
					</div>
					<!-- telefono del estudiante -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">telefono_usu</span>
						<input class="input100" type="Tel" name="telefono_usu" placeholder="Telefono..." required>
						<span class="focus-input100"></span>
					</div>

					<!-- Contraseña del estudiante -->
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="clave_usu" placeholder="*************" id="pass1" required>
						<span class="focus-input100"></span>
					</div>
					<!-- Contraseña del estudiante x2 -->
					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repite tu contraseña</span>
						<input class="input100" type="password" name="repeat-pass" placeholder="*************" id="pass2" required>
						<span class="focus-input100"></span>
					</div>

					<!-- Select box del motivo que eligieron -->
					<div class="w-100 mb-4">
					<select name="motivo_usu" class="mdb-select md-form w-100" required>
						<option value="" disabled selected>Motivo de la visita a la feria </option>
						<option value="1">Soy egresado o estoy estudiando en nivel bachillerato</option>
						<option value="2">Soy padre o tutor</option>
						<option value="3">Estoy trabajando y quiero volver a estudiar</option>
					</select>
					
					</div>

					

					<div class="container-login100-form-btn justify-content-center pb-4">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" value="Enviar" name="Registrarse" id="register">
								Enviar
							</button>
						</div>
					</div>

		

					<div class="container-login100-form-btn justify-content-center w-100">
						<a href="login_usu.php" class="">
							Iniciar sesión
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>