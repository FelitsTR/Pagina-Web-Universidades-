<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio de sesión</title>
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
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form action="validar_usu.php" method="POST" class="login100-form validate-form">
					<a href="index.php">Inicio</a><br><br><span class="login100-form-title p-b-59 text-center">
						Iniciar sesión
					</span>
                    <div class="container-login100-form-btn justify-content-center w-100 mb-5">
                        <a href="login_uni.php" class="">
                            Iniciar Sesión como Universidad
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
					</div>
					<div class="w-100 font-weight-bold text-center">
						<p class="h3">Usuarios</p>
                    </div>
					<!-- Email del estudiante -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="correo_usu" placeholder="Correo electronico..." required>
						<span class="focus-input100"></span>
					</div>
					<!-- Contraseña del estudiante -->
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="clave_usu" placeholder="*************" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn justify-content-center pb-4">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit" value="Enviar" name="Iniciar_1" id="Iniciar_1">
                                    Iniciar Sesión
								</button>
							</div>
							
                        </div>
						<div class="container-login100-form-btn justify-content-center w-100">
						<a href="register.php" class="">
							Registrarse
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
					</div>
					
				</form>
				<div class="login100-more" style="background-image: url('images/bg-02.png');"></div>
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