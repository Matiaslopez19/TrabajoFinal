<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>AutomatiCar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />

        <title></title>
    </head>
    <body>
        <div class="content">

                                                                    
                                                                    <h2 class="align-center">Crear cuenta</h2>
								<hr />
								<form action="#" method="post">
									<div class="field">
                                                                            <div class="field half">
										<label>Nombre</label>
										<input name="Nombre" id="nombre" type="text" placeholder="Nombre">
                                                                            </div>
                                                                            <div class="field half">
										<label>Apellido Paterno</label>
										<input name="apellidoP" id="apellidoP" type="text" placeholder="Apellido Paterno">
                                                                            </div>
                                                                            <div class="field half">
										<label>Apellido Materno</label>
										<input name="apellidoM" id="apellidoM" type="text" placeholder="Apellido Materno">
                                                                            </div>
                                                                            <div class="field half">
										<label>Email</label>
                                                                                <input name="email" id="email" type="email" placeholder="Email">
                                                                            </div>
                                                                            <div class="field half">
										<label>Contraseña</label>
                                                                                <input name="contraseña" id="contraseña" type="password" placeholder="Contraseña">
                                                                            </div>
                                                                            <div class="field half">
										<label>Confirmar contraseña</label>
                                                                                <input name="contraseña1" id="contraseña1" type="password" placeholder="Confirmar contraseña">
                                                                            </div>									
                                                                        <ul class="actions align-center">
										<li><input type="button" class="button special" value="Atrás" onClick=" window.location.href='Login.php' "></li> 
									</ul>
									<ul class="actions align-center">
										<li><input value="Crear cuenta" class="button special" type="submit"></li>
									</ul>
                                                                        
								</form>
							</div>
        <?php
        // put your code here
        ?>
    </body>
</html>
