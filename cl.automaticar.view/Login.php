<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   <link href="../assets/css/cssLogin.css" rel="stylesheet" type="text/css"/>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body background="../images/544750.jpg">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card2">
			<div class="card-header">
				<h3>Iniciar sesión</h3>
			</div>
			<div class="card-body">
				<form action="../cl.automaticar.controller/userController.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                                            <input type="email" class="form-control" name="username" placeholder="Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="userpass" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn float-right login_btn">
					</div>
				</form>
                            
			</div>
                    <div class="card-footer">
				<div class="d-flex justify-content-center links">
                                    No tienes cuenta?<a href="CrearCuenta.php">Registrate</a>
				</div>
				<div class="d-flex justify-content-center">
                                    <a href="RecuperarContrasenia.php">Olvidaste tu contraseña?</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>