<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>AutomatiCar</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--Made with love by Mutiullah Samim -->
        <link href="../assets/css/cssLogin.css" rel="stylesheet" type="text/css"/>
	<!--Bootsrap 4 CDN-->
        <!-- integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous"/>
        <!--Fontawesome CDN-->
        <!--integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous"/>
	<!--Custom styles
	<link rel="stylesheet" type="text/css" href="../styles.css">-->
</head>
<body background="../images/Fondo2.jpg">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Crear cuenta</h3>
			</div>
			<div class="card-body">
                            <form action="../clAutomaticarController/userController.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" name="apellidoP" placeholder="Apellido paterno">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" name="apellidoM" placeholder="Apellido materno">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                                                <input type="email" class="form-control" name="email" placeholder="Email">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                                            <input type="password" class="form-control" name="userpass1" placeholder="Contraseña">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                                            <input type="password" class="form-control" name="userpass2" placeholder="Repetir contraseña">
					</div>
					<div class="form-group">
                                            <button type="submit" name="1" class="btn float-right login_btn">Siguiente</button>
					</div>
                                        <div class="form-group">
                                            <input type="button" value="Atrás" class="btn float-left login_btn" onClick=" window.location.href='../clAutomaticarView/Login.php' ">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
